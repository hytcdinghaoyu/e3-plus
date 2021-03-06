<?php


namespace App\Services\Hub\Jobs;


use App\Jobs\Job;
use App\Services\AisinoInvoiceServer;
use Carbon\Carbon;
use Exception;

class TradeInvoiceApplyQueryJob extends Job
{
    // @todo 推送队列优先级
    public $queue = 'default';

    /**
     * @var array
     */
    public $invoiceApply;

    public $config;

    // 重试三次
    // public $tries = 3;
    // 间隔十秒
    // public $delay = 5;
    // maxTries

    /**
     * SysStdPushAsyncBatchJob constructor.
     *
     * @param array $invoiceApply
     */
    public function __construct($invoiceApply)
    {
        $this->invoiceApply = $invoiceApply;
    }

    /**
     * @throws Exception
     *
     * @author linqihai
     * @since 2020/1/18 16:38
     */
    public function handle()
    {
        $invoiceApply = $this->invoiceApply; //firstOrCreate
        $server = new AisinoInvoiceServer();
        $result = $server->fetchApply($invoiceApply);
        if (!empty($result)) {
            // @todo 执行查询明细创建接口
            dispatch(new TradeInvoiceDetailQueryAndCreateJob($invoiceApply));
        } else {
            $next_query_at = Carbon::now()->addHours(12); // 12 小时后查询
        }
        return true;
    }

    /**
     * 处理失败
     *
     * @param Exception $e
     *
     * @author linqihai
     * @since 2020/3/2 20:28
     */
    public function failed(Exception $e)
    {
        // 新增或者设置下一次查询时间
    }

    /**
     * 获取分配给这个任务的标签
     *
     * @return array
     */
    public function tags()
    {
        return ['invoice_apply_queue'];
    }
}

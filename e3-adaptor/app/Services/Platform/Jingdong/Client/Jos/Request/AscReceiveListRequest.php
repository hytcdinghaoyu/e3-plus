<?php


namespace App\Services\Platform\Jingdong\Client\Jos\Request;


use App\Services\Platform\Jingdong\Client\Jos\JosRequest;


/**
 * 查询待收货服务单列表
 *
 * Class AscReceiveListRequest
 *
 * @package App\Services\Platform\Jingdong\Client\Jos\Request
 *
 * @method $this setBuId($value) 商家编号
 * @method $this setOperatePin($value) 操作人账号
 * @method $this setOperateNick($value) 操作人姓名
 * @method $this setServiceId($value) 服务单号
 * @method $this setOrderId($value) 订单号
 * @method $this setSkuId($value) 商品编号
 * @method $this setApplyTimeBegin($value) 申请时间开始
 * @method $this setApplyTimeEnd($value) 申请时间结束
 * @method $this setExpressCode($value) 运单号
 * @method $this setTimeoutFlag($value) 是否超时
 * @method $this setCustomerPin($value) 客户账号
 * @method $this setCustomerName($value) 客户姓名
 * @method $this setCustomerTel($value) 客户电话
 * @method $this setDealType($value) 处理方式
 * @method $this setCustomerExpect($value) 客户期望
 * @method $this setJdInterveneFlag($value) 是否京东介入
 * @method $this setApproveResult($value) 返回方式
 * @method $this setApproveReasonCid1($value) 一级审核原因
 * @method $this setOrderShopId($value) 订单门店ID
 * @method $this setReturnShopId($value) 售后门店ID
 * @method $this setPageNumber($value) 从1开始)
 * @method $this setPageSize($value) 每页大小（1\x7e50，默认10）
 * @method $this setExtJsonStr($value) 扩展条件（JSON格式）
 *
 * jingdong_asc_receive_list_responce.pageResult.data
 */
class AscReceiveListRequest extends JosRequest
{
    /**
     * 接口名称
     *
     * @var string
     * @see https://jos.jd.com/api/detail.htm?apiName=jingdong.asc.receive.list&id=2114
     */
    protected $apiName = 'jingdong.asc.receive.list';

    protected $paramKeys = [
        'buId', // 商家编号
        'operatePin', // 操作人账号
        'operateNick', // 操作人姓名
        'serviceId', // 服务单号
        'orderId', // 订单号
        'skuId', // 商品编号
        'applyTimeBegin', // 申请时间开始
        'applyTimeEnd', // 申请时间结束
        'expressCode', // 运单号
        'timeoutFlag', // 是否超时
        'customerPin', // 客户账号
        'customerName', // 客户姓名
        'customerTel', // 客户电话
        'dealType', // 处理方式
        'customerExpect', // 客户期望
        'jdInterveneFlag', // 是否京东介入
        'approveResult', // 返回方式
        'approveReasonCid1', // 一级审核原因
        'orderShopId', // 订单门店ID
        'returnShopId', // 售后门店ID
        'pageNumber', // 页码(从1开始)
        'pageSize', // 每页大小（1\x7e50，默认10）
        'extJsonStr', // 扩展条件（JSON格式）
    ];

    protected $defaultParamValues = [
        'operatePin' => 'adaptor',
        'operateNick' => 'adaptor',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->buId, "buId");
        //RequestCheckUtil::checkNotNull($this->operatePin, "operatePin");
        //RequestCheckUtil::checkNotNull($this->operateNick, "operateNick");
    }
}
<?php
namespace FeiZhu\TopSdk\Defaultability;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoTmcUserGetRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoLogisticsInstantTraceSearchRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsSellerWriteoffRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsSellerSendRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsSellerOrdersGetRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsOfflineSendRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsConsignResendRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaAscpLogisticsConsignModifyRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoTmcUserCancelRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoTmcUserPermitRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseItemAddRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseOrderQueryRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseMerchantShippinginfoUploadRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseItemUpdateRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseMerchantQualityFeedbackRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseMerchantConfirmsignRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseItemStatusUpdateRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseMerchantAuditRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseMerchantOrderCancelRequest;
use FeiZhu\TopSdk\Defaultability\Request\AlibabaFliggyLeaseItemInventoryUpdateRequest;
use FeiZhu\TopSdk\Defaultability\Request\TaobaoLogisticsOrderCreateRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        物流详情查询
    **/
    public function taobaoLogisticsInstantTraceSearch(TaobaoLogisticsInstantTraceSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.instant.trace.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送核销
    **/
    public function alibabaAscpLogisticsSellerWriteoff(AlibabaAscpLogisticsSellerWriteoffRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.writeoff", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送发货
    **/
    public function alibabaAscpLogisticsSellerSend(AlibabaAscpLogisticsSellerSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家配送核销订单列表查询
    **/
    public function alibabaAscpLogisticsSellerOrdersGet(AlibabaAscpLogisticsSellerOrdersGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.orders.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自己联系物流发货
    **/
    public function alibabaAscpLogisticsOfflineSend(AlibabaAscpLogisticsOfflineSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.offline.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改物流公司和运单号
    **/
    public function alibabaAscpLogisticsConsignResend(AlibabaAscpLogisticsConsignResendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.resend", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改物流公司和运单号
    **/
    public function alibabaAscpLogisticsConsignModify(AlibabaAscpLogisticsConsignModifyRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪租赁商品推送
    **/
    public function alibabaFliggyLeaseItemAdd(AlibabaFliggyLeaseItemAddRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.item.add", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁订单信息查询
    **/
    public function alibabaFliggyLeaseOrderQuery(AlibabaFliggyLeaseOrderQueryRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.order.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商家上传发货信息
    **/
    public function alibabaFliggyLeaseMerchantShippinginfoUpload(AlibabaFliggyLeaseMerchantShippinginfoUploadRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.merchant.shippinginfo.upload", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商品更新
    **/
    public function alibabaFliggyLeaseItemUpdate(AlibabaFliggyLeaseItemUpdateRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.item.update", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商家回传质检结果
    **/
    public function alibabaFliggyLeaseMerchantQualityFeedback(AlibabaFliggyLeaseMerchantQualityFeedbackRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.merchant.quality.feedback", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商家操作确认签收
    **/
    public function alibabaFliggyLeaseMerchantConfirmsign(AlibabaFliggyLeaseMerchantConfirmsignRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.merchant.confirmsign", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商品上下架
    **/
    public function alibabaFliggyLeaseItemStatusUpdate(AlibabaFliggyLeaseItemStatusUpdateRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.item.status.update", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商家审核
    **/
    public function alibabaFliggyLeaseMerchantAudit(AlibabaFliggyLeaseMerchantAuditRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.merchant.audit", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商家取消订单
    **/
    public function alibabaFliggyLeaseMerchantOrderCancel(AlibabaFliggyLeaseMerchantOrderCancelRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.merchant.order.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪租赁商品库存更新
    **/
    public function alibabaFliggyLeaseItemInventoryUpdate(AlibabaFliggyLeaseItemInventoryUpdateRequest $request) {
        return $this->client->execute("alibaba.fliggy.lease.item.inventory.update", $request->toMap(), $request->toFileParamMap());
    }
    /**
        创建物流订单
    **/
    public function taobaoLogisticsOrderCreate(TaobaoLogisticsOrderCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.order.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
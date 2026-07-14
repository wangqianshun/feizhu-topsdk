<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantOrderCancelCancelOrderRequest;

class AlibabaFliggyLeaseMerchantOrderCancelRequest {

    /**
        商家取消订单请求
     **/
    private $cancelOrderRequest;


    public function getCancelOrderRequest() : AlibabaFliggyLeaseMerchantOrderCancelCancelOrderRequest{
        return $this->cancelOrderRequest;
    }

    public function setCancelOrderRequest(AlibabaFliggyLeaseMerchantOrderCancelCancelOrderRequest $cancelOrderRequest){
        $this->cancelOrderRequest = $cancelOrderRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.order.cancel";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cancelOrderRequest)) {
            $requestParam["cancel_order_request"] = TopUtil::convertStruct($this->cancelOrderRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


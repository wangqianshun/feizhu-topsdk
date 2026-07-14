<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantOrderCancelCancelOrderRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        取消原因（最多100字符）
     **/
    public $reason;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }


}


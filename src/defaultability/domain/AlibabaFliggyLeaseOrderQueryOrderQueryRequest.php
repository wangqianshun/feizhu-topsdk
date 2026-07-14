<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryOrderQueryRequest {

    /**
        订单id
     **/
    public $order_id;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }


}


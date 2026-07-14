<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsCpGetLogisticsResourceRequest {

    /**
        可选值:offline(自己联系发货),online(在线下单),all(自己联系+在线下单)instant(同城配送). 
     **/
    public $order_mode;


    public function getOrderMode() : string{
        return $this->order_mode;
    }

    public function setOrderMode(string $orderMode){
        $this->order_mode = $orderMode;
    }


}


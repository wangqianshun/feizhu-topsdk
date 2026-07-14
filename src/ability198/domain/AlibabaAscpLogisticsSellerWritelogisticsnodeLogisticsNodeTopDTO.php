<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsSellerWritelogisticsnodeLogisticsNodeTopDTO {

    /**
        ACCEPT(已揽收),TRANSPORT(运输中),DELIVERING(派送中),SIGN(已签收),CANCEL(已取消),FAILED(物流异常)
     **/
    public $action;

    /**
        操作时间戳，精确到毫秒（ms）
     **/
    public $operate_time;

    /**
        配送员信息
     **/
    public $delivery;

    /**
        货物所在的当前位置
     **/
    public $location;


    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
    }

    public function getOperateTime() : int{
        return $this->operate_time;
    }

    public function setOperateTime(int $operateTime){
        $this->operate_time = $operateTime;
    }

    public function getDelivery() : AlibabaAscpLogisticsSellerWritelogisticsnodeDeliveryTopDTO{
        return $this->delivery;
    }

    public function setDelivery(AlibabaAscpLogisticsSellerWritelogisticsnodeDeliveryTopDTO $delivery){
        $this->delivery = $delivery;
    }

    public function getLocation() : AlibabaAscpLogisticsSellerWritelogisticsnodeLocationTopDTO{
        return $this->location;
    }

    public function setLocation(AlibabaAscpLogisticsSellerWritelogisticsnodeLocationTopDTO $location){
        $this->location = $location;
    }


}


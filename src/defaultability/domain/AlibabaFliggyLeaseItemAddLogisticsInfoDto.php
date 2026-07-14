<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemAddLogisticsInfoDto {

    /**
        发货地，若多仓发货请传：多仓发货
     **/
    public $shipping_location;

    /**
        发货时效（小时），例24小时内、48小时内
     **/
    public $delivery_time_hours;


    public function getShippingLocation() : string{
        return $this->shipping_location;
    }

    public function setShippingLocation(string $shippingLocation){
        $this->shipping_location = $shippingLocation;
    }

    public function getDeliveryTimeHours() : int{
        return $this->delivery_time_hours;
    }

    public function setDeliveryTimeHours(int $deliveryTimeHours){
        $this->delivery_time_hours = $deliveryTimeHours;
    }


}


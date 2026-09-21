<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemQueryExtraServiceDto {

    /**
        增值服务名称：碎屏保障/安心保障
     **/
    public $service_name;

    /**
        增值服务费用，单位分
     **/
    public $service_fee;


    public function getServiceName() : string{
        return $this->service_name;
    }

    public function setServiceName(string $serviceName){
        $this->service_name = $serviceName;
    }

    public function getServiceFee() : int{
        return $this->service_fee;
    }

    public function setServiceFee(int $serviceFee){
        $this->service_fee = $serviceFee;
    }


}


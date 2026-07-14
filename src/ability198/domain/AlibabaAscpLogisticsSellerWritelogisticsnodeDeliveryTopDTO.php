<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsSellerWritelogisticsnodeDeliveryTopDTO {

    /**
        配送员电话，支持手机、座机、400电话
     **/
    public $phone;

    /**
        配送员姓名
     **/
    public $name;


    public function getPhone() : string{
        return $this->phone;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability15\Domain;

class TaobaoWlbStoresBaseinfoGetStoreInfo {

    /**
        仓库真实名字
     **/
    public $real_name;

    /**
        XXX果园
     **/
    public $name;

    /**
        仓库服务代码
     **/
    public $service_code;

    /**
        详细地址
     **/
    public $address;


    public function getRealName() : string{
        return $this->real_name;
    }

    public function setRealName(string $realName){
        $this->real_name = $realName;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getServiceCode() : string{
        return $this->service_code;
    }

    public function setServiceCode(string $serviceCode){
        $this->service_code = $serviceCode;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }


}


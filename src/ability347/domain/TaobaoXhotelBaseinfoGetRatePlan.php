<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoGetRatePlan {

    /**
        系统商，一般不填写，使用须申请
     **/
    public $vendor;

    /**
        房价名称
     **/
    public $name;

    /**
        卖家自己系统的Code，简称RateCode
     **/
    public $rate_plan_code;

    /**
        阿里房价id
     **/
    public $rate_plan_id;

    /**
        1：开启2：关闭。
     **/
    public $status;


    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getRatePlanCode() : string{
        return $this->rate_plan_code;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->rate_plan_code = $ratePlanCode;
    }

    public function getRatePlanId() : int{
        return $this->rate_plan_id;
    }

    public function setRatePlanId(int $ratePlanId){
        $this->rate_plan_id = $ratePlanId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}


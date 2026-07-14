<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoRoomGetRatepPlan {

    /**
        系统商
     **/
    public $vendor;

    /**
        房价名称
     **/
    public $name;

    /**
        ratePlanCode
     **/
    public $rate_plan_code;

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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}


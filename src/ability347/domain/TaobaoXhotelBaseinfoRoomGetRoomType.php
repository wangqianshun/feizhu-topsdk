<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoRoomGetRoomType {

    /**
        房价列表
     **/
    public $rate_plan_list;

    /**
        系统商
     **/
    public $vendor;

    /**
        房型名称
     **/
    public $name;

    /**
        房型状态。0:正常，-1:删除，-2:停售
     **/
    public $status;

    /**
        outerId
     **/
    public $outer_id;


    public function getRatePlanList() : array{
        return $this->rate_plan_list;
    }

    public function setRatePlanList(array $ratePlanList){
        $this->rate_plan_list = $ratePlanList;
    }

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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


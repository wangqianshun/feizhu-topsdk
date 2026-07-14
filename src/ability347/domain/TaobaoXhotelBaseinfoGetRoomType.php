<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoGetRoomType {

    /**
        房型名称
     **/
    public $name;

    /**
        阿里房型id
     **/
    public $rid;

    /**
        房型状态。0:正常，-1:删除，-2:停售
     **/
    public $status;

    /**
        系统商，一般不填写，使用须申请
     **/
    public $vendor;

    /**
        商家房型ID
     **/
    public $outer_id;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


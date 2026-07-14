<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryStatusChangeRecordDto {

    /**
        变更时间
     **/
    public $timestamp;

    /**
        原状态，参考订单状态枚举
     **/
    public $from_status;

    /**
        目标状态，参考订单状态枚举
     **/
    public $to_status;

    /**
        状态变更原因
     **/
    public $reason;


    public function getTimestamp() : string{
        return $this->timestamp;
    }

    public function setTimestamp(string $timestamp){
        $this->timestamp = $timestamp;
    }

    public function getFromStatus() : string{
        return $this->from_status;
    }

    public function setFromStatus(string $fromStatus){
        $this->from_status = $fromStatus;
    }

    public function getToStatus() : string{
        return $this->to_status;
    }

    public function setToStatus(string $toStatus){
        $this->to_status = $toStatus;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }


}


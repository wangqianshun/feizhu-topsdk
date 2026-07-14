<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class TaobaoLogisticsInstantTraceSearchTopLogisticsNodeDTO {

    /**
        节点描述
     **/
    public $status_desc;

    /**
        当前节点发生时间
     **/
    public $status_time;

    /**
        节点枚举
     **/
    public $action;


    public function getStatusDesc() : string{
        return $this->status_desc;
    }

    public function setStatusDesc(string $statusDesc){
        $this->status_desc = $statusDesc;
    }

    public function getStatusTime() : int{
        return $this->status_time;
    }

    public function setStatusTime(int $statusTime){
        $this->status_time = $statusTime;
    }

    public function getAction() : string{
        return $this->action;
    }

    public function setAction(string $action){
        $this->action = $action;
    }


}


<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsOfflineSendConsignStatusRequest {

    /**
        子订单id（组合品不需要传系统会自动计算）
     **/
    public $sub_tid;

    /**
        子订单是否部分发货，true：部分发货；false：全部发货；周期购、分销订单不支持部分发货
     **/
    public $is_part_consign;


    public function getSubTid() : string{
        return $this->sub_tid;
    }

    public function setSubTid(string $subTid){
        $this->sub_tid = $subTid;
    }

    public function getIsPartConsign() : bool{
        return $this->is_part_consign;
    }

    public function setIsPartConsign(bool $isPartConsign){
        $this->is_part_consign = $isPartConsign;
    }


}


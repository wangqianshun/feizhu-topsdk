<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionCreateDateRange {

    /**
        开始日期，不传默认今天
     **/
    public $start;

    /**
        结束日期，不传默认今天+10年
     **/
    public $end;


    public function getStart() : string{
        return $this->start;
    }

    public function setStart(string $start){
        $this->start = $start;
    }

    public function getEnd() : string{
        return $this->end;
    }

    public function setEnd(string $end){
        $this->end = $end;
    }


}


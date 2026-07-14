<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionCreateTimeRange {

    /**
        开始时间,今夜甩卖 start_time 最早开始时间 14:00,限时特惠活动预订时间限当天，start_time最早开始时间 00:00:00
     **/
    public $start_time;

    /**
        今夜甩卖支持end_time 如果到第二天的凌晨，则需+24h，如第二天凌晨4点，即传28:00:00，最大到31:00:00；限时特惠活动预订时间限当天end_time最大为23:59:59。
     **/
    public $end_time;


    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }


}


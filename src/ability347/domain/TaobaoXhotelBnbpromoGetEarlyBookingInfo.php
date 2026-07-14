<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetEarlyBookingInfo {

    /**
        提前预定天数,时间范围为1-60天
     **/
    public $min_pre_booking_days;

    /**
        固定折扣百分比
     **/
    public $investment_number;

    /**
        连住天数
     **/
    public $min_continuity_stay;


    public function getMinPreBookingDays() : int{
        return $this->min_pre_booking_days;
    }

    public function setMinPreBookingDays(int $minPreBookingDays){
        $this->min_pre_booking_days = $minPreBookingDays;
    }

    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getMinContinuityStay() : int{
        return $this->min_continuity_stay;
    }

    public function setMinContinuityStay(int $minContinuityStay){
        $this->min_continuity_stay = $minContinuityStay;
    }


}


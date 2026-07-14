<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdateEarlyBookingInfo {

    /**
        最少提前预定天数，数字范围限定在1-60
     **/
    public $min_pre_booking_days;

    /**
        折扣比例，填30就意味着原价的30%，也就是打3折。数字范围限定在10-95之间
     **/
    public $investment_number;

    /**
        连住天数,可为空，范围1-60
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


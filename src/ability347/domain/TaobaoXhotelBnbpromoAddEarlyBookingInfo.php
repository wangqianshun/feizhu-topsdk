<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddEarlyBookingInfo {

    /**
        活动折扣
     **/
    public $investment_number;

    /**
        早定天数
     **/
    public $min_pre_booking_days;


    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getMinPreBookingDays() : int{
        return $this->min_pre_booking_days;
    }

    public function setMinPreBookingDays(int $minPreBookingDays){
        $this->min_pre_booking_days = $minPreBookingDays;
    }


}


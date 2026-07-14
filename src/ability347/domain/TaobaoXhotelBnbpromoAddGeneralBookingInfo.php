<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddGeneralBookingInfo {

    /**
        活动折扣
     **/
    public $investment_number;

    /**
        活动入住开始时间
     **/
    public $check_in_from;

    /**
        活动离店结束时间
     **/
    public $check_out_to;


    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getCheckInFrom() : string{
        return $this->check_in_from;
    }

    public function setCheckInFrom(string $checkInFrom){
        $this->check_in_from = $checkInFrom;
    }

    public function getCheckOutTo() : string{
        return $this->check_out_to;
    }

    public function setCheckOutTo(string $checkOutTo){
        $this->check_out_to = $checkOutTo;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetDailyBookingInfo {

    /**
        入住开始
     **/
    public $check_in_from;

    /**
        固定折扣百分比
     **/
    public $investment_number;

    /**
        一个星期内有效性约束
     **/
    public $valid_weeks;

    /**
        入住结束
     **/
    public $check_in_to;

    /**
        失效时间
     **/
    public $invalid_dates;


    public function getCheckInFrom() : string{
        return $this->check_in_from;
    }

    public function setCheckInFrom(string $checkInFrom){
        $this->check_in_from = $checkInFrom;
    }

    public function getInvestmentNumber() : string{
        return $this->investment_number;
    }

    public function setInvestmentNumber(string $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getValidWeeks() : array{
        return $this->valid_weeks;
    }

    public function setValidWeeks(array $validWeeks){
        $this->valid_weeks = $validWeeks;
    }

    public function getCheckInTo() : string{
        return $this->check_in_to;
    }

    public function setCheckInTo(string $checkInTo){
        $this->check_in_to = $checkInTo;
    }

    public function getInvalidDates() : array{
        return $this->invalid_dates;
    }

    public function setInvalidDates(array $invalidDates){
        $this->invalid_dates = $invalidDates;
    }


}


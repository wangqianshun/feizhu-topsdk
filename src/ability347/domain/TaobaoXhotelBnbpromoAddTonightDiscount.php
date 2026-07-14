<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddTonightDiscount {

    /**
        活动折扣
     **/
    public $investment_number;

    /**
        起始时间
     **/
    public $start_time;


    public function getInvestmentNumber() : string{
        return $this->investment_number;
    }

    public function setInvestmentNumber(string $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddNewCustomerInfo {

    /**
        活动折扣
     **/
    public $investment_number;

    /**
        生效星期，星期一星期二生效就填1，2
     **/
    public $valid_weeks;


    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getValidWeeks() : array{
        return $this->valid_weeks;
    }

    public function setValidWeeks(array $validWeeks){
        $this->valid_weeks = $validWeeks;
    }


}


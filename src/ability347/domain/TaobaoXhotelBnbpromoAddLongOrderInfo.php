<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddLongOrderInfo {

    /**
        互动折扣
     **/
    public $investment_number;

    /**
        最小连住天数
     **/
    public $min_continuity_stay;


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


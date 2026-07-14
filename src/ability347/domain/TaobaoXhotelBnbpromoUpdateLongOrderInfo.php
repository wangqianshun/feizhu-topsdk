<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdateLongOrderInfo {

    /**
        最小连住天数
     **/
    public $min_continuity_stay;

    /**
        折扣比例，填30就意味着原价的30%，也就是打3折。数字范围限定在10-95之间
     **/
    public $investment_number;


    public function getMinContinuityStay() : int{
        return $this->min_continuity_stay;
    }

    public function setMinContinuityStay(int $minContinuityStay){
        $this->min_continuity_stay = $minContinuityStay;
    }

    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }


}


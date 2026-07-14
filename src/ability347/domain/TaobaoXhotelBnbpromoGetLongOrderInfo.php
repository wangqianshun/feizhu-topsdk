<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetLongOrderInfo {

    /**
        连住天数可选择范围为（2，3，4，5，7，15，30）
     **/
    public $min_continuity_stay;

    /**
        固定折扣百分比
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


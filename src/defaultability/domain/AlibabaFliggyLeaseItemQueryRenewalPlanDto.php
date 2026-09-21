<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemQueryRenewalPlanDto {

    /**
        续期天数
     **/
    public $renewal_days;

    /**
        续租日租金，单位分
     **/
    public $renewal_daily_rent;

    /**
        是否默认自动续租方案，一个SKU下仅支持一个默认方案
     **/
    public $is_default_renewal_plan;


    public function getRenewalDays() : int{
        return $this->renewal_days;
    }

    public function setRenewalDays(int $renewalDays){
        $this->renewal_days = $renewalDays;
    }

    public function getRenewalDailyRent() : int{
        return $this->renewal_daily_rent;
    }

    public function setRenewalDailyRent(int $renewalDailyRent){
        $this->renewal_daily_rent = $renewalDailyRent;
    }

    public function getIsDefaultRenewalPlan() : bool{
        return $this->is_default_renewal_plan;
    }

    public function setIsDefaultRenewalPlan(bool $isDefaultRenewalPlan){
        $this->is_default_renewal_plan = $isDefaultRenewalPlan;
    }


}


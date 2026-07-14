<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddPromoCode {

    /**
        营销活动code
     **/
    public $activity_code;


    public function getActivityCode() : string{
        return $this->activity_code;
    }

    public function setActivityCode(string $activityCode){
        $this->activity_code = $activityCode;
    }


}


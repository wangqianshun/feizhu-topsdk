<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionResourceUnbindResourceRoom {

    /**
        供应商rate plan
     **/
    public $rate_plan_codes;

    /**
        供应商房型code
     **/
    public $room_code;


    public function getRatePlanCodes() : array{
        return $this->rate_plan_codes;
    }

    public function setRatePlanCodes(array $ratePlanCodes){
        $this->rate_plan_codes = $ratePlanCodes;
    }

    public function getRoomCode() : string{
        return $this->room_code;
    }

    public function setRoomCode(string $roomCode){
        $this->room_code = $roomCode;
    }


}


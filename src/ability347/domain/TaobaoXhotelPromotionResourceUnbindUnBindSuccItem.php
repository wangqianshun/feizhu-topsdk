<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionResourceUnbindUnBindSuccItem {

    /**
        供应商房型code
     **/
    public $room_code;

    /**
        供应商rate plan
     **/
    public $rate_plan_code;


    public function getRoomCode() : string{
        return $this->room_code;
    }

    public function setRoomCode(string $roomCode){
        $this->room_code = $roomCode;
    }

    public function getRatePlanCode() : string{
        return $this->rate_plan_code;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->rate_plan_code = $ratePlanCode;
    }


}


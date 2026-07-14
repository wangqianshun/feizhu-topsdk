<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionResourceUnbindUnBindFailItem {

    /**
        供应商房型code
     **/
    public $room_code;

    /**
        供应商rate plan
     **/
    public $rate_plan_code;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误描述
     **/
    public $error_msg;


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

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


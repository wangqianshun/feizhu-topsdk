<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelIntlRateUpdateCheckDateDo {

    /**
        入住时间
     **/
    public $check_out;

    /**
        离店时间
     **/
    public $check_in;


    public function getCheckOut() : string{
        return $this->check_out;
    }

    public function setCheckOut(string $checkOut){
        $this->check_out = $checkOut;
    }

    public function getCheckIn() : string{
        return $this->check_in;
    }

    public function setCheckIn(string $checkIn){
        $this->check_in = $checkIn;
    }


}


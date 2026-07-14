<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetInvalidDate {

    /**
        活动失效开始时间
     **/
    public $invalid_from;

    /**
        活动失效结束时间
     **/
    public $invalid_to;


    public function getInvalidFrom() : string{
        return $this->invalid_from;
    }

    public function setInvalidFrom(string $invalidFrom){
        $this->invalid_from = $invalidFrom;
    }

    public function getInvalidTo() : string{
        return $this->invalid_to;
    }

    public function setInvalidTo(string $invalidTo){
        $this->invalid_to = $invalidTo;
    }


}


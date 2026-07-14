<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbownerAddResultSet {

    /**
        firstResult
     **/
    public $first_result;


    public function getFirstResult() : TaobaoXhotelBnbownerAddAddOwnerParam{
        return $this->first_result;
    }

    public function setFirstResult(TaobaoXhotelBnbownerAddAddOwnerParam $firstResult){
        $this->first_result = $firstResult;
    }


}


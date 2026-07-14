<?php
namespace FeiZhu\TopSdk\Ability359\Domain;

class TaobaoXhotelOrderSecretphonenumBindSecretPhoneNumberBindParam {

    /**
        酒店订单tid
     **/
    public $tid;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }


}


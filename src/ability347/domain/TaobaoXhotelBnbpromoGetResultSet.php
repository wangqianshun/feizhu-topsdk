<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetResultSet {

    /**
        民宿活动信息
     **/
    public $bnb_promo;

    /**
        错误code
     **/
    public $error_code;

    /**
        错误码
     **/
    public $error_msg;

    /**
        是否成功
     **/
    public $success;


    public function getBnbPromo() : TaobaoXhotelBnbpromoGetBnbPromoDTO{
        return $this->bnb_promo;
    }

    public function setBnbPromo(TaobaoXhotelBnbpromoGetBnbPromoDTO $bnbPromo){
        $this->bnb_promo = $bnbPromo;
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

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbownerDeleteResultSet {

    /**
        系统自动生成
     **/
    public $error_code;

    /**
        是否出错
     **/
    public $error;

    /**
        系统自动生成
     **/
    public $error_msg;


    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getError() : bool{
        return $this->error;
    }

    public function setError(bool $error){
        $this->error = $error;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


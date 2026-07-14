<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelDeleteResultSet {

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;

    /**
        是否出错
     **/
    public $error;


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

    public function getError() : bool{
        return $this->error;
    }

    public function setError(bool $error){
        $this->error = $error;
    }


}


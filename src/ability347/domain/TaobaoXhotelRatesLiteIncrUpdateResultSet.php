<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRatesLiteIncrUpdateResultSet {

    /**
        多个rate的更新结果
     **/
    public $first_result;

    /**
        errorCode
     **/
    public $error_code;

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        success
     **/
    public $success;


    public function getFirstResult() : string{
        return $this->first_result;
    }

    public function setFirstResult(string $firstResult){
        $this->first_result = $firstResult;
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


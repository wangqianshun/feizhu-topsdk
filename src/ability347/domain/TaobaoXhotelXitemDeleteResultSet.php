<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelXitemDeleteResultSet {

    /**
        错误信息
     **/
    public $error_msg;

    /**
        错误码
     **/
    public $error_code;


    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}


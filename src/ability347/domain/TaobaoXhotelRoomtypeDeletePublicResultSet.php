<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRoomtypeDeletePublicResultSet {

    /**
        success
     **/
    public $success;

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        errorCode
     **/
    public $error_code;

    /**
        deleteResult
     **/
    public $delete_result;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

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

    public function getDeleteResult() : string{
        return $this->delete_result;
    }

    public function setDeleteResult(string $deleteResult){
        $this->delete_result = $deleteResult;
    }


}


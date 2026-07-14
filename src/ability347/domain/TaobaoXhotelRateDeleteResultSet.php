<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRateDeleteResultSet {

    /**
        errorCode
     **/
    public $error_code;

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        rateid-房型id-房价id
     **/
    public $rateid_gid_rpid;


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

    public function getRateidGidRpid() : string{
        return $this->rateid_gid_rpid;
    }

    public function setRateidGidRpid(string $rateidGidRpid){
        $this->rateid_gid_rpid = $rateidGidRpid;
    }


}


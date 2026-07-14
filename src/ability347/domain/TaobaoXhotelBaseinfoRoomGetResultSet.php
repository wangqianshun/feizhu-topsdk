<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoRoomGetResultSet {

    /**
        success
     **/
    public $success;

    /**
        errorCode
     **/
    public $error_code;

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        酒店基础信息
     **/
    public $xhotel_base_info;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
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

    public function getXhotelBaseInfo() : TaobaoXhotelBaseinfoRoomGetXHotelInfoWithRoom{
        return $this->xhotel_base_info;
    }

    public function setXhotelBaseInfo(TaobaoXhotelBaseinfoRoomGetXHotelInfoWithRoom $xhotelBaseInfo){
        $this->xhotel_base_info = $xhotelBaseInfo;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelDataSyncBnbResult {

    /**
        状态，成功true，失败false
     **/
    public $success;

    /**
        响应吗
     **/
    public $result_code;

    /**
        响应信息
     **/
    public $result_msg;

    /**
        记录ID
     **/
    public $moudle;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getResultCode() : string{
        return $this->result_code;
    }

    public function setResultCode(string $resultCode){
        $this->result_code = $resultCode;
    }

    public function getResultMsg() : string{
        return $this->result_msg;
    }

    public function setResultMsg(string $resultMsg){
        $this->result_msg = $resultMsg;
    }

    public function getMoudle() : int{
        return $this->moudle;
    }

    public function setMoudle(int $moudle){
        $this->moudle = $moudle;
    }


}


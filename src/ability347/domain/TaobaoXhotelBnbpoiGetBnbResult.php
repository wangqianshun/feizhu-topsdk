<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpoiGetBnbResult {

    /**
        状态，成功true，失败false
     **/
    public $success;

    /**
        响应码
     **/
    public $result_code;

    /**
        响应信息
     **/
    public $result_msg;

    /**
        响应结果
     **/
    public $module;


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

    public function getModule() : array{
        return $this->module;
    }

    public function setModule(array $module){
        $this->module = $module;
    }


}


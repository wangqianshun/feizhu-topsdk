<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbxbotCallbackBnbResult {

    /**
        接口调用成功
     **/
    public $success;

    /**
        回调更新是否成功
     **/
    public $module;

    /**
        响应信息
     **/
    public $result_code;

    /**
        错误信息
     **/
    public $result_msg;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModule() : bool{
        return $this->module;
    }

    public function setModule(bool $module){
        $this->module = $module;
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


}


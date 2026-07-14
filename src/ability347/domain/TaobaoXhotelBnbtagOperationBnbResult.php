<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbtagOperationBnbResult {

    /**
        是否成功
     **/
    public $success;

    /**
        code码
     **/
    public $result_code;

    /**
        错误信息
     **/
    public $result_msg;

    /**
        结果
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

    public function getModule() : TaobaoXhotelBnbtagOperationTopTagResult{
        return $this->module;
    }

    public function setModule(TaobaoXhotelBnbtagOperationTopTagResult $module){
        $this->module = $module;
    }


}


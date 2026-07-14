<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatHotshidResult {

    /**
        错误码
     **/
    public $code;

    /**
        是否成功
     **/
    public $success;

    /**
        返回结构
     **/
    public $module;

    /**
        错误信息
     **/
    public $message;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModule() : TaobaoXhotelItemSelectionSellerStatHotshidModule{
        return $this->module;
    }

    public function setModule(TaobaoXhotelItemSelectionSellerStatHotshidModule $module){
        $this->module = $module;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}


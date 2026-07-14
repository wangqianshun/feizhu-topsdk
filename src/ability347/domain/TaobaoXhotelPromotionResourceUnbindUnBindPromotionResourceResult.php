<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionResourceUnbindUnBindPromotionResourceResult {

    /**
        错误码
     **/
    public $error_code;

    /**
        错误描述
     **/
    public $error_msg;

    /**
        是否成功，True or False，全部失败返回失败，部分/全部成功返回成功
     **/
    public $success;

    /**
        日志id
     **/
    public $trace_id;

    /**
        解绑详情，部分成功的时候有值
     **/
    public $data;


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

    public function getTraceId() : string{
        return $this->trace_id;
    }

    public function setTraceId(string $traceId){
        $this->trace_id = $traceId;
    }

    public function getData() : TaobaoXhotelPromotionResourceUnbindBindData{
        return $this->data;
    }

    public function setData(TaobaoXhotelPromotionResourceUnbindBindData $data){
        $this->data = $data;
    }


}


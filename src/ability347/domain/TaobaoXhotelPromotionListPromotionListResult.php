<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionListPromotionListResult {

    /**
        日志id
     **/
    public $trace_id;

    /**
        活动
     **/
    public $promotion_items;

    /**
        错误描述
     **/
    public $error_msg;

    /**
        是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $error_code;


    public function getTraceId() : string{
        return $this->trace_id;
    }

    public function setTraceId(string $traceId){
        $this->trace_id = $traceId;
    }

    public function getPromotionItems() : array{
        return $this->promotion_items;
    }

    public function setPromotionItems(array $promotionItems){
        $this->promotion_items = $promotionItems;
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

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}


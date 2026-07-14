<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionCreateResultSet {

    /**
        促销活动ID，创建活动会返回，更新不返回
     **/
    public $promotion_rule_id;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;

    /**
        是否成功，true代表成功
     **/
    public $success;

    /**
        日志id
     **/
    public $trace_id;


    public function getPromotionRuleId() : int{
        return $this->promotion_rule_id;
    }

    public function setPromotionRuleId(int $promotionRuleId){
        $this->promotion_rule_id = $promotionRuleId;
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


}


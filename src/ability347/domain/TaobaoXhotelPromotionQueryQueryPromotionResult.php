<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryQueryPromotionResult {

    /**
        日志id
     **/
    public $trace_id;

    /**
        请求传promotion_rule_id，total_count 指酒店code总量；请求传hotel_code，total_count是指promotion_rule_id总量；请求传promotion_rule_id + hotel_code，total_count = 1。
     **/
    public $total_count;

    /**
        直连营销
     **/
    public $direct_promotions;

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

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getDirectPromotions() : array{
        return $this->direct_promotions;
    }

    public function setDirectPromotions(array $directPromotions){
        $this->direct_promotions = $directPromotions;
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


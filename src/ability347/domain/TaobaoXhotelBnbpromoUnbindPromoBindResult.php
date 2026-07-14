<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUnbindPromoBindResult {

    /**
        成功或失败
     **/
    public $success;

    /**
        失败信息
     **/
    public $error_msg;

    /**
        外部rid
     **/
    public $out_rid;

    /**
        外部rp
     **/
    public $rate_plan_code;

    /**
        失败码
     **/
    public $error_code;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getOutRid() : string{
        return $this->out_rid;
    }

    public function setOutRid(string $outRid){
        $this->out_rid = $outRid;
    }

    public function getRatePlanCode() : string{
        return $this->rate_plan_code;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->rate_plan_code = $ratePlanCode;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}


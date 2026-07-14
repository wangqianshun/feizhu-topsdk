<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdateRateInfo {

    /**
        外部价格计划code
     **/
    public $rate_plan_code;

    /**
        外部房型id
     **/
    public $out_rid;


    public function getRatePlanCode() : string{
        return $this->rate_plan_code;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->rate_plan_code = $ratePlanCode;
    }

    public function getOutRid() : string{
        return $this->out_rid;
    }

    public function setOutRid(string $outRid){
        $this->out_rid = $outRid;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelMultiplerateDeleteResultSet {

    /**
        errorCode
     **/
    public $error_code;

    /**
        errorMsg
     **/
    public $error_msg;

    /**
        房型编码_房价编码_入住人数_连住天数
     **/
    public $out_rid_rateplan_code_occupancy_lengthofstay;


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

    public function getOutRidRateplanCodeOccupancyLengthofstay() : string{
        return $this->out_rid_rateplan_code_occupancy_lengthofstay;
    }

    public function setOutRidRateplanCodeOccupancyLengthofstay(string $outRidRateplanCodeOccupancyLengthofstay){
        $this->out_rid_rateplan_code_occupancy_lengthofstay = $outRidRateplanCodeOccupancyLengthofstay;
    }


}


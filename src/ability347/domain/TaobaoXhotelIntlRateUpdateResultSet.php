<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelIntlRateUpdateResultSet {

    /**
        total_results
     **/
    public $total_results;

    /**
        errorCode
     **/
    public $error_code;

    /**
        sub_error_msg
     **/
    public $sub_error_msg;

    /**
        sub_error_code
     **/
    public $sub_error_code;

    /**
        detail_msg_info
     **/
    public $detail_msg_info;

    /**
        总记录条数
     **/
    public $total_count;

    /**
        errorMsg
     **/
    public $error_msg;


    public function getTotalResults() : int{
        return $this->total_results;
    }

    public function setTotalResults(int $totalResults){
        $this->total_results = $totalResults;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getSubErrorMsg() : string{
        return $this->sub_error_msg;
    }

    public function setSubErrorMsg(string $subErrorMsg){
        $this->sub_error_msg = $subErrorMsg;
    }

    public function getSubErrorCode() : string{
        return $this->sub_error_code;
    }

    public function setSubErrorCode(string $subErrorCode){
        $this->sub_error_code = $subErrorCode;
    }

    public function getDetailMsgInfo() : string{
        return $this->detail_msg_info;
    }

    public function setDetailMsgInfo(string $detailMsgInfo){
        $this->detail_msg_info = $detailMsgInfo;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


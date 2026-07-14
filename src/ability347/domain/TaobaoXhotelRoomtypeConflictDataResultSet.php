<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRoomtypeConflictDataResultSet {

    /**
        警告信息
     **/
    public $warn_message;

    /**
        总数
     **/
    public $total_results;

    /**
        errorCode
     **/
    public $error_code;

    /**
        是否还有下一页
     **/
    public $has_next;

    /**
        结果集
     **/
    public $results;

    /**
        errorMsg
     **/
    public $error_msg;


    public function getWarnMessage() : string{
        return $this->warn_message;
    }

    public function setWarnMessage(string $warnMessage){
        $this->warn_message = $warnMessage;
    }

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

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


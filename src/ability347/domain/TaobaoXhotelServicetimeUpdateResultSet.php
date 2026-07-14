<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelServicetimeUpdateResultSet {

    /**
        results
     **/
    public $results;

    /**
        totalResults
     **/
    public $total_results;

    /**
        hasNext
     **/
    public $has_next;

    /**
        exception
     **/
    public $exception;

    /**
        errorCode
     **/
    public $error_code;

    /**
        warnMessage
     **/
    public $warn_message;

    /**
        errorMsg
     **/
    public $error_msg;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getTotalResults() : int{
        return $this->total_results;
    }

    public function setTotalResults(int $totalResults){
        $this->total_results = $totalResults;
    }

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }

    public function getException() : array{
        return $this->exception;
    }

    public function setException(array $exception){
        $this->exception = $exception;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getWarnMessage() : string{
        return $this->warn_message;
    }

    public function setWarnMessage(string $warnMessage){
        $this->warn_message = $warnMessage;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


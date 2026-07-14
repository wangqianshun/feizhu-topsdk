<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbtagOperationTopTagResult {

    /**
        链路ID
     **/
    public $trace_id;

    /**
        成功集合
     **/
    public $success_item_id_set;

    /**
        失败集合
     **/
    public $fail_item_id_set;


    public function getTraceId() : string{
        return $this->trace_id;
    }

    public function setTraceId(string $traceId){
        $this->trace_id = $traceId;
    }

    public function getSuccessItemIdSet() : array{
        return $this->success_item_id_set;
    }

    public function setSuccessItemIdSet(array $successItemIdSet){
        $this->success_item_id_set = $successItemIdSet;
    }

    public function getFailItemIdSet() : array{
        return $this->fail_item_id_set;
    }

    public function setFailItemIdSet(array $failItemIdSet){
        $this->fail_item_id_set = $failItemIdSet;
    }


}


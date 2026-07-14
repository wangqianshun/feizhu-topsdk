<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpriceAppealPriceAppealResult {

    /**
        链路ID
     **/
    public $trace_id;

    /**
        结果集
     **/
    public $item_list;


    public function getTraceId() : string{
        return $this->trace_id;
    }

    public function setTraceId(string $traceId){
        $this->trace_id = $traceId;
    }

    public function getItemList() : array{
        return $this->item_list;
    }

    public function setItemList(array $itemList){
        $this->item_list = $itemList;
    }


}


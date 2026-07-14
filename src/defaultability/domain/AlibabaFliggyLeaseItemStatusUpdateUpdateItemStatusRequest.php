<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemStatusUpdateUpdateItemStatusRequest {

    /**
        操作类型，上架：1，下架：0
     **/
    public $action_type;

    /**
        飞猪商品id列表
     **/
    public $item_ids;


    public function getActionType() : int{
        return $this->action_type;
    }

    public function setActionType(int $actionType){
        $this->action_type = $actionType;
    }

    public function getItemIds() : array{
        return $this->item_ids;
    }

    public function setItemIds(array $itemIds){
        $this->item_ids = $itemIds;
    }


}


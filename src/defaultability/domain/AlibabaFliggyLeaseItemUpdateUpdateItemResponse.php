<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateUpdateItemResponse {

    /**
        飞猪商品ID
     **/
    public $item_id;

    /**
        SKU ID映射列表
     **/
    public $sku_id_list;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuIdList() : array{
        return $this->sku_id_list;
    }

    public function setSkuIdList(array $skuIdList){
        $this->sku_id_list = $skuIdList;
    }


}


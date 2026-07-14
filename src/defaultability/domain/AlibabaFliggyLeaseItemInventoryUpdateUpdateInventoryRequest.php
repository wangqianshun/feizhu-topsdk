<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemInventoryUpdateUpdateInventoryRequest {

    /**
        飞猪商品id
     **/
    public $item_id;

    /**
        SKU库存列表
     **/
    public $sku_inventory_list;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuInventoryList() : array{
        return $this->sku_inventory_list;
    }

    public function setSkuInventoryList(array $skuInventoryList){
        $this->sku_inventory_list = $skuInventoryList;
    }


}


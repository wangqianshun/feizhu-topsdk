<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemInventoryUpdateSkuInventoryDto {

    /**
        飞猪skuId
     **/
    public $sku_id;

    /**
        库存数量
     **/
    public $inventory;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getInventory() : int{
        return $this->inventory;
    }

    public function setInventory(int $inventory){
        $this->inventory = $inventory;
    }


}


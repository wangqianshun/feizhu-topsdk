<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsConsignModifyTopConsignGoodsRequest {

    /**
        子订单id
     **/
    public $sub_tid;

    /**
        商品类型 0：普通品 1:赠品 2:成分品，默认0
     **/
    public $item_type;

    /**
        成分品itemId
     **/
    public $comp_item_id;

    /**
        成分品skuId
     **/
    public $comp_sku_id;


    public function getSubTid() : string{
        return $this->sub_tid;
    }

    public function setSubTid(string $subTid){
        $this->sub_tid = $subTid;
    }

    public function getItemType() : int{
        return $this->item_type;
    }

    public function setItemType(int $itemType){
        $this->item_type = $itemType;
    }

    public function getCompItemId() : string{
        return $this->comp_item_id;
    }

    public function setCompItemId(string $compItemId){
        $this->comp_item_id = $compItemId;
    }

    public function getCompSkuId() : string{
        return $this->comp_sku_id;
    }

    public function setCompSkuId(string $compSkuId){
        $this->comp_sku_id = $compSkuId;
    }


}


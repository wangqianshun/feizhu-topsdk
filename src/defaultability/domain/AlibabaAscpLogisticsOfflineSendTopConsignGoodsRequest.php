<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsOfflineSendTopConsignGoodsRequest {

    /**
        子订单id
     **/
    public $sub_tid;

    /**
        成分品itemId
     **/
    public $comp_item_id;

    /**
        成分品skuId
     **/
    public $comp_sku_id;

    /**
        品类型 0：标品/平台赠品，1：ERP线下赠品、2：成分品，默认为0
     **/
    public $item_type;

    /**
        商品数量，不传默认为子单上的商品数量；支持不传，但不能传0或负值
     **/
    public $num;


    public function getSubTid() : string{
        return $this->sub_tid;
    }

    public function setSubTid(string $subTid){
        $this->sub_tid = $subTid;
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

    public function getItemType() : int{
        return $this->item_type;
    }

    public function setItemType(int $itemType){
        $this->item_type = $itemType;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }


}


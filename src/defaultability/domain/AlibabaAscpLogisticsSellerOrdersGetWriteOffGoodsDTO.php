<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerOrdersGetWriteOffGoodsDTO {

    /**
        商品Id
     **/
    public $item_id;

    /**
        价格
     **/
    public $price;

    /**
        数量
     **/
    public $goods_quantity;

    /**
        名称
     **/
    public $goods_name;

    /**
        商品sku id
     **/
    public $sku_id;

    /**
        商品图片地址
     **/
    public $goods_pic_id;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getGoodsQuantity() : int{
        return $this->goods_quantity;
    }

    public function setGoodsQuantity(int $goodsQuantity){
        $this->goods_quantity = $goodsQuantity;
    }

    public function getGoodsName() : string{
        return $this->goods_name;
    }

    public function setGoodsName(string $goodsName){
        $this->goods_name = $goodsName;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getGoodsPicId() : string{
        return $this->goods_pic_id;
    }

    public function setGoodsPicId(string $goodsPicId){
        $this->goods_pic_id = $goodsPicId;
    }


}


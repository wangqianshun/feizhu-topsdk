<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateUpdateSkuDto {

    /**
        操作类型：新增addSku,修改modifySku 新增sku场景飞猪skuId传0
     **/
    public $action_type;

    /**
        外部厂商skuId（修改的时候需要传）
     **/
    public $out_sku_id;

    /**
        飞猪skuId
     **/
    public $sku_id;

    /**
        SKU名称，最多40个字符
     **/
    public $sku_name;

    /**
        SKU图片
     **/
    public $sku_image;

    /**
        SKU价格，单位分（日租金）
     **/
    public $sku_price;

    /**
        原始商品价值
     **/
    public $origin_price;

    /**
        租期
     **/
    public $lease_term;

    /**
        规格列表，格式[{"key":"","value":""}]
     **/
    public $sku_property;

    /**
        押金，单位分
     **/
    public $deposit;

    /**
        发货方式：邮寄/自提/闪送（暂时只支持邮寄）
     **/
    public $shipping_type;

    /**
        租赁方案：到期归还、到期归还/续租、到期归还/续租/买断（暂时只支持到期归还）
     **/
    public $lease_plan;

    /**
        数量（新增sku的时候需要）
     **/
    public $inventory;


    public function getActionType() : string{
        return $this->action_type;
    }

    public function setActionType(string $actionType){
        $this->action_type = $actionType;
    }

    public function getOutSkuId() : string{
        return $this->out_sku_id;
    }

    public function setOutSkuId(string $outSkuId){
        $this->out_sku_id = $outSkuId;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getSkuImage() : string{
        return $this->sku_image;
    }

    public function setSkuImage(string $skuImage){
        $this->sku_image = $skuImage;
    }

    public function getSkuPrice() : int{
        return $this->sku_price;
    }

    public function setSkuPrice(int $skuPrice){
        $this->sku_price = $skuPrice;
    }

    public function getOriginPrice() : int{
        return $this->origin_price;
    }

    public function setOriginPrice(int $originPrice){
        $this->origin_price = $originPrice;
    }

    public function getLeaseTerm() : int{
        return $this->lease_term;
    }

    public function setLeaseTerm(int $leaseTerm){
        $this->lease_term = $leaseTerm;
    }

    public function getSkuProperty() : string{
        return $this->sku_property;
    }

    public function setSkuProperty(string $skuProperty){
        $this->sku_property = $skuProperty;
    }

    public function getDeposit() : int{
        return $this->deposit;
    }

    public function setDeposit(int $deposit){
        $this->deposit = $deposit;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getLeasePlan() : string{
        return $this->lease_plan;
    }

    public function setLeasePlan(string $leasePlan){
        $this->lease_plan = $leasePlan;
    }

    public function getInventory() : int{
        return $this->inventory;
    }

    public function setInventory(int $inventory){
        $this->inventory = $inventory;
    }


}


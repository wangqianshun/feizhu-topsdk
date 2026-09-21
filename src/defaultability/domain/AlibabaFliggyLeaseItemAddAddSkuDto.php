<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemAddAddSkuDto {

    /**
        外部厂商skuId
     **/
    public $out_sku_id;

    /**
        SKU名称
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
        商品价值，单位分
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
        库存数量
     **/
    public $inventory;

    /**
        发货方式：邮寄/自提/闪送（暂时只支持邮寄）
     **/
    public $shipping_type;

    /**
        租赁方案：到期归还、到期归还/续租、到期归还/续租/买断（暂时只支持到期归还）
     **/
    public $lease_plan;

    /**
        内存/套餐名称，对应IC销售属性165354720-套餐名称（仅长租商品）
     **/
    public $package_name;

    /**
        首月租金优惠（仅长租商品）
     **/
    public $first_month_rent_discount;

    /**
        官网价，单位分（仅长租商品）
     **/
    public $official_price;

    /**
        买断价格，单位分（仅长租商品，必填）
     **/
    public $buy_out_price;

    /**
        续租方案列表（仅长租商品，必填）
     **/
    public $renewal_plan_list;

    /**
        增值服务列表（仅长租商品）
     **/
    public $extra_service_list;


    public function getOutSkuId() : string{
        return $this->out_sku_id;
    }

    public function setOutSkuId(string $outSkuId){
        $this->out_sku_id = $outSkuId;
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

    public function getInventory() : int{
        return $this->inventory;
    }

    public function setInventory(int $inventory){
        $this->inventory = $inventory;
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

    public function getPackageName() : string{
        return $this->package_name;
    }

    public function setPackageName(string $packageName){
        $this->package_name = $packageName;
    }

    public function getFirstMonthRentDiscount() : AlibabaFliggyLeaseItemAddFirstMonthRentDiscountDto{
        return $this->first_month_rent_discount;
    }

    public function setFirstMonthRentDiscount(AlibabaFliggyLeaseItemAddFirstMonthRentDiscountDto $firstMonthRentDiscount){
        $this->first_month_rent_discount = $firstMonthRentDiscount;
    }

    public function getOfficialPrice() : int{
        return $this->official_price;
    }

    public function setOfficialPrice(int $officialPrice){
        $this->official_price = $officialPrice;
    }

    public function getBuyOutPrice() : int{
        return $this->buy_out_price;
    }

    public function setBuyOutPrice(int $buyOutPrice){
        $this->buy_out_price = $buyOutPrice;
    }

    public function getRenewalPlanList() : array{
        return $this->renewal_plan_list;
    }

    public function setRenewalPlanList(array $renewalPlanList){
        $this->renewal_plan_list = $renewalPlanList;
    }

    public function getExtraServiceList() : array{
        return $this->extra_service_list;
    }

    public function setExtraServiceList(array $extraServiceList){
        $this->extra_service_list = $extraServiceList;
    }


}


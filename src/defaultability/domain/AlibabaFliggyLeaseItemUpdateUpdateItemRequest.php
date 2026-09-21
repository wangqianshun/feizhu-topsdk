<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateUpdateItemRequest {

    /**
        飞猪商品id
     **/
    public $item_id;

    /**
        商品名称
     **/
    public $item_name;

    /**
        商品描述
     **/
    public $description;

    /**
        主图URL，建议800x800白底图
     **/
    public $main_image_url;

    /**
        商品图片URL列表，最多4张
     **/
    public $image_urls;

    /**
        商品视频URL
     **/
    public $video_url;

    /**
        商品详情长图
     **/
    public $detail_long_images;

    /**
        品牌
     **/
    public $brand;

    /**
        商品成色
     **/
    public $condition;

    /**
        商品参数，按照顺序进行展示
     **/
    public $item_property;

    /**
        是否支持免押金
     **/
    public $support_deposit_free;

    /**
        是否支持续租
     **/
    public $support_renewal;

    /**
        是否支持买断
     **/
    public $support_buyout;

    /**
        是否支持自动续租（仅长租商品）
     **/
    public $support_auto_renewal;

    /**
        是否计算逾期还款违约金（仅长租商品）
     **/
    public $cal_pay_overdue_penalty;

    /**
        最早起租日，T日下单最早T+N
     **/
    public $earliest_start_date;

    /**
        物流信息
     **/
    public $logistics_info;

    /**
        租期单位，HOUR：小时，DAY：天
     **/
    public $lease_term_unit;

    /**
        SKU更新列表
     **/
    public $sku_list;

    /**
        SKU删除列表，传飞猪skuId
     **/
    public $delete_sku_list;

    /**
        租赁服务设备说明图片列表，最多2张，格式["url1","url2"]
     **/
    public $service_device_images;

    /**
        租用设备损耗&损赔标准图片列表，最多2张，格式["url1","url2"]
     **/
    public $damage_compensation_images;

    /**
        隐私保障服务说明图片列表，最多2张，格式["url1","url2"]
     **/
    public $privacy_service_images;

    /**
        服务保障列表，格式["保障1","保障2"]
     **/
    public $service_guarantees;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getMainImageUrl() : string{
        return $this->main_image_url;
    }

    public function setMainImageUrl(string $mainImageUrl){
        $this->main_image_url = $mainImageUrl;
    }

    public function getImageUrls() : array{
        return $this->image_urls;
    }

    public function setImageUrls(array $imageUrls){
        $this->image_urls = $imageUrls;
    }

    public function getVideoUrl() : string{
        return $this->video_url;
    }

    public function setVideoUrl(string $videoUrl){
        $this->video_url = $videoUrl;
    }

    public function getDetailLongImages() : array{
        return $this->detail_long_images;
    }

    public function setDetailLongImages(array $detailLongImages){
        $this->detail_long_images = $detailLongImages;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getCondition() : string{
        return $this->condition;
    }

    public function setCondition(string $condition){
        $this->condition = $condition;
    }

    public function getItemProperty() : array{
        return $this->item_property;
    }

    public function setItemProperty(array $itemProperty){
        $this->item_property = $itemProperty;
    }

    public function getSupportDepositFree() : bool{
        return $this->support_deposit_free;
    }

    public function setSupportDepositFree(bool $supportDepositFree){
        $this->support_deposit_free = $supportDepositFree;
    }

    public function getSupportRenewal() : bool{
        return $this->support_renewal;
    }

    public function setSupportRenewal(bool $supportRenewal){
        $this->support_renewal = $supportRenewal;
    }

    public function getSupportBuyout() : bool{
        return $this->support_buyout;
    }

    public function setSupportBuyout(bool $supportBuyout){
        $this->support_buyout = $supportBuyout;
    }

    public function getSupportAutoRenewal() : bool{
        return $this->support_auto_renewal;
    }

    public function setSupportAutoRenewal(bool $supportAutoRenewal){
        $this->support_auto_renewal = $supportAutoRenewal;
    }

    public function getCalPayOverduePenalty() : bool{
        return $this->cal_pay_overdue_penalty;
    }

    public function setCalPayOverduePenalty(bool $calPayOverduePenalty){
        $this->cal_pay_overdue_penalty = $calPayOverduePenalty;
    }

    public function getEarliestStartDate() : int{
        return $this->earliest_start_date;
    }

    public function setEarliestStartDate(int $earliestStartDate){
        $this->earliest_start_date = $earliestStartDate;
    }

    public function getLogisticsInfo() : AlibabaFliggyLeaseItemUpdateLogisticsInfoDto{
        return $this->logistics_info;
    }

    public function setLogisticsInfo(AlibabaFliggyLeaseItemUpdateLogisticsInfoDto $logisticsInfo){
        $this->logistics_info = $logisticsInfo;
    }

    public function getLeaseTermUnit() : string{
        return $this->lease_term_unit;
    }

    public function setLeaseTermUnit(string $leaseTermUnit){
        $this->lease_term_unit = $leaseTermUnit;
    }

    public function getSkuList() : array{
        return $this->sku_list;
    }

    public function setSkuList(array $skuList){
        $this->sku_list = $skuList;
    }

    public function getDeleteSkuList() : array{
        return $this->delete_sku_list;
    }

    public function setDeleteSkuList(array $deleteSkuList){
        $this->delete_sku_list = $deleteSkuList;
    }

    public function getServiceDeviceImages() : array{
        return $this->service_device_images;
    }

    public function setServiceDeviceImages(array $serviceDeviceImages){
        $this->service_device_images = $serviceDeviceImages;
    }

    public function getDamageCompensationImages() : array{
        return $this->damage_compensation_images;
    }

    public function setDamageCompensationImages(array $damageCompensationImages){
        $this->damage_compensation_images = $damageCompensationImages;
    }

    public function getPrivacyServiceImages() : array{
        return $this->privacy_service_images;
    }

    public function setPrivacyServiceImages(array $privacyServiceImages){
        $this->privacy_service_images = $privacyServiceImages;
    }

    public function getServiceGuarantees() : array{
        return $this->service_guarantees;
    }

    public function setServiceGuarantees(array $serviceGuarantees){
        $this->service_guarantees = $serviceGuarantees;
    }


}


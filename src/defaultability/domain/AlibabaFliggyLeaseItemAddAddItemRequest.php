<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemAddAddItemRequest {

    /**
        外部商品id
     **/
    public $out_item_id;

    /**
        商品分类,枚举：镜头配件,运动相机,无人机,智能手机,平板电脑,笔记本,台式机/一体机,耳机影音,掌上游戏机,主机游戏,VR/AR设备,随身WiFi,翻译机,智能手表/手环,AI机器人,AI眼镜,帐篷/天幕,露营车/桌椅,野炊烧烤工具,滑雪板/鞋,滑雪服,潜水装备,冲浪/桨板,钓鱼装备,公路/山地自行车,骑行配件,奢品包,名贵腕表,高端眼镜,珠宝配饰,礼服,民族服饰,旅拍服饰,cosplay服饰,美容仪,脱毛仪,投影仪,打印机/扫描仪,会议设备,推车/座椅,吸奶器,辅食料理机,盆底肌修复仪,雾化器,黄疸检测仪,胎心监测仪
     **/
    public $category;

    /**
        商品名称，最长40字符
     **/
    public $item_name;

    /**
        商品描述（暂时不对外展示）
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
        商品详情长图，最多8张
     **/
    public $detail_long_images;

    /**
        品牌，枚举：Apple/苹果,华为,三星,小米,OPPO,vivo,荣耀,一加,红魔,大疆,GoPro,影石,SJCAM,AKASO,佳能,尼康,索尼,富士,松下,徕卡,哈苏,宾得,道通智能,极飞,亿航,昊翔,适马,腾龙,蔡司,老蛙,曼富,联想,惠普,戴尔,华硕,宏碁,外星人,微星,ROG图,捷信,百诺,神牛,肯高,Bose,森海塞尔,漫步者,JBL,铁三角,任天堂,Steam Deck,AYANEO,爱马仕/Hermès,香奈儿/Chanel,路易威登/LV,迪奥/Dior,古驰/Gucci,普拉达/Prada,劳力士,欧米茄,卡地亚,百达翡丽,浪琴,雷朋,Oakley,Gentle Monster,林德伯格,蒂芙尼,宝格丽,施华洛世奇,周大福,Snow Peak,DOD,挪客,牧高笛,迪卡侬,黑鹿,原始人,Burton,Atomic,迪桑特,Phenix,始祖鸟,Nobaday,Billabong,Quiksilver,O'Brien,乐划,Shimano,Daiwa,光威,化氏,佳明,Wahoo,POC,Rapha,极米,坚果,爱普生,明基,海信,罗技,MAXHUB,Jabra,Poly,Bugaboo,Stokke,Babyzen,宝得适,Cybex,好孩子,其他
     **/
    public $brand;

    /**
        商品成色，枚举：全新,准新,99新,95新,90新,85新
     **/
    public $condition;

    /**
        商品属性，按照顺序传进行展示
     **/
    public $item_property;

    /**
        租期模式，长租：LONG_TERM，短租：SHORT_TERM，目前只支持短租
     **/
    public $lease_mode;

    /**
        是否支持免押金：选择是则表示商品支持部分免押或全额免押，选择否则表示商品要全额缴纳押金，不支持后续部分减免押金
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
        最早起租日，T日下单最早T+N
     **/
    public $earliest_start_date;

    /**
        最小租期，sku的租期不能小于此值
     **/
    public $mini_lease_term;

    /**
        租期单位，HOUR：小时，DAY：天
     **/
    public $lease_term_unit;

    /**
        商品使用场景，自定义输入（最长40个字符）
     **/
    public $use_scene;

    /**
        物流信息
     **/
    public $logistics_info;

    /**
        SKU信息列表
     **/
    public $sku_list;

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
        服务保障列表，枚举：晚到必赔，小伤免赔，顺丰包邮，门店自提，极速闪送，品质无忧，异地取还
     **/
    public $service_guarantees;


    public function getOutItemId() : string{
        return $this->out_item_id;
    }

    public function setOutItemId(string $outItemId){
        $this->out_item_id = $outItemId;
    }

    public function getCategory() : string{
        return $this->category;
    }

    public function setCategory(string $category){
        $this->category = $category;
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

    public function getLeaseMode() : string{
        return $this->lease_mode;
    }

    public function setLeaseMode(string $leaseMode){
        $this->lease_mode = $leaseMode;
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

    public function getEarliestStartDate() : int{
        return $this->earliest_start_date;
    }

    public function setEarliestStartDate(int $earliestStartDate){
        $this->earliest_start_date = $earliestStartDate;
    }

    public function getMiniLeaseTerm() : int{
        return $this->mini_lease_term;
    }

    public function setMiniLeaseTerm(int $miniLeaseTerm){
        $this->mini_lease_term = $miniLeaseTerm;
    }

    public function getLeaseTermUnit() : string{
        return $this->lease_term_unit;
    }

    public function setLeaseTermUnit(string $leaseTermUnit){
        $this->lease_term_unit = $leaseTermUnit;
    }

    public function getUseScene() : string{
        return $this->use_scene;
    }

    public function setUseScene(string $useScene){
        $this->use_scene = $useScene;
    }

    public function getLogisticsInfo() : AlibabaFliggyLeaseItemAddLogisticsInfoDto{
        return $this->logistics_info;
    }

    public function setLogisticsInfo(AlibabaFliggyLeaseItemAddLogisticsInfoDto $logisticsInfo){
        $this->logistics_info = $logisticsInfo;
    }

    public function getSkuList() : array{
        return $this->sku_list;
    }

    public function setSkuList(array $skuList){
        $this->sku_list = $skuList;
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


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbhouseAddBnbBookingTimeDto;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbhouseAddBnbLocationDto;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbhouseAddBnbChargeDto;

class TaobaoXhotelBnbhouseAddRequest {

    /**
        外部房东id
     **/
    private $outOwnerId;

    /**
        入住要求&附加信息
     **/
    private $bnbBookingTime;

    /**
        装修等级 1 精装 2普通 3简装
     **/
    private $decorateLevel;

    /**
        联系方式。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
     **/
    private $tel;

    /**
        是否可接待外宾 0不接待 1接待,默认值: 0
     **/
    private $receiveForeigners;

    /**
        门店英文名称
     **/
    private $nameE;

    /**
        装修时间，格式为2015-01-01
     **/
    private $decorateTime;

    /**
        可加床数
     **/
    private $extraBedsNum;

    /**
        门店标签 标签信息，逗号(,)分隔
     **/
    private $tags;

    /**
        是否有前台 0没有 1有
     **/
    private $hasFrontDesk;

    /**
        可接待客人年龄情况：是否接待儿童、老人；成年人必接待，详见“可接待客人”list
     **/
    private $guestAge;

    /**
        结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
     **/
    private $settlementCurrency;

    /**
        门店名称
     **/
    private $name;

    /**
        是否使用实拍图片 0不使用 1使用
     **/
    private $isUseShootImage;

    /**
        房型状态。0:正常，-1:删除，-2:停售
     **/
    private $status;

    /**
        可接待客人性别 0：不限制，1：只限男性，2：只限女性'
     **/
    private $guestGender;

    /**
        详见“允许活动”list 12,32,33,
     **/
    private $activitiesAllowed;

    /**
        开业时间，格式为2015-01-01
     **/
    private $openingTime;

    /**
        门店简介
     **/
    private $description;

    /**
        民宿门店添加
     **/
    private $pictures;

    /**
        有无资质执照 0 无资质 1有资质
     **/
    private $hasLicense;

    /**
        楼层
     **/
    private $floors;

    /**
        视频地址
     **/
    private $videoUrl;

    /**
        对接系统商名称：可为空不要乱填，需要申请后使用
     **/
    private $vendor;

    /**
        门店类型，详见“房源类型list
     **/
    private $productType;

    /**
        加人收费信息
     **/
    private $charge;

    /**
        装修风格，详见装修风格枚举表
     **/
    private $decorateStyle;

    /**
        入住须知
     **/
    private $checkInNotes;

    /**
        真实联系方式
     **/
    private $realTel;

    /**
        位置信息
     **/
    private $location;

    /**
        门店属性 1 个人房源 2 城市公寓 3 乡村民宿等
     **/
    private $attributes;

    /**
        供应商渠道门店ID
     **/
    private $outerId;

    /**
        风景类型，详见风景类型枚举表
     **/
    private $scenicFeature;

    /**
        品牌名称
     **/
    private $brand;

    /**
        酒店设施。json格式示例值：{"24152":true,"24149":true,"24150":true}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=20的分类
     **/
    private $facilities;

    /**
        面积大小
     **/
    private $houseSize;

    /**
        匹配的标准门店
     **/
    private $shid;

    /**
        标准酒店服务,参考文档https://fliggy.open.taobao.com/doc.htm?docId=120362&docType=1
     **/
    private $standardHotelFacilities;

    /**
        传入是或者否，是表明为菲住合作模式，hid打标；“否”表示为正常合作模式，hid去标；不传保持原有的合作模式不变
     **/
    private $isFeizhuHotel;

    /**
        作为菲住门店签约的佣金比率,范围为10-50
     **/
    private $commissionRate;

    /**
        KA渠道
     **/
    private $extend;

    /**
        预定须知
     **/
    private $standardBookingNotice;

    /**
        服务
     **/
    private $standardHotelService;


    public function getOutOwnerId() : string{
        return $this->outOwnerId;
    }

    public function setOutOwnerId(string $outOwnerId){
        $this->outOwnerId = $outOwnerId;
    }

    public function getBnbBookingTime() : TaobaoXhotelBnbhouseAddBnbBookingTimeDto{
        return $this->bnbBookingTime;
    }

    public function setBnbBookingTime(TaobaoXhotelBnbhouseAddBnbBookingTimeDto $bnbBookingTime){
        $this->bnbBookingTime = $bnbBookingTime;
    }

    public function getDecorateLevel() : int{
        return $this->decorateLevel;
    }

    public function setDecorateLevel(int $decorateLevel){
        $this->decorateLevel = $decorateLevel;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getReceiveForeigners() : int{
        return $this->receiveForeigners;
    }

    public function setReceiveForeigners(int $receiveForeigners){
        $this->receiveForeigners = $receiveForeigners;
    }

    public function getNameE() : string{
        return $this->nameE;
    }

    public function setNameE(string $nameE){
        $this->nameE = $nameE;
    }

    public function getDecorateTime() : string{
        return $this->decorateTime;
    }

    public function setDecorateTime(string $decorateTime){
        $this->decorateTime = $decorateTime;
    }

    public function getExtraBedsNum() : int{
        return $this->extraBedsNum;
    }

    public function setExtraBedsNum(int $extraBedsNum){
        $this->extraBedsNum = $extraBedsNum;
    }

    public function getTags() : string{
        return $this->tags;
    }

    public function setTags(string $tags){
        $this->tags = $tags;
    }

    public function getHasFrontDesk() : int{
        return $this->hasFrontDesk;
    }

    public function setHasFrontDesk(int $hasFrontDesk){
        $this->hasFrontDesk = $hasFrontDesk;
    }

    public function getGuestAge() : int{
        return $this->guestAge;
    }

    public function setGuestAge(int $guestAge){
        $this->guestAge = $guestAge;
    }

    public function getSettlementCurrency() : string{
        return $this->settlementCurrency;
    }

    public function setSettlementCurrency(string $settlementCurrency){
        $this->settlementCurrency = $settlementCurrency;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getIsUseShootImage() : int{
        return $this->isUseShootImage;
    }

    public function setIsUseShootImage(int $isUseShootImage){
        $this->isUseShootImage = $isUseShootImage;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getGuestGender() : int{
        return $this->guestGender;
    }

    public function setGuestGender(int $guestGender){
        $this->guestGender = $guestGender;
    }

    public function getActivitiesAllowed() : string{
        return $this->activitiesAllowed;
    }

    public function setActivitiesAllowed(string $activitiesAllowed){
        $this->activitiesAllowed = $activitiesAllowed;
    }

    public function getOpeningTime() : string{
        return $this->openingTime;
    }

    public function setOpeningTime(string $openingTime){
        $this->openingTime = $openingTime;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getPictures() : array{
        return $this->pictures;
    }

    public function setPictures(array $pictures){
        $this->pictures = $pictures;
    }

    public function getHasLicense() : int{
        return $this->hasLicense;
    }

    public function setHasLicense(int $hasLicense){
        $this->hasLicense = $hasLicense;
    }

    public function getFloors() : string{
        return $this->floors;
    }

    public function setFloors(string $floors){
        $this->floors = $floors;
    }

    public function getVideoUrl() : string{
        return $this->videoUrl;
    }

    public function setVideoUrl(string $videoUrl){
        $this->videoUrl = $videoUrl;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getProductType() : int{
        return $this->productType;
    }

    public function setProductType(int $productType){
        $this->productType = $productType;
    }

    public function getCharge() : TaobaoXhotelBnbhouseAddBnbChargeDto{
        return $this->charge;
    }

    public function setCharge(TaobaoXhotelBnbhouseAddBnbChargeDto $charge){
        $this->charge = $charge;
    }

    public function getDecorateStyle() : int{
        return $this->decorateStyle;
    }

    public function setDecorateStyle(int $decorateStyle){
        $this->decorateStyle = $decorateStyle;
    }

    public function getCheckInNotes() : string{
        return $this->checkInNotes;
    }

    public function setCheckInNotes(string $checkInNotes){
        $this->checkInNotes = $checkInNotes;
    }

    public function getRealTel() : string{
        return $this->realTel;
    }

    public function setRealTel(string $realTel){
        $this->realTel = $realTel;
    }

    public function getLocation() : TaobaoXhotelBnbhouseAddBnbLocationDto{
        return $this->location;
    }

    public function setLocation(TaobaoXhotelBnbhouseAddBnbLocationDto $location){
        $this->location = $location;
    }

    public function getAttributes() : int{
        return $this->attributes;
    }

    public function setAttributes(int $attributes){
        $this->attributes = $attributes;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getScenicFeature() : int{
        return $this->scenicFeature;
    }

    public function setScenicFeature(int $scenicFeature){
        $this->scenicFeature = $scenicFeature;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getFacilities() : string{
        return $this->facilities;
    }

    public function setFacilities(string $facilities){
        $this->facilities = $facilities;
    }

    public function getHouseSize() : int{
        return $this->houseSize;
    }

    public function setHouseSize(int $houseSize){
        $this->houseSize = $houseSize;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getStandardHotelFacilities() : string{
        return $this->standardHotelFacilities;
    }

    public function setStandardHotelFacilities(string $standardHotelFacilities){
        $this->standardHotelFacilities = $standardHotelFacilities;
    }

    public function getIsFeizhuHotel() : bool{
        return $this->isFeizhuHotel;
    }

    public function setIsFeizhuHotel(bool $isFeizhuHotel){
        $this->isFeizhuHotel = $isFeizhuHotel;
    }

    public function getCommissionRate() : int{
        return $this->commissionRate;
    }

    public function setCommissionRate(int $commissionRate){
        $this->commissionRate = $commissionRate;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getStandardBookingNotice() : string{
        return $this->standardBookingNotice;
    }

    public function setStandardBookingNotice(string $standardBookingNotice){
        $this->standardBookingNotice = $standardBookingNotice;
    }

    public function getStandardHotelService() : string{
        return $this->standardHotelService;
    }

    public function setStandardHotelService(string $standardHotelService){
        $this->standardHotelService = $standardHotelService;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbhouse.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outOwnerId)) {
            $requestParam["out_owner_id"] = TopUtil::convertBasic($this->outOwnerId);
        }

        if (!TopUtil::checkEmpty($this->bnbBookingTime)) {
            $requestParam["bnb_booking_time"] = TopUtil::convertStruct($this->bnbBookingTime);
        }

        if (!TopUtil::checkEmpty($this->decorateLevel)) {
            $requestParam["decorate_level"] = TopUtil::convertBasic($this->decorateLevel);
        }

        if (!TopUtil::checkEmpty($this->tel)) {
            $requestParam["tel"] = TopUtil::convertBasic($this->tel);
        }

        if (!TopUtil::checkEmpty($this->receiveForeigners)) {
            $requestParam["receive_foreigners"] = TopUtil::convertBasic($this->receiveForeigners);
        }

        if (!TopUtil::checkEmpty($this->nameE)) {
            $requestParam["name_e"] = TopUtil::convertBasic($this->nameE);
        }

        if (!TopUtil::checkEmpty($this->decorateTime)) {
            $requestParam["decorate_time"] = TopUtil::convertBasic($this->decorateTime);
        }

        if (!TopUtil::checkEmpty($this->extraBedsNum)) {
            $requestParam["extra_beds_num"] = TopUtil::convertBasic($this->extraBedsNum);
        }

        if (!TopUtil::checkEmpty($this->tags)) {
            $requestParam["tags"] = TopUtil::convertBasic($this->tags);
        }

        if (!TopUtil::checkEmpty($this->hasFrontDesk)) {
            $requestParam["has_front_desk"] = TopUtil::convertBasic($this->hasFrontDesk);
        }

        if (!TopUtil::checkEmpty($this->guestAge)) {
            $requestParam["guest_age"] = TopUtil::convertBasic($this->guestAge);
        }

        if (!TopUtil::checkEmpty($this->settlementCurrency)) {
            $requestParam["settlement_currency"] = TopUtil::convertBasic($this->settlementCurrency);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->isUseShootImage)) {
            $requestParam["is_use_shoot_image"] = TopUtil::convertBasic($this->isUseShootImage);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->guestGender)) {
            $requestParam["guest_gender"] = TopUtil::convertBasic($this->guestGender);
        }

        if (!TopUtil::checkEmpty($this->activitiesAllowed)) {
            $requestParam["activities_allowed"] = TopUtil::convertBasic($this->activitiesAllowed);
        }

        if (!TopUtil::checkEmpty($this->openingTime)) {
            $requestParam["opening_time"] = TopUtil::convertBasic($this->openingTime);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        if (!TopUtil::checkEmpty($this->pictures)) {
            $requestParam["pictures"] = TopUtil::convertStructList($this->pictures);
        }

        if (!TopUtil::checkEmpty($this->hasLicense)) {
            $requestParam["has_license"] = TopUtil::convertBasic($this->hasLicense);
        }

        if (!TopUtil::checkEmpty($this->floors)) {
            $requestParam["floors"] = TopUtil::convertBasic($this->floors);
        }

        if (!TopUtil::checkEmpty($this->videoUrl)) {
            $requestParam["video_url"] = TopUtil::convertBasic($this->videoUrl);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->productType)) {
            $requestParam["product_type"] = TopUtil::convertBasic($this->productType);
        }

        if (!TopUtil::checkEmpty($this->charge)) {
            $requestParam["charge"] = TopUtil::convertStruct($this->charge);
        }

        if (!TopUtil::checkEmpty($this->decorateStyle)) {
            $requestParam["decorate_style"] = TopUtil::convertBasic($this->decorateStyle);
        }

        if (!TopUtil::checkEmpty($this->checkInNotes)) {
            $requestParam["check_in_notes"] = TopUtil::convertBasic($this->checkInNotes);
        }

        if (!TopUtil::checkEmpty($this->realTel)) {
            $requestParam["real_tel"] = TopUtil::convertBasic($this->realTel);
        }

        if (!TopUtil::checkEmpty($this->location)) {
            $requestParam["location"] = TopUtil::convertStruct($this->location);
        }

        if (!TopUtil::checkEmpty($this->attributes)) {
            $requestParam["attributes"] = TopUtil::convertBasic($this->attributes);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->scenicFeature)) {
            $requestParam["scenic_feature"] = TopUtil::convertBasic($this->scenicFeature);
        }

        if (!TopUtil::checkEmpty($this->brand)) {
            $requestParam["brand"] = TopUtil::convertBasic($this->brand);
        }

        if (!TopUtil::checkEmpty($this->facilities)) {
            $requestParam["facilities"] = TopUtil::convertBasic($this->facilities);
        }

        if (!TopUtil::checkEmpty($this->houseSize)) {
            $requestParam["house_size"] = TopUtil::convertBasic($this->houseSize);
        }

        if (!TopUtil::checkEmpty($this->shid)) {
            $requestParam["shid"] = TopUtil::convertBasic($this->shid);
        }

        if (!TopUtil::checkEmpty($this->standardHotelFacilities)) {
            $requestParam["standard_hotel_facilities"] = TopUtil::convertBasic($this->standardHotelFacilities);
        }

        if (!TopUtil::checkEmpty($this->isFeizhuHotel)) {
            $requestParam["is_feizhu_hotel"] = TopUtil::convertBasic($this->isFeizhuHotel);
        }

        if (!TopUtil::checkEmpty($this->commissionRate)) {
            $requestParam["commission_rate"] = TopUtil::convertBasic($this->commissionRate);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->standardBookingNotice)) {
            $requestParam["standard_booking_notice"] = TopUtil::convertBasic($this->standardBookingNotice);
        }

        if (!TopUtil::checkEmpty($this->standardHotelService)) {
            $requestParam["standard_hotel_service"] = TopUtil::convertBasic($this->standardHotelService);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


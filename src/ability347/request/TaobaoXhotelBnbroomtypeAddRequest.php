<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbroomtypeAddBnbBookingTimeDto;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbroomtypeAddBnbChargeDto;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbroomtypeAddBnbLocationDto;

class TaobaoXhotelBnbroomtypeAddRequest {

    /**
        单间面积，单位平方米
     **/
    private $rentSize;

    /**
        是否支持IM聊天 0不支持 1支持
     **/
    private $supportIm;

    /**
        房源外部标签 标签信息，逗号(,)分隔，最多1000字符
     **/
    private $outerTags;

    /**
        清洁费是否收取 0：否 1：是
     **/
    private $cleaningCharge;

    /**
        发票，0：卖家提供发票，1：房东提供发票
     **/
    private $invoice;

    /**
        装修等级 1 精装；2普通；3简装
     **/
    private $decorateLevel;

    /**
        民宿入住要求&附加信息
     **/
    private $bnbBookingTime;

    /**
        外部门店id
     **/
    private $outHid;

    /**
        酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
     **/
    private $tel;

    /**
        是否可接待外宾 0：否 1：是；默认值: 0
     **/
    private $receiveForeigners;

    /**
        位置描述
     **/
    private $localInfo;

    /**
        品牌名称，最多100字符
     **/
    private $brand;

    /**
        房源图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。
     **/
    private $pics;

    /**
        清洁费类型 0.线下；1.线上
     **/
    private $cleaningType;

    /**
        押金金额
     **/
    private $depositAmount;

    /**
        房源英文名
     **/
    private $nameE;

    /**
        装修时间，格式为2015-01-01装修时间
     **/
    private $decorateTime;

    /**
        0-n；若不可加床，值为0
     **/
    private $extraBedsNum;

    /**
        可提供发票类型，1.专票 2.纸质普票 3.电子普票
     **/
    private $invoiceType;

    /**
        是否有前台 0没有 1有
     **/
    private $hasFrontDesk;

    /**
        是否接待儿童、老人；成年人必接待，详见“可接待客人”https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
     **/
    private $guestAge;

    /**
        结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
     **/
    private $settlementCurrency;

    /**
        房源名
     **/
    private $name;

    /**
        周边描述
     **/
    private $surroundInfo;

    /**
        最大入住人数 1-99
     **/
    private $maxOccupancy;

    /**
        是否使用实拍图片 0不使用 1使用
     **/
    private $isUseShootImage;

    /**
        状态 0：在线 -1：不在线 -2:停售
     **/
    private $status;

    /**
        0：不限制，1：只限男性，2：只限女性'
     **/
    private $guestGender;

    /**
        详见“允许活动”：https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1  ，最多500字符
     **/
    private $activitiesAllowed;

    /**
        清洁费金额；整数[1，9999999]
     **/
    private $extraCleaningCharge;

    /**
        开业时间，格式为2015-01-01
     **/
    private $openingTime;

    /**
        出租类型，1整租；2分租。3床位 默认整租，该字段不能更新
     **/
    private $rentType;

    /**
        如果要变更商品房源编码请使用该字段。
     **/
    private $newOuterId;

    /**
        房屋户型， bedroom: 室, bathroom: 卫, livingroom: 厅, study: 书房, balcony: 阳台,kitchen: 厨房,bedroom和livingroom不能为空
     **/
    private $houseModel;

    /**
        0-无窗  1-有窗  2-部分有窗 3-暗窗 4-部分暗窗  5-落地窗
     **/
    private $windowType;

    /**
        有无资质执照 0 没有 1有
     **/
    private $hasLicense;

    /**
        视频地址，最多1000字符
     **/
    private $videoUrl;

    /**
        销售渠道,默认taobao
     **/
    private $vendor;

    /**
        亮点描述，最多1000字符
     **/
    private $brightspot;

    /**
        是否开启闪订 0不开启 1开启
     **/
    private $quickOrder;

    /**
        客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
     **/
    private $floor;

    /**
        单间面积，单位平方米
     **/
    private $houseSize;

    /**
        房源类型,见https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
     **/
    private $productType;

    /**
        房源介绍,最多2000字符
     **/
    private $introduction;

    /**
        是否与房东同住 0 不同住 1同住
     **/
    private $hasLandlord;

    /**
        加人收费信息
     **/
    private $charge;

    /**
        装修风格https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
     **/
    private $decorateStyle;

    /**
        是否信用免押金0：否 1：是
     **/
    private $supportcredit;

    /**
        入住须知，最多2000字符
     **/
    private $checkInNotes;

    /**
        真实联系方式
     **/
    private $realTel;

    /**
        设施服务。json格式示例值：{"24152":true,"24149":true,"24150":true}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=40的分类
     **/
    private $service;

    /**
        “打扫类型1(1客1扫/换),2(1天1扫/换),https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
     **/
    private $cleaningFrequency;

    /**
        房源id, 这是卖家自己系统中的ID
     **/
    private $outerId;

    /**
        民宿房源位置信息
     **/
    private $location;

    /**
        风景类型(枚举)https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
     **/
    private $scenicFeature;

    /**
        押金类型0.线下；1.线上
     **/
    private $depositType;

    /**
        床信息: bedType:床型, desc: 床型名, width:床宽, length：床长, bedNum: 床数。床型取值见链接https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.4zBOVn&docType=1&articleId=108347
     **/
    private $bedInfo;

    /**
        额外收费
     **/
    private $extraFee;

    /**
        加床费,分为单位
     **/
    private $extraBedsFee;

    /**
        民宿名称，默认取bnbName
     **/
    private $bnbName;

    /**
        添加标准房源匹配
     **/
    private $srid;

    /**
        标准酒店服务,参考文档https://fliggy.open.taobao.com/doc.htm?docId=120362&docType=1
     **/
    private $standardRoomFacilities;

    /**
        民宿扩展信息
     **/
    private $bnbExtend;


    public function getRentSize() : int{
        return $this->rentSize;
    }

    public function setRentSize(int $rentSize){
        $this->rentSize = $rentSize;
    }

    public function getSupportIm() : int{
        return $this->supportIm;
    }

    public function setSupportIm(int $supportIm){
        $this->supportIm = $supportIm;
    }

    public function getOuterTags() : string{
        return $this->outerTags;
    }

    public function setOuterTags(string $outerTags){
        $this->outerTags = $outerTags;
    }

    public function getCleaningCharge() : int{
        return $this->cleaningCharge;
    }

    public function setCleaningCharge(int $cleaningCharge){
        $this->cleaningCharge = $cleaningCharge;
    }

    public function getInvoice() : int{
        return $this->invoice;
    }

    public function setInvoice(int $invoice){
        $this->invoice = $invoice;
    }

    public function getDecorateLevel() : int{
        return $this->decorateLevel;
    }

    public function setDecorateLevel(int $decorateLevel){
        $this->decorateLevel = $decorateLevel;
    }

    public function getBnbBookingTime() : TaobaoXhotelBnbroomtypeAddBnbBookingTimeDto{
        return $this->bnbBookingTime;
    }

    public function setBnbBookingTime(TaobaoXhotelBnbroomtypeAddBnbBookingTimeDto $bnbBookingTime){
        $this->bnbBookingTime = $bnbBookingTime;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
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

    public function getLocalInfo() : string{
        return $this->localInfo;
    }

    public function setLocalInfo(string $localInfo){
        $this->localInfo = $localInfo;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getPics() : array{
        return $this->pics;
    }

    public function setPics(array $pics){
        $this->pics = $pics;
    }

    public function getCleaningType() : int{
        return $this->cleaningType;
    }

    public function setCleaningType(int $cleaningType){
        $this->cleaningType = $cleaningType;
    }

    public function getDepositAmount() : int{
        return $this->depositAmount;
    }

    public function setDepositAmount(int $depositAmount){
        $this->depositAmount = $depositAmount;
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

    public function getInvoiceType() : int{
        return $this->invoiceType;
    }

    public function setInvoiceType(int $invoiceType){
        $this->invoiceType = $invoiceType;
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

    public function getSurroundInfo() : string{
        return $this->surroundInfo;
    }

    public function setSurroundInfo(string $surroundInfo){
        $this->surroundInfo = $surroundInfo;
    }

    public function getMaxOccupancy() : int{
        return $this->maxOccupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->maxOccupancy = $maxOccupancy;
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

    public function getExtraCleaningCharge() : int{
        return $this->extraCleaningCharge;
    }

    public function setExtraCleaningCharge(int $extraCleaningCharge){
        $this->extraCleaningCharge = $extraCleaningCharge;
    }

    public function getOpeningTime() : string{
        return $this->openingTime;
    }

    public function setOpeningTime(string $openingTime){
        $this->openingTime = $openingTime;
    }

    public function getRentType() : int{
        return $this->rentType;
    }

    public function setRentType(int $rentType){
        $this->rentType = $rentType;
    }

    public function getNewOuterId() : string{
        return $this->newOuterId;
    }

    public function setNewOuterId(string $newOuterId){
        $this->newOuterId = $newOuterId;
    }

    public function getHouseModel() : string{
        return $this->houseModel;
    }

    public function setHouseModel(string $houseModel){
        $this->houseModel = $houseModel;
    }

    public function getWindowType() : int{
        return $this->windowType;
    }

    public function setWindowType(int $windowType){
        $this->windowType = $windowType;
    }

    public function getHasLicense() : int{
        return $this->hasLicense;
    }

    public function setHasLicense(int $hasLicense){
        $this->hasLicense = $hasLicense;
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

    public function getBrightspot() : string{
        return $this->brightspot;
    }

    public function setBrightspot(string $brightspot){
        $this->brightspot = $brightspot;
    }

    public function getQuickOrder() : int{
        return $this->quickOrder;
    }

    public function setQuickOrder(int $quickOrder){
        $this->quickOrder = $quickOrder;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }

    public function getHouseSize() : int{
        return $this->houseSize;
    }

    public function setHouseSize(int $houseSize){
        $this->houseSize = $houseSize;
    }

    public function getProductType() : int{
        return $this->productType;
    }

    public function setProductType(int $productType){
        $this->productType = $productType;
    }

    public function getIntroduction() : string{
        return $this->introduction;
    }

    public function setIntroduction(string $introduction){
        $this->introduction = $introduction;
    }

    public function getHasLandlord() : int{
        return $this->hasLandlord;
    }

    public function setHasLandlord(int $hasLandlord){
        $this->hasLandlord = $hasLandlord;
    }

    public function getCharge() : TaobaoXhotelBnbroomtypeAddBnbChargeDto{
        return $this->charge;
    }

    public function setCharge(TaobaoXhotelBnbroomtypeAddBnbChargeDto $charge){
        $this->charge = $charge;
    }

    public function getDecorateStyle() : int{
        return $this->decorateStyle;
    }

    public function setDecorateStyle(int $decorateStyle){
        $this->decorateStyle = $decorateStyle;
    }

    public function getSupportcredit() : int{
        return $this->supportcredit;
    }

    public function setSupportcredit(int $supportcredit){
        $this->supportcredit = $supportcredit;
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

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getCleaningFrequency() : int{
        return $this->cleaningFrequency;
    }

    public function setCleaningFrequency(int $cleaningFrequency){
        $this->cleaningFrequency = $cleaningFrequency;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getLocation() : TaobaoXhotelBnbroomtypeAddBnbLocationDto{
        return $this->location;
    }

    public function setLocation(TaobaoXhotelBnbroomtypeAddBnbLocationDto $location){
        $this->location = $location;
    }

    public function getScenicFeature() : int{
        return $this->scenicFeature;
    }

    public function setScenicFeature(int $scenicFeature){
        $this->scenicFeature = $scenicFeature;
    }

    public function getDepositType() : int{
        return $this->depositType;
    }

    public function setDepositType(int $depositType){
        $this->depositType = $depositType;
    }

    public function getBedInfo() : string{
        return $this->bedInfo;
    }

    public function setBedInfo(string $bedInfo){
        $this->bedInfo = $bedInfo;
    }

    public function getExtraFee() : string{
        return $this->extraFee;
    }

    public function setExtraFee(string $extraFee){
        $this->extraFee = $extraFee;
    }

    public function getExtraBedsFee() : int{
        return $this->extraBedsFee;
    }

    public function setExtraBedsFee(int $extraBedsFee){
        $this->extraBedsFee = $extraBedsFee;
    }

    public function getBnbName() : string{
        return $this->bnbName;
    }

    public function setBnbName(string $bnbName){
        $this->bnbName = $bnbName;
    }

    public function getSrid() : int{
        return $this->srid;
    }

    public function setSrid(int $srid){
        $this->srid = $srid;
    }

    public function getStandardRoomFacilities() : string{
        return $this->standardRoomFacilities;
    }

    public function setStandardRoomFacilities(string $standardRoomFacilities){
        $this->standardRoomFacilities = $standardRoomFacilities;
    }

    public function getBnbExtend() : string{
        return $this->bnbExtend;
    }

    public function setBnbExtend(string $bnbExtend){
        $this->bnbExtend = $bnbExtend;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbroomtype.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rentSize)) {
            $requestParam["rent_size"] = TopUtil::convertBasic($this->rentSize);
        }

        if (!TopUtil::checkEmpty($this->supportIm)) {
            $requestParam["support_im"] = TopUtil::convertBasic($this->supportIm);
        }

        if (!TopUtil::checkEmpty($this->outerTags)) {
            $requestParam["outer_tags"] = TopUtil::convertBasic($this->outerTags);
        }

        if (!TopUtil::checkEmpty($this->cleaningCharge)) {
            $requestParam["cleaning_charge"] = TopUtil::convertBasic($this->cleaningCharge);
        }

        if (!TopUtil::checkEmpty($this->invoice)) {
            $requestParam["invoice"] = TopUtil::convertBasic($this->invoice);
        }

        if (!TopUtil::checkEmpty($this->decorateLevel)) {
            $requestParam["decorate_level"] = TopUtil::convertBasic($this->decorateLevel);
        }

        if (!TopUtil::checkEmpty($this->bnbBookingTime)) {
            $requestParam["bnb_booking_time"] = TopUtil::convertStruct($this->bnbBookingTime);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->tel)) {
            $requestParam["tel"] = TopUtil::convertBasic($this->tel);
        }

        if (!TopUtil::checkEmpty($this->receiveForeigners)) {
            $requestParam["receive_foreigners"] = TopUtil::convertBasic($this->receiveForeigners);
        }

        if (!TopUtil::checkEmpty($this->localInfo)) {
            $requestParam["local_info"] = TopUtil::convertBasic($this->localInfo);
        }

        if (!TopUtil::checkEmpty($this->brand)) {
            $requestParam["brand"] = TopUtil::convertBasic($this->brand);
        }

        if (!TopUtil::checkEmpty($this->pics)) {
            $requestParam["pics"] = TopUtil::convertStructList($this->pics);
        }

        if (!TopUtil::checkEmpty($this->cleaningType)) {
            $requestParam["cleaning_type"] = TopUtil::convertBasic($this->cleaningType);
        }

        if (!TopUtil::checkEmpty($this->depositAmount)) {
            $requestParam["deposit_amount"] = TopUtil::convertBasic($this->depositAmount);
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

        if (!TopUtil::checkEmpty($this->invoiceType)) {
            $requestParam["invoice_type"] = TopUtil::convertBasic($this->invoiceType);
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

        if (!TopUtil::checkEmpty($this->surroundInfo)) {
            $requestParam["surround_info"] = TopUtil::convertBasic($this->surroundInfo);
        }

        if (!TopUtil::checkEmpty($this->maxOccupancy)) {
            $requestParam["max_occupancy"] = TopUtil::convertBasic($this->maxOccupancy);
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

        if (!TopUtil::checkEmpty($this->extraCleaningCharge)) {
            $requestParam["extra_cleaning_charge"] = TopUtil::convertBasic($this->extraCleaningCharge);
        }

        if (!TopUtil::checkEmpty($this->openingTime)) {
            $requestParam["opening_time"] = TopUtil::convertBasic($this->openingTime);
        }

        if (!TopUtil::checkEmpty($this->rentType)) {
            $requestParam["rent_type"] = TopUtil::convertBasic($this->rentType);
        }

        if (!TopUtil::checkEmpty($this->newOuterId)) {
            $requestParam["new_outer_id"] = TopUtil::convertBasic($this->newOuterId);
        }

        if (!TopUtil::checkEmpty($this->houseModel)) {
            $requestParam["house_model"] = TopUtil::convertBasic($this->houseModel);
        }

        if (!TopUtil::checkEmpty($this->windowType)) {
            $requestParam["window_type"] = TopUtil::convertBasic($this->windowType);
        }

        if (!TopUtil::checkEmpty($this->hasLicense)) {
            $requestParam["has_license"] = TopUtil::convertBasic($this->hasLicense);
        }

        if (!TopUtil::checkEmpty($this->videoUrl)) {
            $requestParam["video_url"] = TopUtil::convertBasic($this->videoUrl);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->brightspot)) {
            $requestParam["brightspot"] = TopUtil::convertBasic($this->brightspot);
        }

        if (!TopUtil::checkEmpty($this->quickOrder)) {
            $requestParam["quick_order"] = TopUtil::convertBasic($this->quickOrder);
        }

        if (!TopUtil::checkEmpty($this->floor)) {
            $requestParam["floor"] = TopUtil::convertBasic($this->floor);
        }

        if (!TopUtil::checkEmpty($this->houseSize)) {
            $requestParam["house_size"] = TopUtil::convertBasic($this->houseSize);
        }

        if (!TopUtil::checkEmpty($this->productType)) {
            $requestParam["product_type"] = TopUtil::convertBasic($this->productType);
        }

        if (!TopUtil::checkEmpty($this->introduction)) {
            $requestParam["introduction"] = TopUtil::convertBasic($this->introduction);
        }

        if (!TopUtil::checkEmpty($this->hasLandlord)) {
            $requestParam["has_landlord"] = TopUtil::convertBasic($this->hasLandlord);
        }

        if (!TopUtil::checkEmpty($this->charge)) {
            $requestParam["charge"] = TopUtil::convertStruct($this->charge);
        }

        if (!TopUtil::checkEmpty($this->decorateStyle)) {
            $requestParam["decorate_style"] = TopUtil::convertBasic($this->decorateStyle);
        }

        if (!TopUtil::checkEmpty($this->supportcredit)) {
            $requestParam["supportcredit"] = TopUtil::convertBasic($this->supportcredit);
        }

        if (!TopUtil::checkEmpty($this->checkInNotes)) {
            $requestParam["check_in_notes"] = TopUtil::convertBasic($this->checkInNotes);
        }

        if (!TopUtil::checkEmpty($this->realTel)) {
            $requestParam["real_tel"] = TopUtil::convertBasic($this->realTel);
        }

        if (!TopUtil::checkEmpty($this->service)) {
            $requestParam["service"] = TopUtil::convertBasic($this->service);
        }

        if (!TopUtil::checkEmpty($this->cleaningFrequency)) {
            $requestParam["cleaning_frequency"] = TopUtil::convertBasic($this->cleaningFrequency);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->location)) {
            $requestParam["location"] = TopUtil::convertStruct($this->location);
        }

        if (!TopUtil::checkEmpty($this->scenicFeature)) {
            $requestParam["scenic_feature"] = TopUtil::convertBasic($this->scenicFeature);
        }

        if (!TopUtil::checkEmpty($this->depositType)) {
            $requestParam["deposit_type"] = TopUtil::convertBasic($this->depositType);
        }

        if (!TopUtil::checkEmpty($this->bedInfo)) {
            $requestParam["bed_info"] = TopUtil::convertBasic($this->bedInfo);
        }

        if (!TopUtil::checkEmpty($this->extraFee)) {
            $requestParam["extra_fee"] = TopUtil::convertBasic($this->extraFee);
        }

        if (!TopUtil::checkEmpty($this->extraBedsFee)) {
            $requestParam["extra_beds_fee"] = TopUtil::convertBasic($this->extraBedsFee);
        }

        if (!TopUtil::checkEmpty($this->bnbName)) {
            $requestParam["bnb_name"] = TopUtil::convertBasic($this->bnbName);
        }

        if (!TopUtil::checkEmpty($this->srid)) {
            $requestParam["srid"] = TopUtil::convertBasic($this->srid);
        }

        if (!TopUtil::checkEmpty($this->standardRoomFacilities)) {
            $requestParam["standard_room_facilities"] = TopUtil::convertBasic($this->standardRoomFacilities);
        }

        if (!TopUtil::checkEmpty($this->bnbExtend)) {
            $requestParam["bnb_extend"] = TopUtil::convertBasic($this->bnbExtend);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


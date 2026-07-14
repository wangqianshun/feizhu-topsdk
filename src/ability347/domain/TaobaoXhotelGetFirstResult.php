<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelGetFirstResult {

    /**
        酒店ID
     **/
    public $hid;

    /**
        酒店状态：0: 正常;-2:停售；-1：删除
     **/
    public $status;

    /**
        淘宝标准酒店信息
     **/
    public $s_hotel;

    /**
        未通过时的拒绝原因等。
     **/
    public $error_info;

    /**
        卖家自己系统的id
     **/
    public $outer_id;

    /**
        酒店名称
     **/
    public $name;

    /**
        0:国内;1:国外
     **/
    public $domestic;

    /**
        国家编码
     **/
    public $country;

    /**
        曾用名
     **/
    public $used_name;

    /**
        省份编码
     **/
    public $province;

    /**
        城市编码
     **/
    public $city;

    /**
        地区编码
     **/
    public $district;

    /**
        商圈信息
     **/
    public $business;

    /**
        酒店地址
     **/
    public $address;

    /**
        经度
     **/
    public $longitude;

    /**
        纬度
     **/
    public $latitude;

    /**
        坐标类型
     **/
    public $position_type;

    /**
        酒店电话
     **/
    public $tel;

    /**
        扩展信息
     **/
    public $extend;

    /**
        此字段已废弃
     **/
    public $match_status;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        匹配结果
     **/
    public $data_confirm_str;

    /**
        逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
     **/
    public $credit_card_types;

    /**
        卖家酒店英文名称
     **/
    public $name_e;

    /**
        vendor
     **/
    public $vendor;

    /**
        酒店维度特殊标签含义, json: {"pure-direct-hotel":0,"direct-manual-order-hotel":1,"ebk-direct-hotel":0,"non-direct-hotel":1,"allow-dingding-business-travel-hotel":1,"willing-dingding-bussiness-travel-hotel":0,"calendar-room-package-hotel":1,"dijiajiajia-hotel":0,"ebk-number-of-confirm-room-hotel":1} , key含义: pure-direct-hotel 表示纯直连酒店, direct-manual-order-hotel 和 ebk-direct-hotel 和 non-direct-hotel 这三个key对应value都是0 . direct-manual-order-hotel 表示 人工承接失败订单的酒店标签。如果某个直连酒店打了该标签，那么直连下单失败以后，允许人工承接订单，由人工跟进 . ebk-direct-hotel 表示 ebk直连酒店标。如果某个酒店打了该标签，那么这个酒店下允许通过ebk发布直连rp . non-direct-hotel 表示 卖家非直连酒店标签。如果某个酒店打了该标签，那么该酒店下单不会走直连交易。 allow-dingding-business-travel-hotel 表示 允许进入阿里商旅渠道（钉钉）售卖信用住的单体酒店 willing-dingding-bussiness-travel-hotel 表示 已签协议愿意加入阿里商旅渠道售卖信用住的单体酒店 . calendar-room-package-hotel 表示 酒店可以参加日历房套餐活动包括创建，修改，删除活动信息（高星集团GMV项目） dijiajiajia-hotel 表示 底价加价酒店权限标。只有打了该标的酒店才允许维护底价加价规则和包房rp . ebk-number-of-confirm-room-hotel 表示ebk确认订单，是否要输入外部确认号 . nonstandard-project-hotel 表示该酒店是否参加非标项目
     **/
    public $tag_json;

    /**
        标识该酒店所走的 结算流程，如果是null 默认是 国内结算流程，否则是其他的，比如：海外信用住结算流程
     **/
    public $billing_process_type;

    /**
        货币类型（编码,字母编码）,hid 维度支持的币种信息,目前只能 add 时添加，不支持 update时更新,,如果DB中是null ，则默认是人民币 CNY
     **/
    public $currency_code_name;

    /**
        酒店对应的旺旺号
     **/
    public $ali_nick;

    /**
        资源方房型设施
     **/
    public $standard_room_facilities;

    /**
        资源方酒店服务
     **/
    public $standard_hotel_service;

    /**
        资源方酒店设施
     **/
    public $standard_hotel_facilities;

    /**
        资源方预订须知
     **/
    public $standard_booking_notice;

    /**
        资源方娱乐设施
     **/
    public $standard_amuse_facilities;

    /**
        离线数据,该酒店在售1,不在售0,未知-1
     **/
    public $on_sale;

    /**
        离线数据,该酒店热搜1,非热搜0,未知-1
     **/
    public $hot_search;

    /**
        离线数据,该酒店热卖1,非热卖0,未知-1
     **/
    public $hot_sale;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getSHotel() : TaobaoXhotelGetShotel{
        return $this->s_hotel;
    }

    public function setSHotel(TaobaoXhotelGetShotel $sHotel){
        $this->s_hotel = $sHotel;
    }

    public function getErrorInfo() : string{
        return $this->error_info;
    }

    public function setErrorInfo(string $errorInfo){
        $this->error_info = $errorInfo;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getDomestic() : int{
        return $this->domestic;
    }

    public function setDomestic(int $domestic){
        $this->domestic = $domestic;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getUsedName() : string{
        return $this->used_name;
    }

    public function setUsedName(string $usedName){
        $this->used_name = $usedName;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getDistrict() : int{
        return $this->district;
    }

    public function setDistrict(int $district){
        $this->district = $district;
    }

    public function getBusiness() : string{
        return $this->business;
    }

    public function setBusiness(string $business){
        $this->business = $business;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getPositionType() : string{
        return $this->position_type;
    }

    public function setPositionType(string $positionType){
        $this->position_type = $positionType;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getMatchStatus() : int{
        return $this->match_status;
    }

    public function setMatchStatus(int $matchStatus){
        $this->match_status = $matchStatus;
    }

    public function getCreatedTime() : string{
        return $this->created_time;
    }

    public function setCreatedTime(string $createdTime){
        $this->created_time = $createdTime;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getDataConfirmStr() : string{
        return $this->data_confirm_str;
    }

    public function setDataConfirmStr(string $dataConfirmStr){
        $this->data_confirm_str = $dataConfirmStr;
    }

    public function getCreditCardTypes() : string{
        return $this->credit_card_types;
    }

    public function setCreditCardTypes(string $creditCardTypes){
        $this->credit_card_types = $creditCardTypes;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getTagJson() : string{
        return $this->tag_json;
    }

    public function setTagJson(string $tagJson){
        $this->tag_json = $tagJson;
    }

    public function getBillingProcessType() : int{
        return $this->billing_process_type;
    }

    public function setBillingProcessType(int $billingProcessType){
        $this->billing_process_type = $billingProcessType;
    }

    public function getCurrencyCodeName() : string{
        return $this->currency_code_name;
    }

    public function setCurrencyCodeName(string $currencyCodeName){
        $this->currency_code_name = $currencyCodeName;
    }

    public function getAliNick() : string{
        return $this->ali_nick;
    }

    public function setAliNick(string $aliNick){
        $this->ali_nick = $aliNick;
    }

    public function getStandardRoomFacilities() : string{
        return $this->standard_room_facilities;
    }

    public function setStandardRoomFacilities(string $standardRoomFacilities){
        $this->standard_room_facilities = $standardRoomFacilities;
    }

    public function getStandardHotelService() : string{
        return $this->standard_hotel_service;
    }

    public function setStandardHotelService(string $standardHotelService){
        $this->standard_hotel_service = $standardHotelService;
    }

    public function getStandardHotelFacilities() : string{
        return $this->standard_hotel_facilities;
    }

    public function setStandardHotelFacilities(string $standardHotelFacilities){
        $this->standard_hotel_facilities = $standardHotelFacilities;
    }

    public function getStandardBookingNotice() : string{
        return $this->standard_booking_notice;
    }

    public function setStandardBookingNotice(string $standardBookingNotice){
        $this->standard_booking_notice = $standardBookingNotice;
    }

    public function getStandardAmuseFacilities() : string{
        return $this->standard_amuse_facilities;
    }

    public function setStandardAmuseFacilities(string $standardAmuseFacilities){
        $this->standard_amuse_facilities = $standardAmuseFacilities;
    }

    public function getOnSale() : int{
        return $this->on_sale;
    }

    public function setOnSale(int $onSale){
        $this->on_sale = $onSale;
    }

    public function getHotSearch() : int{
        return $this->hot_search;
    }

    public function setHotSearch(int $hotSearch){
        $this->hot_search = $hotSearch;
    }

    public function getHotSale() : int{
        return $this->hot_sale;
    }

    public function setHotSale(int $hotSale){
        $this->hot_sale = $hotSale;
    }


}


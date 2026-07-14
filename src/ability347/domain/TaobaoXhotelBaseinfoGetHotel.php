<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoGetHotel {

    /**
        酒店ID
     **/
    public $hid;

    /**
        酒店修改备注
     **/
    public $remark;

    /**
        酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
     **/
    public $tel;

    /**
        酒店设施。json格式
     **/
    public $hotel_facilities;

    /**
        酒店类型
     **/
    public $type;

    /**
        扩展信息
     **/
    public $ext;

    /**
        城市编码
     **/
    public $city;

    /**
        邮编
     **/
    public $postal_code;

    /**
        楼层信息
     **/
    public $floors;

    /**
        卖家名称
     **/
    public $seller_nick;

    /**
        酒店中文描述
     **/
    public $description;

    /**
        省份编码
     **/
    public $province;

    /**
        经度
     **/
    public $longitude;

    /**
        匹配是否人工确认
     **/
    public $data_confirm;

    /**
        房间数
     **/
    public $rooms;

    /**
        货币类型（编码,字母编码）
     **/
    public $currency_code_name;

    /**
        酒店状态
     **/
    public $status;

    /**
        酒店英文描述
     **/
    public $en_desc;

    /**
        domestic=0时，固定China； domestic=1时，是海外国家编码值
     **/
    public $country;

    /**
        酒店入住政策
     **/
    public $hotel_policies;

    /**
        纬度
     **/
    public $latitude;

    /**
        操作人信息
     **/
    public $oper_xiaoer_name;

    /**
        酒店外部ID
     **/
    public $outer_id;

    /**
        酒店修改时间
     **/
    public $gmt_modified;

    /**
        酒店下架类型
     **/
    public $down_shelf_type;

    /**
        酒店英文地址
     **/
    public $en_addr;

    /**
        标准酒店ID
     **/
    public $shid;

    /**
        商圈
     **/
    public $business;

    /**
        酒店曾用名
     **/
    public $used_name;

    /**
        酒店图片信息
     **/
    public $pics;

    /**
        房间设施
     **/
    public $room_facilities;

    /**
        酒店名
     **/
    public $name;

    /**
        坐标类型，现在支持：G : Google:B : 百度;A : 高德;M : Mapbar;L : 灵图
     **/
    public $position_type;

    /**
        酒店支付结算类型
     **/
    public $billing_process_type;

    /**
        地区编码
     **/
    public $district;

    /**
        酒店名称(英文)
     **/
    public $name_e;

    /**
        酒店创建时间
     **/
    public $gmt_create;

    /**
        酒店的销售渠道
     **/
    public $vendor;

    /**
        扩展信息
     **/
    public $extend;

    /**
        酒店星级
     **/
    public $star;

    /**
        预订须知
     **/
    public $booking_notice;

    /**
        是否国外。
     **/
    public $domestic;

    /**
        装修时间
     **/
    public $decorate_time;

    /**
        来源
     **/
    public $source;

    /**
        酒店地址
     **/
    public $address;

    /**
        卖家ID
     **/
    public $seller_id;

    /**
        匹配状态
     **/
    public $match_status;

    /**
        酒店服务
     **/
    public $service;

    /**
        品牌
     **/
    public $brand;

    /**
        判断该酒店是不是对应的卖家直营
     **/
    public $kzzy_tag;

    /**
        开业时间
     **/
    public $opening_time;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getHotelFacilities() : string{
        return $this->hotel_facilities;
    }

    public function setHotelFacilities(string $hotelFacilities){
        $this->hotel_facilities = $hotelFacilities;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getExt() : string{
        return $this->ext;
    }

    public function setExt(string $ext){
        $this->ext = $ext;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getPostalCode() : string{
        return $this->postal_code;
    }

    public function setPostalCode(string $postalCode){
        $this->postal_code = $postalCode;
    }

    public function getFloors() : string{
        return $this->floors;
    }

    public function setFloors(string $floors){
        $this->floors = $floors;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getDataConfirm() : int{
        return $this->data_confirm;
    }

    public function setDataConfirm(int $dataConfirm){
        $this->data_confirm = $dataConfirm;
    }

    public function getRooms() : int{
        return $this->rooms;
    }

    public function setRooms(int $rooms){
        $this->rooms = $rooms;
    }

    public function getCurrencyCodeName() : string{
        return $this->currency_code_name;
    }

    public function setCurrencyCodeName(string $currencyCodeName){
        $this->currency_code_name = $currencyCodeName;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getEnDesc() : string{
        return $this->en_desc;
    }

    public function setEnDesc(string $enDesc){
        $this->en_desc = $enDesc;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getHotelPolicies() : string{
        return $this->hotel_policies;
    }

    public function setHotelPolicies(string $hotelPolicies){
        $this->hotel_policies = $hotelPolicies;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getOperXiaoerName() : string{
        return $this->oper_xiaoer_name;
    }

    public function setOperXiaoerName(string $operXiaoerName){
        $this->oper_xiaoer_name = $operXiaoerName;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getDownShelfType() : int{
        return $this->down_shelf_type;
    }

    public function setDownShelfType(int $downShelfType){
        $this->down_shelf_type = $downShelfType;
    }

    public function getEnAddr() : string{
        return $this->en_addr;
    }

    public function setEnAddr(string $enAddr){
        $this->en_addr = $enAddr;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getBusiness() : string{
        return $this->business;
    }

    public function setBusiness(string $business){
        $this->business = $business;
    }

    public function getUsedName() : string{
        return $this->used_name;
    }

    public function setUsedName(string $usedName){
        $this->used_name = $usedName;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getRoomFacilities() : string{
        return $this->room_facilities;
    }

    public function setRoomFacilities(string $roomFacilities){
        $this->room_facilities = $roomFacilities;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPositionType() : string{
        return $this->position_type;
    }

    public function setPositionType(string $positionType){
        $this->position_type = $positionType;
    }

    public function getBillingProcessType() : int{
        return $this->billing_process_type;
    }

    public function setBillingProcessType(int $billingProcessType){
        $this->billing_process_type = $billingProcessType;
    }

    public function getDistrict() : int{
        return $this->district;
    }

    public function setDistrict(int $district){
        $this->district = $district;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getStar() : string{
        return $this->star;
    }

    public function setStar(string $star){
        $this->star = $star;
    }

    public function getBookingNotice() : string{
        return $this->booking_notice;
    }

    public function setBookingNotice(string $bookingNotice){
        $this->booking_notice = $bookingNotice;
    }

    public function getDomestic() : int{
        return $this->domestic;
    }

    public function setDomestic(int $domestic){
        $this->domestic = $domestic;
    }

    public function getDecorateTime() : string{
        return $this->decorate_time;
    }

    public function setDecorateTime(string $decorateTime){
        $this->decorate_time = $decorateTime;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getMatchStatus() : int{
        return $this->match_status;
    }

    public function setMatchStatus(int $matchStatus){
        $this->match_status = $matchStatus;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getKzzyTag() : int{
        return $this->kzzy_tag;
    }

    public function setKzzyTag(int $kzzyTag){
        $this->kzzy_tag = $kzzyTag;
    }

    public function getOpeningTime() : string{
        return $this->opening_time;
    }

    public function setOpeningTime(string $openingTime){
        $this->opening_time = $openingTime;
    }


}


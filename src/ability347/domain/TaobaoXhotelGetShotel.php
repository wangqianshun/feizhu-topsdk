<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelGetShotel {

    /**
        酒店ID
     **/
    public $shid;

    /**
        name
     **/
    public $name;

    /**
        used_name
     **/
    public $used_name;

    /**
        酒店类型
     **/
    public $type;

    /**
        0:国内;1:国外
     **/
    public $domestic;

    /**
        国家编码
     **/
    public $country;

    /**
        地区标签
     **/
    public $city_tag;

    /**
        省份编码
     **/
    public $province;

    /**
        城市编码
     **/
    public $city;

    /**
        区域编码
     **/
    public $district;

    /**
        business
     **/
    public $business;

    /**
        酒店地址
     **/
    public $address;

    /**
        酒店级别
     **/
    public $level;

    /**
        longitude
     **/
    public $longitude;

    /**
        latitude
     **/
    public $latitude;

    /**
        position_type
     **/
    public $position_type;

    /**
        酒店电话
     **/
    public $tel;

    /**
        传真
     **/
    public $fax;

    /**
        开业年份
     **/
    public $opening_time;

    /**
        装修年份
     **/
    public $decorate_time;

    /**
        楼层数
     **/
    public $storeys;

    /**
        扩展信息的JSON
     **/
    public $extend;

    /**
        房间数
     **/
    public $rooms;

    /**
        酒店介绍
     **/
    public $desc;

    /**
        交通距离与设施服务。JSON格式。
     **/
    public $service;

    /**
        酒店设施
     **/
    public $hotel_facilities;

    /**
        房间设施
     **/
    public $room_facilities;

    /**
        酒店图片url
     **/
    public $pic_url;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        0：营业中；-1：筹建中；- 4：失效
     **/
    public $status;

    /**
        邮编
     **/
    public $postal_code;

    /**
        brand
     **/
    public $brand;

    /**
        杂费
     **/
    public $fee;

    /**
        标准酒店英文名
     **/
    public $name_e;

    /**
        0：酒店 1：客栈
     **/
    public $is_kezhan;


    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getUsedName() : string{
        return $this->used_name;
    }

    public function setUsedName(string $usedName){
        $this->used_name = $usedName;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
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

    public function getCityTag() : string{
        return $this->city_tag;
    }

    public function setCityTag(string $cityTag){
        $this->city_tag = $cityTag;
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

    public function getLevel() : string{
        return $this->level;
    }

    public function setLevel(string $level){
        $this->level = $level;
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

    public function getPositionType() : int{
        return $this->position_type;
    }

    public function setPositionType(int $positionType){
        $this->position_type = $positionType;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getFax() : string{
        return $this->fax;
    }

    public function setFax(string $fax){
        $this->fax = $fax;
    }

    public function getOpeningTime() : string{
        return $this->opening_time;
    }

    public function setOpeningTime(string $openingTime){
        $this->opening_time = $openingTime;
    }

    public function getDecorateTime() : string{
        return $this->decorate_time;
    }

    public function setDecorateTime(string $decorateTime){
        $this->decorate_time = $decorateTime;
    }

    public function getStoreys() : string{
        return $this->storeys;
    }

    public function setStoreys(string $storeys){
        $this->storeys = $storeys;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getRooms() : int{
        return $this->rooms;
    }

    public function setRooms(int $rooms){
        $this->rooms = $rooms;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getHotelFacilities() : string{
        return $this->hotel_facilities;
    }

    public function setHotelFacilities(string $hotelFacilities){
        $this->hotel_facilities = $hotelFacilities;
    }

    public function getRoomFacilities() : string{
        return $this->room_facilities;
    }

    public function setRoomFacilities(string $roomFacilities){
        $this->room_facilities = $roomFacilities;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getPostalCode() : string{
        return $this->postal_code;
    }

    public function setPostalCode(string $postalCode){
        $this->postal_code = $postalCode;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getFee() : string{
        return $this->fee;
    }

    public function setFee(string $fee){
        $this->fee = $fee;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }

    public function getIsKezhan() : int{
        return $this->is_kezhan;
    }

    public function setIsKezhan(int $isKezhan){
        $this->is_kezhan = $isKezhan;
    }


}


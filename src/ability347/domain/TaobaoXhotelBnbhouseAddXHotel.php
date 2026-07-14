<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhouseAddXHotel {

    /**
        国家编码
     **/
    public $country;

    /**
        0:国内;1:国外
     **/
    public $domestic;

    /**
        对接系统商名称
     **/
    public $vendor;

    /**
        门店名称
     **/
    public $name;

    /**
        外部id
     **/
    public $outer_id;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        创建时间
     **/
    public $created_time;

    /**
        未通过时的拒绝原因等。
     **/
    public $error_info;

    /**
        淘宝标准门店信息
     **/
    public $shotel;

    /**
        卖家门店ID
     **/
    public $hid;

    /**
        英文名称
     **/
    public $name_e;

    /**
        门店电话
     **/
    public $tel;

    /**
        position_type
     **/
    public $position_type;

    /**
        纬度
     **/
    public $latitude;

    /**
        精度
     **/
    public $longitude;

    /**
        地址
     **/
    public $address;

    /**
        商圈
     **/
    public $business;

    /**
        地区
     **/
    public $district;

    /**
        城市
     **/
    public $city;

    /**
        省
     **/
    public $province;

    /**
        品牌
     **/
    public $brand;

    /**
        照片格式，json
     **/
    public $pics;

    /**
        设施
     **/
    public $hotel_facilities;

    /**
        入住政策
     **/
    public $hotel_policies;

    /**
        描述
     **/
    public $description;

    /**
        房间数
     **/
    public $rooms;

    /**
        楼层
     **/
    public $floors;

    /**
        装修时间
     **/
    public $decorate_time;

    /**
        开业时间
     **/
    public $opening_time;

    /**
        预订须知
     **/
    public $booking_notice;


    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getDomestic() : int{
        return $this->domestic;
    }

    public function setDomestic(int $domestic){
        $this->domestic = $domestic;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getCreatedTime() : string{
        return $this->created_time;
    }

    public function setCreatedTime(string $createdTime){
        $this->created_time = $createdTime;
    }

    public function getErrorInfo() : string{
        return $this->error_info;
    }

    public function setErrorInfo(string $errorInfo){
        $this->error_info = $errorInfo;
    }

    public function getShotel() : TaobaoXhotelBnbhouseAddXsHotel{
        return $this->shotel;
    }

    public function setShotel(TaobaoXhotelBnbhouseAddXsHotel $shotel){
        $this->shotel = $shotel;
    }

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getPositionType() : string{
        return $this->position_type;
    }

    public function setPositionType(string $positionType){
        $this->position_type = $positionType;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getBusiness() : string{
        return $this->business;
    }

    public function setBusiness(string $business){
        $this->business = $business;
    }

    public function getDistrict() : int{
        return $this->district;
    }

    public function setDistrict(int $district){
        $this->district = $district;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getHotelFacilities() : string{
        return $this->hotel_facilities;
    }

    public function setHotelFacilities(string $hotelFacilities){
        $this->hotel_facilities = $hotelFacilities;
    }

    public function getHotelPolicies() : string{
        return $this->hotel_policies;
    }

    public function setHotelPolicies(string $hotelPolicies){
        $this->hotel_policies = $hotelPolicies;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getRooms() : int{
        return $this->rooms;
    }

    public function setRooms(int $rooms){
        $this->rooms = $rooms;
    }

    public function getFloors() : string{
        return $this->floors;
    }

    public function setFloors(string $floors){
        $this->floors = $floors;
    }

    public function getDecorateTime() : string{
        return $this->decorate_time;
    }

    public function setDecorateTime(string $decorateTime){
        $this->decorate_time = $decorateTime;
    }

    public function getOpeningTime() : string{
        return $this->opening_time;
    }

    public function setOpeningTime(string $openingTime){
        $this->opening_time = $openingTime;
    }

    public function getBookingNotice() : string{
        return $this->booking_notice;
    }

    public function setBookingNotice(string $bookingNotice){
        $this->booking_notice = $bookingNotice;
    }


}


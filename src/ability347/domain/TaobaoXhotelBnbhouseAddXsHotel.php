<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhouseAddXsHotel {

    /**
        酒店地址
     **/
    public $address;

    /**
        商圈
     **/
    public $business;

    /**
        区域编码
     **/
    public $district;

    /**
        城市编码
     **/
    public $city;

    /**
        省份编码
     **/
    public $province;

    /**
        国家编码
     **/
    public $country;

    /**
        0:国内;1:国外
     **/
    public $domestic;

    /**
        门店名称
     **/
    public $name;

    /**
        系统自动生成
     **/
    public $shid;

    /**
        英文名称
     **/
    public $name_e;

    /**
        门店状态：0: 正常;-2:停售；-1：删除
     **/
    public $status;

    /**
        品牌
     **/
    public $brand;

    /**
        照片,json格式
     **/
    public $pics;

    /**
        交通距离与设施服务。JSON格式。
     **/
    public $service;

    /**
        酒店设施。json格式
     **/
    public $hotel_facilities;

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
        开业年份
     **/
    public $opening_time;

    /**
        门店电话
     **/
    public $tel;

    /**
        纬度
     **/
    public $latitude;

    /**
        position_type
     **/
    public $position_type;

    /**
        精度
     **/
    public $longitude;


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

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
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

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
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

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }


}


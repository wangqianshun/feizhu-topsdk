<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbroomtypeAddBnbLocationDto {

    /**
        domestic为0时，固定China； domestic为1时，必须传定义的海外国家编码值。参见：http://hotel.alitrip.com/area.htm
     **/
    public $country;

    /**
        地址，最多200字符
     **/
    public $address;

    /**
        商圈，最多64字符
     **/
    public $business;

    /**
        城市编码。参见：http://hotel.alitrip.com/area.htm，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（更新酒店时为可选）
     **/
    public $city;

    /**
        纬度
     **/
    public $latitude;

    /**
        坐标类型，现在支持：G – Google; B – 百度; A – 高德; M – Mapbar; L – 灵图 开芯
     **/
    public $position_type;

    /**
        是否国内酒店。0:国内;1:国外。默认是国内
     **/
    public $domestic;

    /**
        省份编码http://hotel.alitrip.com/area.htm
     **/
    public $province;

    /**
        英文地址，最多500字符
     **/
    public $en_address;

    /**
        接待地址，最多200字符
     **/
    public $reception_address;

    /**
        区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm
     **/
    public $district;

    /**
        时区0到+11或者0到-11
     **/
    public $timezone;

    /**
        门牌号，最多200字符
     **/
    public $doorplate;

    /**
        经度
     **/
    public $longitude;


    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
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

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
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

    public function getDomestic() : int{
        return $this->domestic;
    }

    public function setDomestic(int $domestic){
        $this->domestic = $domestic;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getEnAddress() : string{
        return $this->en_address;
    }

    public function setEnAddress(string $enAddress){
        $this->en_address = $enAddress;
    }

    public function getReceptionAddress() : string{
        return $this->reception_address;
    }

    public function setReceptionAddress(string $receptionAddress){
        $this->reception_address = $receptionAddress;
    }

    public function getDistrict() : int{
        return $this->district;
    }

    public function setDistrict(int $district){
        $this->district = $district;
    }

    public function getTimezone() : string{
        return $this->timezone;
    }

    public function setTimezone(string $timezone){
        $this->timezone = $timezone;
    }

    public function getDoorplate() : string{
        return $this->doorplate;
    }

    public function setDoorplate(string $doorplate){
        $this->doorplate = $doorplate;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }


}


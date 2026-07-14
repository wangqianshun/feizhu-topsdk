<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelAddXHotel {

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
        未通过时的拒绝原因等。
     **/
    public $error_info;

    /**
        逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
     **/
    public $credit_card_types;

    /**
        卖家酒店英文名称
     **/
    public $name_e;


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

    public function getSHotel() : TaobaoXhotelAddSHotel{
        return $this->s_hotel;
    }

    public function setSHotel(TaobaoXhotelAddSHotel $sHotel){
        $this->s_hotel = $sHotel;
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

    public function getErrorInfo() : string{
        return $this->error_info;
    }

    public function setErrorInfo(string $errorInfo){
        $this->error_info = $errorInfo;
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


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCityCoordinatesBatchDownloadCoordinate {

    /**
        批次号
     **/
    public $batch_id;

    /**
        飞猪城市编码
     **/
    public $city;

    /**
        飞猪城市中文名称
     **/
    public $city_cn_name;

    /**
        飞猪城市英文名称
     **/
    public $city_en_name;

    /**
        飞猪国家编码
     **/
    public $country;

    /**
        外部经纬度标识id，可以是酒店或城市的id
     **/
    public $outer_id;


    public function getBatchId() : int{
        return $this->batch_id;
    }

    public function setBatchId(int $batchId){
        $this->batch_id = $batchId;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getCityCnName() : string{
        return $this->city_cn_name;
    }

    public function setCityCnName(string $cityCnName){
        $this->city_cn_name = $cityCnName;
    }

    public function getCityEnName() : string{
        return $this->city_en_name;
    }

    public function setCityEnName(string $cityEnName){
        $this->city_en_name = $cityEnName;
    }

    public function getCountry() : int{
        return $this->country;
    }

    public function setCountry(int $country){
        $this->country = $country;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


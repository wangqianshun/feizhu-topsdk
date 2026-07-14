<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCityCoordinatesBatchUploadCoordinate {

    /**
        飞猪国家编码
     **/
    public $country;

    /**
        纬度
     **/
    public $latitude;

    /**
        经度
     **/
    public $longitude;

    /**
        外部经纬度标识id，可以是酒店或城市的id
     **/
    public $outer_id;


    public function getCountry() : int{
        return $this->country;
    }

    public function setCountry(int $country){
        $this->country = $country;
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

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


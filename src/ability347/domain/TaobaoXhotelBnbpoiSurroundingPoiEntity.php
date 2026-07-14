<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpoiSurroundingPoiEntity {

    /**
        距离当前poi直线距离
     **/
    public $distance;

    /**
        经纬度
     **/
    public $latitude;

    /**
        名字
     **/
    public $name;

    /**
        id
     **/
    public $poi_id;

    /**
        经纬度
     **/
    public $longitude;


    public function getDistance() : int{
        return $this->distance;
    }

    public function setDistance(int $distance){
        $this->distance = $distance;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPoiId() : int{
        return $this->poi_id;
    }

    public function setPoiId(int $poiId){
        $this->poi_id = $poiId;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }


}


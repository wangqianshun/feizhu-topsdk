<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsSellerWritelogisticsnodeLocationTopDTO {

    /**
        省/直辖市
     **/
    public $province;

    /**
        地级市
     **/
    public $city;

    /**
        区/县
     **/
    public $district;

    /**
        乡/镇/街道
     **/
    public $town;

    /**
        经度，高德地图
     **/
    public $lng;

    /**
        纬度，高德地图
     **/
    public $lat;


    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getDistrict() : string{
        return $this->district;
    }

    public function setDistrict(string $district){
        $this->district = $district;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }

    public function getLng() : string{
        return $this->lng;
    }

    public function setLng(string $lng){
        $this->lng = $lng;
    }

    public function getLat() : string{
        return $this->lat;
    }

    public function setLat(string $lat){
        $this->lat = $lat;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpoiGetPoiInfo {

    /**
        父ID
     **/
    public $parent_id;

    /**
        名字
     **/
    public $name;

    /**
        经纬度
     **/
    public $longitude;

    /**
        经纬度
     **/
    public $latitude;

    /**
        搜索数据
     **/
    public $hot_num;


    public function getParentId() : int{
        return $this->parent_id;
    }

    public function setParentId(int $parentId){
        $this->parent_id = $parentId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
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

    public function getHotNum() : int{
        return $this->hot_num;
    }

    public function setHotNum(int $hotNum){
        $this->hot_num = $hotNum;
    }


}


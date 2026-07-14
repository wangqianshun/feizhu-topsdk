<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelHouseRoomtypeAddSRoomType {

    /**
        匹配的标准房型
     **/
    public $srid;

    /**
        房型名
     **/
    public $name;

    /**
        楼层
     **/
    public $floor;

    /**
        宽带服务
"0","有线上网(免费),
"1","有线上网(无)",
"2","有线上网(收费)",
"3","有线上网(部分有且免费)",
"4","有线上网(部分有且收费)"
     **/
    public $internet;

    /**
        shid
     **/
    public $shid;

    /**
        pic_url
     **/
    public $pic_url;

    /**
        facility
     **/
    public $facility;

    /**
        最大入住人数
     **/
    public $max_occupancy;

    /**
        面积
     **/
    public $area;

    /**
        扩展字段
     **/
    public $extend;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        窗型，枚举类型
0, 无窗,
1, 有窗;
     **/
    public $window_type;

    /**
        床型。json格式：[{"bedType":"大床","bedSize":"1.5m"},{"bedType":"双床","bedSize":"1.2m"}]
     **/
    public $bed;

    /**
        状态。0:正常;-1:删除
     **/
    public $status;


    public function getSrid() : int{
        return $this->srid;
    }

    public function setSrid(int $srid){
        $this->srid = $srid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }

    public function getInternet() : string{
        return $this->internet;
    }

    public function setInternet(string $internet){
        $this->internet = $internet;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getFacility() : string{
        return $this->facility;
    }

    public function setFacility(string $facility){
        $this->facility = $facility;
    }

    public function getMaxOccupancy() : int{
        return $this->max_occupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->max_occupancy = $maxOccupancy;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
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

    public function getWindowType() : string{
        return $this->window_type;
    }

    public function setWindowType(string $windowType){
        $this->window_type = $windowType;
    }

    public function getBed() : string{
        return $this->bed;
    }

    public function setBed(string $bed){
        $this->bed = $bed;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}


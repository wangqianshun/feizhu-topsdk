<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoGetSroomtypelist {

    /**
        窗型
     **/
    public $window_type;

    /**
        酒店图片结构化信息
     **/
    public $pics_info;

    /**
        宽带服务
     **/
    public $network_service;

    /**
        最后变更人
     **/
    public $last_modify;

    /**
        includeTypes
     **/
    public $include_types;

    /**
        创建人
     **/
    public $auditor;

    /**
        标准酒店ID
     **/
    public $shid;

    /**
        房型原始图片
     **/
    public $original_pics;

    /**
        版本号
     **/
    public $version;

    /**
        标准房型ID
     **/
    public $srid;

    /**
        房型图片
     **/
    public $pics;

    /**
        图片扩展字段
     **/
    public $pics_ext;

    /**
        面积
     **/
    public $area;

    /**
        设施
     **/
    public $facility;

    /**
        标准房型名称
     **/
    public $name;

    /**
        propertiesDOs
     **/
    public $properties_d_os;

    /**
        是否可加床
     **/
    public $add_bed;

    /**
        标准房型的英文名
     **/
    public $name_e;

    /**
        状态
     **/
    public $status;

    /**
        扩展信息
     **/
    public $extend;

    /**
        床型
     **/
    public $bed;

    /**
        transferPics
     **/
    public $transfer_pics;

    /**
        楼层
     **/
    public $floor;

    /**
        来源
     **/
    public $source;

    /**
        bedList
     **/
    public $bed_list;

    /**
        最大入住人数
     **/
    public $max_occupancy;

    /**
        外部id
     **/
    public $outer_id;


    public function getWindowType() : string{
        return $this->window_type;
    }

    public function setWindowType(string $windowType){
        $this->window_type = $windowType;
    }

    public function getPicsInfo() : string{
        return $this->pics_info;
    }

    public function setPicsInfo(string $picsInfo){
        $this->pics_info = $picsInfo;
    }

    public function getNetworkService() : string{
        return $this->network_service;
    }

    public function setNetworkService(string $networkService){
        $this->network_service = $networkService;
    }

    public function getLastModify() : string{
        return $this->last_modify;
    }

    public function setLastModify(string $lastModify){
        $this->last_modify = $lastModify;
    }

    public function getIncludeTypes() : string{
        return $this->include_types;
    }

    public function setIncludeTypes(string $includeTypes){
        $this->include_types = $includeTypes;
    }

    public function getAuditor() : string{
        return $this->auditor;
    }

    public function setAuditor(string $auditor){
        $this->auditor = $auditor;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getOriginalPics() : string{
        return $this->original_pics;
    }

    public function setOriginalPics(string $originalPics){
        $this->original_pics = $originalPics;
    }

    public function getVersion() : int{
        return $this->version;
    }

    public function setVersion(int $version){
        $this->version = $version;
    }

    public function getSrid() : int{
        return $this->srid;
    }

    public function setSrid(int $srid){
        $this->srid = $srid;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getPicsExt() : string{
        return $this->pics_ext;
    }

    public function setPicsExt(string $picsExt){
        $this->pics_ext = $picsExt;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getFacility() : string{
        return $this->facility;
    }

    public function setFacility(string $facility){
        $this->facility = $facility;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPropertiesDOs() : string{
        return $this->properties_d_os;
    }

    public function setPropertiesDOs(string $propertiesDOs){
        $this->properties_d_os = $propertiesDOs;
    }

    public function getAddBed() : int{
        return $this->add_bed;
    }

    public function setAddBed(int $addBed){
        $this->add_bed = $addBed;
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

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getBed() : string{
        return $this->bed;
    }

    public function setBed(string $bed){
        $this->bed = $bed;
    }

    public function getTransferPics() : string{
        return $this->transfer_pics;
    }

    public function setTransferPics(string $transferPics){
        $this->transfer_pics = $transferPics;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getBedList() : string{
        return $this->bed_list;
    }

    public function setBedList(string $bedList){
        $this->bed_list = $bedList;
    }

    public function getMaxOccupancy() : int{
        return $this->max_occupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->max_occupancy = $maxOccupancy;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


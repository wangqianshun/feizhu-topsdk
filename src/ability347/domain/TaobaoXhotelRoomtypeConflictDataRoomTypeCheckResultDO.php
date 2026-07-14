<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRoomtypeConflictDataRoomTypeCheckResultDO {

    /**
        床型数据检查结果，false代表有冲突
     **/
    public $bedtypecheckresult;

    /**
        结构化床型
     **/
    public $bed_type;

    /**
        原始床型
     **/
    public $origin_bed_type;

    /**
        房型英文名称
     **/
    public $roomtypeenname;

    /**
        房型名称
     **/
    public $roomtypename;

    /**
        房型编码
     **/
    public $outer_room_type_id;

    /**
        酒店名称
     **/
    public $hotelname;

    /**
        酒店编码
     **/
    public $outer_hotel_id;

    /**
        冲突数据创建时间（供商家参考，如果时间是过去三天以外的，那么可以不用关注）
     **/
    public $gmt_create;

    /**
        床型英文描叙
     **/
    public $ennamebedtypedesc;

    /**
        床型描叙
     **/
    public $namebedtypedesc;

    /**
        床型描叙
     **/
    public $bedtypedesc;

    /**
        床型检查信息
     **/
    public $bedtypecheckmsg;


    public function getBedtypecheckresult() : string{
        return $this->bedtypecheckresult;
    }

    public function setBedtypecheckresult(string $bedtypecheckresult){
        $this->bedtypecheckresult = $bedtypecheckresult;
    }

    public function getBedType() : string{
        return $this->bed_type;
    }

    public function setBedType(string $bedType){
        $this->bed_type = $bedType;
    }

    public function getOriginBedType() : string{
        return $this->origin_bed_type;
    }

    public function setOriginBedType(string $originBedType){
        $this->origin_bed_type = $originBedType;
    }

    public function getRoomtypeenname() : string{
        return $this->roomtypeenname;
    }

    public function setRoomtypeenname(string $roomtypeenname){
        $this->roomtypeenname = $roomtypeenname;
    }

    public function getRoomtypename() : string{
        return $this->roomtypename;
    }

    public function setRoomtypename(string $roomtypename){
        $this->roomtypename = $roomtypename;
    }

    public function getOuterRoomTypeId() : string{
        return $this->outer_room_type_id;
    }

    public function setOuterRoomTypeId(string $outerRoomTypeId){
        $this->outer_room_type_id = $outerRoomTypeId;
    }

    public function getHotelname() : string{
        return $this->hotelname;
    }

    public function setHotelname(string $hotelname){
        $this->hotelname = $hotelname;
    }

    public function getOuterHotelId() : string{
        return $this->outer_hotel_id;
    }

    public function setOuterHotelId(string $outerHotelId){
        $this->outer_hotel_id = $outerHotelId;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getEnnamebedtypedesc() : string{
        return $this->ennamebedtypedesc;
    }

    public function setEnnamebedtypedesc(string $ennamebedtypedesc){
        $this->ennamebedtypedesc = $ennamebedtypedesc;
    }

    public function getNamebedtypedesc() : string{
        return $this->namebedtypedesc;
    }

    public function setNamebedtypedesc(string $namebedtypedesc){
        $this->namebedtypedesc = $namebedtypedesc;
    }

    public function getBedtypedesc() : string{
        return $this->bedtypedesc;
    }

    public function setBedtypedesc(string $bedtypedesc){
        $this->bedtypedesc = $bedtypedesc;
    }

    public function getBedtypecheckmsg() : string{
        return $this->bedtypecheckmsg;
    }

    public function setBedtypecheckmsg(string $bedtypecheckmsg){
        $this->bedtypecheckmsg = $bedtypecheckmsg;
    }


}


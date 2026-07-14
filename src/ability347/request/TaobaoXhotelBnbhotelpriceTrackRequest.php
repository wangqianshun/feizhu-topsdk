<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbhotelpriceTrackBnbSroomInfoAuditParam;

class TaobaoXhotelBnbhotelpriceTrackRequest {

    /**
        竞品酒店id
     **/
    private $competitionRoomHid;

    /**
        创建房型参数
     **/
    private $sroomInfoAuditParam;

    /**
        竞品房型id
     **/
    private $competitionRoomId;

    /**
        竞品酒店名称
     **/
    private $competitionHotelName;

    /**
        扩展字段
     **/
    private $extraMap;


    public function getCompetitionRoomHid() : string{
        return $this->competitionRoomHid;
    }

    public function setCompetitionRoomHid(string $competitionRoomHid){
        $this->competitionRoomHid = $competitionRoomHid;
    }

    public function getSroomInfoAuditParam() : TaobaoXhotelBnbhotelpriceTrackBnbSroomInfoAuditParam{
        return $this->sroomInfoAuditParam;
    }

    public function setSroomInfoAuditParam(TaobaoXhotelBnbhotelpriceTrackBnbSroomInfoAuditParam $sroomInfoAuditParam){
        $this->sroomInfoAuditParam = $sroomInfoAuditParam;
    }

    public function getCompetitionRoomId() : string{
        return $this->competitionRoomId;
    }

    public function setCompetitionRoomId(string $competitionRoomId){
        $this->competitionRoomId = $competitionRoomId;
    }

    public function getCompetitionHotelName() : string{
        return $this->competitionHotelName;
    }

    public function setCompetitionHotelName(string $competitionHotelName){
        $this->competitionHotelName = $competitionHotelName;
    }

    public function getExtraMap() : array{
        return $this->extraMap;
    }

    public function setExtraMap(array $extraMap){
        $this->extraMap = $extraMap;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbhotelprice.track";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->competitionRoomHid)) {
            $requestParam["competition_room_hid"] = TopUtil::convertBasic($this->competitionRoomHid);
        }

        if (!TopUtil::checkEmpty($this->sroomInfoAuditParam)) {
            $requestParam["sroom_info_audit_param"] = TopUtil::convertStruct($this->sroomInfoAuditParam);
        }

        if (!TopUtil::checkEmpty($this->competitionRoomId)) {
            $requestParam["competition_room_id"] = TopUtil::convertBasic($this->competitionRoomId);
        }

        if (!TopUtil::checkEmpty($this->competitionHotelName)) {
            $requestParam["competition_hotel_name"] = TopUtil::convertBasic($this->competitionHotelName);
        }

        if (!TopUtil::checkEmpty($this->extraMap)) {
            $requestParam["extra_map"] = TopUtil::convertStruct($this->extraMap);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


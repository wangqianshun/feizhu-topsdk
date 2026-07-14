<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelpriceTrackBnbSroomInfoAuditParam {

    /**
        房型基础信息
     **/
    public $sroom_basic;

    /**
        房型设施信息json
     **/
    public $facility;


    public function getSroomBasic() : TaobaoXhotelBnbhotelpriceTrackSroomBasic{
        return $this->sroom_basic;
    }

    public function setSroomBasic(TaobaoXhotelBnbhotelpriceTrackSroomBasic $sroomBasic){
        $this->sroom_basic = $sroomBasic;
    }

    public function getFacility() : array{
        return $this->facility;
    }

    public function setFacility(array $facility){
        $this->facility = $facility;
    }


}


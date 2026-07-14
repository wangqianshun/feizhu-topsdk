<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelMatchRoomRelation {

    /**
        rid
     **/
    public $rid;

    /**
        srid
     **/
    public $srid;

    /**
        competionRoomId
     **/
    public $competion_room_id;


    public function getRid() : string{
        return $this->rid;
    }

    public function setRid(string $rid){
        $this->rid = $rid;
    }

    public function getSrid() : string{
        return $this->srid;
    }

    public function setSrid(string $srid){
        $this->srid = $srid;
    }

    public function getCompetionRoomId() : string{
        return $this->competion_room_id;
    }

    public function setCompetionRoomId(string $competionRoomId){
        $this->competion_room_id = $competionRoomId;
    }


}


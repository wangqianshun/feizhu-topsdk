<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelMatchKezhanCompetitionRelationResult {

    /**
        hid
     **/
    public $hid;

    /**
        shid
     **/
    public $shid;

    /**
        房型映射数据
     **/
    public $room_relations;

    /**
        competitionRoomHid
     **/
    public $competition_room_hid;


    public function getHid() : string{
        return $this->hid;
    }

    public function setHid(string $hid){
        $this->hid = $hid;
    }

    public function getShid() : string{
        return $this->shid;
    }

    public function setShid(string $shid){
        $this->shid = $shid;
    }

    public function getRoomRelations() : array{
        return $this->room_relations;
    }

    public function setRoomRelations(array $roomRelations){
        $this->room_relations = $roomRelations;
    }

    public function getCompetitionRoomHid() : string{
        return $this->competition_room_hid;
    }

    public function setCompetitionRoomHid(string $competitionRoomHid){
        $this->competition_room_hid = $competitionRoomHid;
    }


}


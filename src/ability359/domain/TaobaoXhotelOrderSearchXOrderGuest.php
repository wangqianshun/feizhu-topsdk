<?php
namespace FeiZhu\TopSdk\Ability359\Domain;

class TaobaoXhotelOrderSearchXOrderGuest {

    /**
        入住人姓名
     **/
    public $name;

    /**
        房间序号
     **/
    public $room_pos;

    /**
        入住人序号
     **/
    public $person_pos;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getRoomPos() : int{
        return $this->room_pos;
    }

    public function setRoomPos(int $roomPos){
        $this->room_pos = $roomPos;
    }

    public function getPersonPos() : int{
        return $this->person_pos;
    }

    public function setPersonPos(int $personPos){
        $this->person_pos = $personPos;
    }


}


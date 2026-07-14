<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoRoomGetXHotelInfoWithRoom {

    /**
        房型基础信息
     **/
    public $room_type_list;


    public function getRoomTypeList() : array{
        return $this->room_type_list;
    }

    public function setRoomTypeList(array $roomTypeList){
        $this->room_type_list = $roomTypeList;
    }


}


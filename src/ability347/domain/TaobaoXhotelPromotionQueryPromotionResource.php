<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryPromotionResource {

    /**
        房型信息
     **/
    public $rooms;

    /**
        供应商酒店code
     **/
    public $hotel_code;


    public function getRooms() : array{
        return $this->rooms;
    }

    public function setRooms(array $rooms){
        $this->rooms = $rooms;
    }

    public function getHotelCode() : string{
        return $this->hotel_code;
    }

    public function setHotelCode(string $hotelCode){
        $this->hotel_code = $hotelCode;
    }


}


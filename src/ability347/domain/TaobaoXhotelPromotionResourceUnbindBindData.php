<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionResourceUnbindBindData {

    /**
        促销规则Id
     **/
    public $promotion_rule_id;

    /**
        供应商酒店code
     **/
    public $hotel_code;

    /**
        解绑成功结果，部分成功的时候有值
     **/
    public $success_rooms;

    /**
        解绑失败结果，部分成功的时候有值
     **/
    public $failed_rooms;


    public function getPromotionRuleId() : int{
        return $this->promotion_rule_id;
    }

    public function setPromotionRuleId(int $promotionRuleId){
        $this->promotion_rule_id = $promotionRuleId;
    }

    public function getHotelCode() : string{
        return $this->hotel_code;
    }

    public function setHotelCode(string $hotelCode){
        $this->hotel_code = $hotelCode;
    }

    public function getSuccessRooms() : array{
        return $this->success_rooms;
    }

    public function setSuccessRooms(array $successRooms){
        $this->success_rooms = $successRooms;
    }

    public function getFailedRooms() : array{
        return $this->failed_rooms;
    }

    public function setFailedRooms(array $failedRooms){
        $this->failed_rooms = $failedRooms;
    }


}


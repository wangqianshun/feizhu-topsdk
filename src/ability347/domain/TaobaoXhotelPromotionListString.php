<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionListString {

    /**
        根据报名方式不同和入参不同，区分不同的活动类型，营销平台定义
     **/
    public $promotion_type;

    /**
        活动名称
     **/
    public $promotion_name;

    /**
        支持通过接口方式开通的活动对应ID；由平台定义，用来识别活动
     **/
    public $promotion_code;

    /**
        活动有效期开始时间
     **/
    public $start;

    /**
        活动有效期截止时间
     **/
    public $end;

    /**
        子活动列表
     **/
    public $sub_promotion_items;


    public function getPromotionType() : int{
        return $this->promotion_type;
    }

    public function setPromotionType(int $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getPromotionName() : string{
        return $this->promotion_name;
    }

    public function setPromotionName(string $promotionName){
        $this->promotion_name = $promotionName;
    }

    public function getPromotionCode() : string{
        return $this->promotion_code;
    }

    public function setPromotionCode(string $promotionCode){
        $this->promotion_code = $promotionCode;
    }

    public function getStart() : string{
        return $this->start;
    }

    public function setStart(string $start){
        $this->start = $start;
    }

    public function getEnd() : string{
        return $this->end;
    }

    public function setEnd(string $end){
        $this->end = $end;
    }

    public function getSubPromotionItems() : array{
        return $this->sub_promotion_items;
    }

    public function setSubPromotionItems(array $subPromotionItems){
        $this->sub_promotion_items = $subPromotionItems;
    }


}


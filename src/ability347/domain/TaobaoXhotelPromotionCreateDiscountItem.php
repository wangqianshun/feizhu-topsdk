<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionCreateDiscountItem {

    /**
        优住会折扣类型，必须传1-4
     **/
    public $discount_type;

    /**
        优住会折扣值，必须把discount_type为1-4四个等级设置对应折扣，设置20%，表示如果原价200，折后金额为180.
     **/
    public $discount_value;


    public function getDiscountType() : int{
        return $this->discount_type;
    }

    public function setDiscountType(int $discountType){
        $this->discount_type = $discountType;
    }

    public function getDiscountValue() : int{
        return $this->discount_value;
    }

    public function setDiscountValue(int $discountValue){
        $this->discount_value = $discountValue;
    }


}


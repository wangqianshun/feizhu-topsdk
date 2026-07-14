<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryDiscountItem {

    /**
        优住会折扣类型
     **/
    public $discount_type;

    /**
        优住会折扣值
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


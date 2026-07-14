<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionListSubPromotionItem {

    /**
        折扣类型，1 折扣，2 立减
     **/
    public $discount_type;

    /**
        当查询到的类型为四或五时，营销平台返回对应的子活动code
     **/
    public $sub_promotion_code;

    /**
        当查询到的类型为四或五时，营销平台返回对应的折扣。
     **/
    public $discount_value;


    public function getDiscountType() : int{
        return $this->discount_type;
    }

    public function setDiscountType(int $discountType){
        $this->discount_type = $discountType;
    }

    public function getSubPromotionCode() : string{
        return $this->sub_promotion_code;
    }

    public function setSubPromotionCode(string $subPromotionCode){
        $this->sub_promotion_code = $subPromotionCode;
    }

    public function getDiscountValue() : int{
        return $this->discount_value;
    }

    public function setDiscountValue(int $discountValue){
        $this->discount_value = $discountValue;
    }


}


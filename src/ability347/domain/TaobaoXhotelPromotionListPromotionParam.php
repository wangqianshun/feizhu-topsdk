<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionListPromotionParam {

    /**
        根据报名方式不同和入参不同，区分不同的活动类型，营销平台定义 类型一：商家可自定义折扣、活动生效时间、产品 类型二：商家可自定义折扣、活动生效时间&规则生效场景、产品 类型三：商家可自定义折扣，无法自定义时间，hid下全房型报名 类型四：商家只能查询可报名折扣，无法自定义时间，可自定义房型报名 类型五：商家只能查询可报名折扣，无法自定义时间，无法自定义房型
     **/
    public $promotion_type;

    /**
        支持通过接口方式开通的活动对应ID；由平台定义，用来识别活动
     **/
    public $promotion_code;


    public function getPromotionType() : int{
        return $this->promotion_type;
    }

    public function setPromotionType(int $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getPromotionCode() : string{
        return $this->promotion_code;
    }

    public function setPromotionCode(string $promotionCode){
        $this->promotion_code = $promotionCode;
    }


}


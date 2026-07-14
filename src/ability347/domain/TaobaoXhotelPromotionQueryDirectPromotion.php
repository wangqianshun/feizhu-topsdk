<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryDirectPromotion {

    /**
        促销规则Id
     **/
    public $promotion_rule_id;

    /**
        促销规则
     **/
    public $promotion_rules;

    /**
        促销类别代码
     **/
    public $promotion_code;

    /**
        活动绑定资源
     **/
    public $resources;

    /**
        促销金额计算方式, 0 Percentage | 1 Fixed; 暂时支持固定金额 Fixed:固定金额 Percentage: 折扣比例｜3 代表优住会折扣
     **/
    public $discount_type;

    /**
        当查询到的类型为四或五时，营销平台返回对应的子活动code
     **/
    public $sub_promotion_code;

    /**
        活动类型为三时，需要传对应等级的折扣。模版：xxx,最高立减50%，每个等级间差距不能高于X%。
     **/
    public $discount_list;

    /**
        动态营销，飞猪会根据市场情况动态调整折扣，折扣不会高于酒店设置的。
     **/
    public $dynamic_discount_value;


    public function getPromotionRuleId() : int{
        return $this->promotion_rule_id;
    }

    public function setPromotionRuleId(int $promotionRuleId){
        $this->promotion_rule_id = $promotionRuleId;
    }

    public function getPromotionRules() : array{
        return $this->promotion_rules;
    }

    public function setPromotionRules(array $promotionRules){
        $this->promotion_rules = $promotionRules;
    }

    public function getPromotionCode() : int{
        return $this->promotion_code;
    }

    public function setPromotionCode(int $promotionCode){
        $this->promotion_code = $promotionCode;
    }

    public function getResources() : array{
        return $this->resources;
    }

    public function setResources(array $resources){
        $this->resources = $resources;
    }

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

    public function getDiscountList() : array{
        return $this->discount_list;
    }

    public function setDiscountList(array $discountList){
        $this->discount_list = $discountList;
    }

    public function getDynamicDiscountValue() : string{
        return $this->dynamic_discount_value;
    }

    public function setDynamicDiscountValue(string $dynamicDiscountValue){
        $this->dynamic_discount_value = $dynamicDiscountValue;
    }


}


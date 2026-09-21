<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateFirstMonthRentDiscountDto {

    /**
        优惠券类型：DISCOUNT（折扣）/ REDUCE_TO（减至X分）
     **/
    public $discount_type;

    /**
        优惠面额：DISCOUNT类型=折扣值(1~99，1表示0.1折，99表示9.9折)，REDUCE_TO类型=金额(单位分)
     **/
    public $discount_value;


    public function getDiscountType() : string{
        return $this->discount_type;
    }

    public function setDiscountType(string $discountType){
        $this->discount_type = $discountType;
    }

    public function getDiscountValue() : int{
        return $this->discount_value;
    }

    public function setDiscountValue(int $discountValue){
        $this->discount_value = $discountValue;
    }


}


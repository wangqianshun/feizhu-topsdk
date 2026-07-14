<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdateUpdatePromoParam {

    /**
        外部营销活动的code，最长40个字符
     **/
    public $outer_activity_code;

    /**
        营销活动的具体参数对象，在每次添加更新的时候，long_order_info、early_booking_info、daily_booking_info 只能填1种类型，其他2种类型为空
     **/
    public $promo_info;

    /**
        营销活动关联的价格计划和房型
     **/
    public $rate_infos;


    public function getOuterActivityCode() : string{
        return $this->outer_activity_code;
    }

    public function setOuterActivityCode(string $outerActivityCode){
        $this->outer_activity_code = $outerActivityCode;
    }

    public function getPromoInfo() : TaobaoXhotelBnbpromoUpdatePromoInfo{
        return $this->promo_info;
    }

    public function setPromoInfo(TaobaoXhotelBnbpromoUpdatePromoInfo $promoInfo){
        $this->promo_info = $promoInfo;
    }

    public function getRateInfos() : array{
        return $this->rate_infos;
    }

    public function setRateInfos(array $rateInfos){
        $this->rate_infos = $rateInfos;
    }


}


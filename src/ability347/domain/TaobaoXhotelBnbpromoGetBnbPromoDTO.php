<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetBnbPromoDTO {

    /**
        参与活动的rates
     **/
    public $rate_infos;

    /**
        外部活动code
     **/
    public $outer_activity_code;

    /**
        优惠信息
     **/
    public $promo_info;


    public function getRateInfos() : array{
        return $this->rate_infos;
    }

    public function setRateInfos(array $rateInfos){
        $this->rate_infos = $rateInfos;
    }

    public function getOuterActivityCode() : string{
        return $this->outer_activity_code;
    }

    public function setOuterActivityCode(string $outerActivityCode){
        $this->outer_activity_code = $outerActivityCode;
    }

    public function getPromoInfo() : TaobaoXhotelBnbpromoGetPromoInfo{
        return $this->promo_info;
    }

    public function setPromoInfo(TaobaoXhotelBnbpromoGetPromoInfo $promoInfo){
        $this->promo_info = $promoInfo;
    }


}


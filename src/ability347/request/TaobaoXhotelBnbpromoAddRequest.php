<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbpromoAddPromoInfo;

class TaobaoXhotelBnbpromoAddRequest {

    /**
        营销类型
     **/
    private $promoInfo;


    public function getPromoInfo() : TaobaoXhotelBnbpromoAddPromoInfo{
        return $this->promoInfo;
    }

    public function setPromoInfo(TaobaoXhotelBnbpromoAddPromoInfo $promoInfo){
        $this->promoInfo = $promoInfo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->promoInfo)) {
            $requestParam["promo_info"] = TopUtil::convertStruct($this->promoInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


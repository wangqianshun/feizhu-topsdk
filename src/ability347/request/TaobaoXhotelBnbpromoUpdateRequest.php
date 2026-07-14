<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbpromoUpdateUpdatePromoParam;

class TaobaoXhotelBnbpromoUpdateRequest {

    /**
        更新营销活动的入参
     **/
    private $updatePromoParam;


    public function getUpdatePromoParam() : TaobaoXhotelBnbpromoUpdateUpdatePromoParam{
        return $this->updatePromoParam;
    }

    public function setUpdatePromoParam(TaobaoXhotelBnbpromoUpdateUpdatePromoParam $updatePromoParam){
        $this->updatePromoParam = $updatePromoParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updatePromoParam)) {
            $requestParam["update_promo_param"] = TopUtil::convertStruct($this->updatePromoParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


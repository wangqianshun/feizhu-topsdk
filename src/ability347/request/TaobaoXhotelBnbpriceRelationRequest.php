<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpriceRelationRequest {

    /**
        hid维度价态关系
     **/
    private $priceCycleLimitParamList;


    public function getPriceCycleLimitParamList() : array{
        return $this->priceCycleLimitParamList;
    }

    public function setPriceCycleLimitParamList(array $priceCycleLimitParamList){
        $this->priceCycleLimitParamList = $priceCycleLimitParamList;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbprice.relation";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->priceCycleLimitParamList)) {
            $requestParam["price_cycle_limit_param_list"] = TopUtil::convertStructList($this->priceCycleLimitParamList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


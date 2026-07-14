<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpoiGetRequest {

    /**
        城市code码
     **/
    private $cityCode;


    public function getCityCode() : int{
        return $this->cityCode;
    }

    public function setCityCode(int $cityCode){
        $this->cityCode = $cityCode;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpoi.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cityCode)) {
            $requestParam["city_code"] = TopUtil::convertBasic($this->cityCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelIntlRateUpdateUpdateRateParam;

class TaobaoXhotelIntlRateUpdateRequest {

    /**
        rate更新参数
     **/
    private $updateRateParam;


    public function getUpdateRateParam() : TaobaoXhotelIntlRateUpdateUpdateRateParam{
        return $this->updateRateParam;
    }

    public function setUpdateRateParam(TaobaoXhotelIntlRateUpdateUpdateRateParam $updateRateParam){
        $this->updateRateParam = $updateRateParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.intl.rate.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updateRateParam)) {
            $requestParam["update_rate_param"] = TopUtil::convertStruct($this->updateRateParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


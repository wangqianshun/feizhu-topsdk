<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpromoUnbindRequest {

    /**
        营销活动code
     **/
    private $activityCode;

    /**
        营销
     **/
    private $rateInfos;


    public function getActivityCode() : string{
        return $this->activityCode;
    }

    public function setActivityCode(string $activityCode){
        $this->activityCode = $activityCode;
    }

    public function getRateInfos() : array{
        return $this->rateInfos;
    }

    public function setRateInfos(array $rateInfos){
        $this->rateInfos = $rateInfos;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.unbind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activityCode)) {
            $requestParam["activity_code"] = TopUtil::convertBasic($this->activityCode);
        }

        if (!TopUtil::checkEmpty($this->rateInfos)) {
            $requestParam["rate_infos"] = TopUtil::convertStructList($this->rateInfos);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


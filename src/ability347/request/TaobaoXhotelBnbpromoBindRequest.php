<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpromoBindRequest {

    /**
        营销活动code
     **/
    private $activityCode;

    /**
        外部价格信息
     **/
    private $rateInfos;

    /**
        活动入住时间，民宿通用营销必填
     **/
    private $checkInFrom;

    /**
        活动离店时间，民宿通用营销必填
     **/
    private $checkOutTo;


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

    public function getCheckInFrom() : string{
        return $this->checkInFrom;
    }

    public function setCheckInFrom(string $checkInFrom){
        $this->checkInFrom = $checkInFrom;
    }

    public function getCheckOutTo() : string{
        return $this->checkOutTo;
    }

    public function setCheckOutTo(string $checkOutTo){
        $this->checkOutTo = $checkOutTo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activityCode)) {
            $requestParam["activity_code"] = TopUtil::convertBasic($this->activityCode);
        }

        if (!TopUtil::checkEmpty($this->rateInfos)) {
            $requestParam["rate_infos"] = TopUtil::convertStructList($this->rateInfos);
        }

        if (!TopUtil::checkEmpty($this->checkInFrom)) {
            $requestParam["check_in_from"] = TopUtil::convertBasic($this->checkInFrom);
        }

        if (!TopUtil::checkEmpty($this->checkOutTo)) {
            $requestParam["check_out_to"] = TopUtil::convertBasic($this->checkOutTo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


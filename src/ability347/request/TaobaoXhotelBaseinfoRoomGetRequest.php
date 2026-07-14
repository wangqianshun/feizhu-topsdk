<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBaseinfoRoomGetRequest {

    /**
        卖家系统中的酒店ID。
     **/
    private $outHid;

    /**
        用于标示该酒店发布的渠道信息
     **/
    private $vendor;

    /**
        是否需要房价基本信息（false为不需要），默认为需要
     **/
    private $isNeedRatePlan;


    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getIsNeedRatePlan() : bool{
        return $this->isNeedRatePlan;
    }

    public function setIsNeedRatePlan(bool $isNeedRatePlan){
        $this->isNeedRatePlan = $isNeedRatePlan;
    }


    public function getApiName() : string {
        return "taobao.xhotel.baseinfo.room.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->isNeedRatePlan)) {
            $requestParam["is_need_rate_plan"] = TopUtil::convertBasic($this->isNeedRatePlan);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelMultiplerateDeleteRequest {

    /**
        渠道，和推送房价所使用的渠道保持一致
     **/
    private $vendor;

    /**
        商家价格政策编码
     **/
    private $rateplanCode;

    /**
        商家房型编码
     **/
    private $outRid;

    /**
        连住天数
     **/
    private $occupancy;

    /**
        入住人数
     **/
    private $lengthofstay;


    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getRateplanCode() : string{
        return $this->rateplanCode;
    }

    public function setRateplanCode(string $rateplanCode){
        $this->rateplanCode = $rateplanCode;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getOccupancy() : int{
        return $this->occupancy;
    }

    public function setOccupancy(int $occupancy){
        $this->occupancy = $occupancy;
    }

    public function getLengthofstay() : int{
        return $this->lengthofstay;
    }

    public function setLengthofstay(int $lengthofstay){
        $this->lengthofstay = $lengthofstay;
    }


    public function getApiName() : string {
        return "taobao.xhotel.multiplerate.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->occupancy)) {
            $requestParam["occupancy"] = TopUtil::convertBasic($this->occupancy);
        }

        if (!TopUtil::checkEmpty($this->lengthofstay)) {
            $requestParam["lengthofstay"] = TopUtil::convertBasic($this->lengthofstay);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateDeleteRequest {

    /**
        rateId
     **/
    private $rateId;

    /**
        ratepland标识
     **/
    private $rpId;

    /**
        系统商，一般不用填写，使用须申请
     **/
    private $vendor;

    /**
        商家价格政策编码
     **/
    private $rateplanCode;

    /**
        商家房型ID
     **/
    private $outRid;

    /**
        房型id
     **/
    private $gid;


    public function getRateId() : int{
        return $this->rateId;
    }

    public function setRateId(int $rateId){
        $this->rateId = $rateId;
    }

    public function getRpId() : int{
        return $this->rpId;
    }

    public function setRpId(int $rpId){
        $this->rpId = $rpId;
    }

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

    public function getGid() : string{
        return $this->gid;
    }

    public function setGid(string $gid){
        $this->gid = $gid;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rateId)) {
            $requestParam["rate_id"] = TopUtil::convertBasic($this->rateId);
        }

        if (!TopUtil::checkEmpty($this->rpId)) {
            $requestParam["rp_id"] = TopUtil::convertBasic($this->rpId);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateGetRequest {

    /**
        gid酒店商品id
     **/
    private $gid;

    /**
        酒店RPID
     **/
    private $rpid;

    /**
        用于标示该宝贝的售卖渠道信息，允许同一个卖家酒店房型在淘宝系统发布多个售卖渠道的宝贝的价格。
     **/
    private $vendor;

    /**
        卖家自己系统的Code，简称RateCode
     **/
    private $rateplanCode;

    /**
        卖家房型ID, 这是卖家自己系统中的房型ID 注意：需要按照规则组合
     **/
    private $outRid;

    /**
        RateID
     **/
    private $rateId;


    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
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

    public function getRateId() : int{
        return $this->rateId;
    }

    public function setRateId(int $rateId){
        $this->rateId = $rateId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
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

        if (!TopUtil::checkEmpty($this->rateId)) {
            $requestParam["rate_id"] = TopUtil::convertBasic($this->rateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


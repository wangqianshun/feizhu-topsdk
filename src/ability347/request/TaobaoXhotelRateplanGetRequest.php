<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateplanGetRequest {

    /**
        废弃，使用rateplan_code
     **/
    private $rpid;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        卖家自己系统的Code，简称RateCode
     **/
    private $rateplanCode;


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


    public function getApiName() : string {
        return "taobao.xhotel.rateplan.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


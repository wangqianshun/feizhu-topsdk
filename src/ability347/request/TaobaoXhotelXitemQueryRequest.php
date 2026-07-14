<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelXitemQueryRequest {

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        商家酒店ID，指明该 x 元素属于哪家酒店
     **/
    private $outHid;

    /**
        商家房型ID，指明该 x 元素关联哪个房型
     **/
    private $outRid;

    /**
        商家 RP ID，指明该 x 元素关联了哪个 RP
     **/
    private $ratePlanCode;

    /**
        需要查询的 x_code 编码
     **/
    private $outXCodes;


    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getRatePlanCode() : string{
        return $this->ratePlanCode;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->ratePlanCode = $ratePlanCode;
    }

    public function getOutXCodes() : array{
        return $this->outXCodes;
    }

    public function setOutXCodes(array $outXCodes){
        $this->outXCodes = $outXCodes;
    }


    public function getApiName() : string {
        return "taobao.xhotel.xitem.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->ratePlanCode)) {
            $requestParam["rate_plan_code"] = TopUtil::convertBasic($this->ratePlanCode);
        }

        if (!TopUtil::checkEmpty($this->outXCodes)) {
            $requestParam["out_x_codes"] = TopUtil::convertBasicList($this->outXCodes);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


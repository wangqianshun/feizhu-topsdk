<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelXitemDeleteRequest {

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        商家酒店ID，指明该 x 元素属于哪家酒店
     **/
    private $outHid;

    /**
        需要删除的 x_code 编码
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

    public function getOutXCodes() : array{
        return $this->outXCodes;
    }

    public function setOutXCodes(array $outXCodes){
        $this->outXCodes = $outXCodes;
    }


    public function getApiName() : string {
        return "taobao.xhotel.xitem.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
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


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelGetRequest {

    /**
        废弃，请使用outer_id
     **/
    private $hid;

    /**
        卖家系统中的酒店ID。
     **/
    private $outerId;

    /**
        系统商，一般不用填写，使用须申请
     **/
    private $vendor;

    /**
        是否需要在售状态(默认false不需要)
     **/
    private $needSaleInfo;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getNeedSaleInfo() : bool{
        return $this->needSaleInfo;
    }

    public function setNeedSaleInfo(bool $needSaleInfo){
        $this->needSaleInfo = $needSaleInfo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->needSaleInfo)) {
            $requestParam["need_sale_info"] = TopUtil::convertBasic($this->needSaleInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


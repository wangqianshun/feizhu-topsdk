<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelItemSelectionSellerStatSummaryRequest {

    /**
        日期  默认为昨天
     **/
    private $date;

    /**
        hid  默认为all
     **/
    private $hid;

    /**
        vendor 默认为all
     **/
    private $vendor;

    /**
        supplier 默认为all
     **/
    private $supplier;

    /**
        外部酒店编码
     **/
    private $outHid;


    public function getDate() : string{
        return $this->date;
    }

    public function setDate(string $date){
        $this->date = $date;
    }

    public function getHid() : string{
        return $this->hid;
    }

    public function setHid(string $hid){
        $this->hid = $hid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }


    public function getApiName() : string {
        return "taobao.xhotel.item.selection.seller.stat.summary";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->date)) {
            $requestParam["date"] = TopUtil::convertBasic($this->date);
        }

        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->supplier)) {
            $requestParam["supplier"] = TopUtil::convertBasic($this->supplier);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


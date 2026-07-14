<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpriceGetRequest {

    /**
        开始日期
     **/
    private $startDate;

    /**
        要获取价格的房源ID
     **/
    private $shids;

    /**
        结束日期
     **/
    private $endDate;


    public function getStartDate() : string{
        return $this->startDate;
    }

    public function setStartDate(string $startDate){
        $this->startDate = $startDate;
    }

    public function getShids() : string{
        return $this->shids;
    }

    public function setShids(string $shids){
        $this->shids = $shids;
    }

    public function getEndDate() : string{
        return $this->endDate;
    }

    public function setEndDate(string $endDate){
        $this->endDate = $endDate;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbprice.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->startDate)) {
            $requestParam["start_date"] = TopUtil::convertBasic($this->startDate);
        }

        if (!TopUtil::checkEmpty($this->shids)) {
            $requestParam["shids"] = TopUtil::convertBasic($this->shids);
        }

        if (!TopUtil::checkEmpty($this->endDate)) {
            $requestParam["end_date"] = TopUtil::convertBasic($this->endDate);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


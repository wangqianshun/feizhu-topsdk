<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsSellerOrdersGetRequest {

    /**
        核销日期
     **/
    private $writeOffDate;

    /**
        分页索引
     **/
    private $pageIndex;

    /**
        收货码
     **/
    private $receiveCode;

    /**
        分页大小
     **/
    private $pageSize;

    /**
        淘系交易id
     **/
    private $tid;

    /**
        1代表未核销，2代表已核销
     **/
    private $writeOffStatus;


    public function getWriteOffDate() : string{
        return $this->writeOffDate;
    }

    public function setWriteOffDate(string $writeOffDate){
        $this->writeOffDate = $writeOffDate;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getReceiveCode() : string{
        return $this->receiveCode;
    }

    public function setReceiveCode(string $receiveCode){
        $this->receiveCode = $receiveCode;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getWriteOffStatus() : string{
        return $this->writeOffStatus;
    }

    public function setWriteOffStatus(string $writeOffStatus){
        $this->writeOffStatus = $writeOffStatus;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.seller.orders.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->writeOffDate)) {
            $requestParam["write_off_date"] = TopUtil::convertBasic($this->writeOffDate);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->receiveCode)) {
            $requestParam["receive_code"] = TopUtil::convertBasic($this->receiveCode);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->writeOffStatus)) {
            $requestParam["write_off_status"] = TopUtil::convertBasic($this->writeOffStatus);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsInstantTraceSearchRequest {

    /**
        运单号
     **/
    private $mailNo;

    /**
        是否拆单
     **/
    private $isSplit;

    /**
        子订单列表
     **/
    private $subTid;

    /**
        交易单号
     **/
    private $tid;


    public function getMailNo() : string{
        return $this->mailNo;
    }

    public function setMailNo(string $mailNo){
        $this->mailNo = $mailNo;
    }

    public function getIsSplit() : int{
        return $this->isSplit;
    }

    public function setIsSplit(int $isSplit){
        $this->isSplit = $isSplit;
    }

    public function getSubTid() : string{
        return $this->subTid;
    }

    public function setSubTid(string $subTid){
        $this->subTid = $subTid;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }


    public function getApiName() : string {
        return "taobao.logistics.instant.trace.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->mailNo)) {
            $requestParam["mail_no"] = TopUtil::convertBasic($this->mailNo);
        }

        if (!TopUtil::checkEmpty($this->isSplit)) {
            $requestParam["is_split"] = TopUtil::convertBasic($this->isSplit);
        }

        if (!TopUtil::checkEmpty($this->subTid)) {
            $requestParam["sub_tid"] = TopUtil::convertBasic($this->subTid);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


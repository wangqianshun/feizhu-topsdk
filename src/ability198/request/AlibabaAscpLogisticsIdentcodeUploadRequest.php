<?php
namespace FeiZhu\TopSdk\Ability198\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsIdentcodeUploadRequest {

    /**
        订单id
     **/
    private $orderId;

    /**
        sn码列表，多个用逗号分隔
     **/
    private $codeList;

    /**
        1代表交易订单；2代表渠道订单，默认不传代表交易订单
     **/
    private $orderType;


    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getCodeList() : array{
        return $this->codeList;
    }

    public function setCodeList(array $codeList){
        $this->codeList = $codeList;
    }

    public function getOrderType() : int{
        return $this->orderType;
    }

    public function setOrderType(int $orderType){
        $this->orderType = $orderType;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.identcode.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->codeList)) {
            $requestParam["code_list"] = TopUtil::convertBasicList($this->codeList);
        }

        if (!TopUtil::checkEmpty($this->orderType)) {
            $requestParam["order_type"] = TopUtil::convertBasic($this->orderType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsSellerWriteoffRequest {

    /**
        所要核销的核销物流单ID，在alibaba.ascp.logistics.seller.orders.get中获取。
     **/
    private $lpOrderId;

    /**
        核销码
     **/
    private $receiveCode;


    public function getLpOrderId() : int{
        return $this->lpOrderId;
    }

    public function setLpOrderId(int $lpOrderId){
        $this->lpOrderId = $lpOrderId;
    }

    public function getReceiveCode() : string{
        return $this->receiveCode;
    }

    public function setReceiveCode(string $receiveCode){
        $this->receiveCode = $receiveCode;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.seller.writeoff";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->lpOrderId)) {
            $requestParam["lp_order_id"] = TopUtil::convertBasic($this->lpOrderId);
        }

        if (!TopUtil::checkEmpty($this->receiveCode)) {
            $requestParam["receive_code"] = TopUtil::convertBasic($this->receiveCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


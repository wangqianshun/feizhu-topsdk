<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseOrderQueryOrderQueryRequest;

class AlibabaFliggyLeaseOrderQueryRequest {

    /**
        订单信息查询请求
     **/
    private $orderQueryRequest;


    public function getOrderQueryRequest() : AlibabaFliggyLeaseOrderQueryOrderQueryRequest{
        return $this->orderQueryRequest;
    }

    public function setOrderQueryRequest(AlibabaFliggyLeaseOrderQueryOrderQueryRequest $orderQueryRequest){
        $this->orderQueryRequest = $orderQueryRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.order.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderQueryRequest)) {
            $requestParam["order_query_request"] = TopUtil::convertStruct($this->orderQueryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


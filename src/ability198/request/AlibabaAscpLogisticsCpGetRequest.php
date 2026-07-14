<?php
namespace FeiZhu\TopSdk\Ability198\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability198\Domain\AlibabaAscpLogisticsCpGetLogisticsResourceRequest;

class AlibabaAscpLogisticsCpGetRequest {

    /**
        请求体
     **/
    private $logisticsResourceRequest;


    public function getLogisticsResourceRequest() : AlibabaAscpLogisticsCpGetLogisticsResourceRequest{
        return $this->logisticsResourceRequest;
    }

    public function setLogisticsResourceRequest(AlibabaAscpLogisticsCpGetLogisticsResourceRequest $logisticsResourceRequest){
        $this->logisticsResourceRequest = $logisticsResourceRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.cp.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->logisticsResourceRequest)) {
            $requestParam["logistics_resource_request"] = TopUtil::convertStruct($this->logisticsResourceRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


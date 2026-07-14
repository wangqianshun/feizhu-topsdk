<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantShippinginfoUploadUploadShippingInfoRequest;

class AlibabaFliggyLeaseMerchantShippinginfoUploadRequest {

    /**
        发货信息
     **/
    private $incompleteShipmentRequest;


    public function getIncompleteShipmentRequest() : AlibabaFliggyLeaseMerchantShippinginfoUploadUploadShippingInfoRequest{
        return $this->incompleteShipmentRequest;
    }

    public function setIncompleteShipmentRequest(AlibabaFliggyLeaseMerchantShippinginfoUploadUploadShippingInfoRequest $incompleteShipmentRequest){
        $this->incompleteShipmentRequest = $incompleteShipmentRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.shippinginfo.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->incompleteShipmentRequest)) {
            $requestParam["incomplete_shipment_request"] = TopUtil::convertStruct($this->incompleteShipmentRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


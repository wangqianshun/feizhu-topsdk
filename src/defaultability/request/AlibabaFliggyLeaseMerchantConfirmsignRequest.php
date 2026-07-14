<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantConfirmsignConfirmSignRequest;

class AlibabaFliggyLeaseMerchantConfirmsignRequest {

    /**
        签收请求
     **/
    private $confirmSignRequest;


    public function getConfirmSignRequest() : AlibabaFliggyLeaseMerchantConfirmsignConfirmSignRequest{
        return $this->confirmSignRequest;
    }

    public function setConfirmSignRequest(AlibabaFliggyLeaseMerchantConfirmsignConfirmSignRequest $confirmSignRequest){
        $this->confirmSignRequest = $confirmSignRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.confirmsign";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->confirmSignRequest)) {
            $requestParam["confirm_sign_request"] = TopUtil::convertStruct($this->confirmSignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


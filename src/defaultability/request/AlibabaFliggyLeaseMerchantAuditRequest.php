<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantAuditAuditRequest;

class AlibabaFliggyLeaseMerchantAuditRequest {

    /**
        审核请求
     **/
    private $auditCallbackRequest;


    public function getAuditCallbackRequest() : AlibabaFliggyLeaseMerchantAuditAuditRequest{
        return $this->auditCallbackRequest;
    }

    public function setAuditCallbackRequest(AlibabaFliggyLeaseMerchantAuditAuditRequest $auditCallbackRequest){
        $this->auditCallbackRequest = $auditCallbackRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.audit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->auditCallbackRequest)) {
            $requestParam["audit_callback_request"] = TopUtil::convertStruct($this->auditCallbackRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


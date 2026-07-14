<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantShippinginfoUploadAgreementInfoDTO {

    /**
        协议类型，可选值：LEASE_SERVICE-租赁服务协议，PRIVACY-隐私协议，PERSONAL_INFO_AUTH-个人信息授权书，CREDIT_INFO_AUTH-征信信息授权协议，DIGITAL_CERT_AUTH-数字证书授权使用协议，ESIGN_ENTRUST-电子签章委托协议书，NON_STUDENT_COMMITMENT-非学生身份及合规租赁承诺书，GUARANTEE_ENTRUST-委托担保合同
     **/
    public $agreement_type;

    /**
        协议链接
     **/
    public $agreement_url;


    public function getAgreementType() : string{
        return $this->agreement_type;
    }

    public function setAgreementType(string $agreementType){
        $this->agreement_type = $agreementType;
    }

    public function getAgreementUrl() : string{
        return $this->agreement_url;
    }

    public function setAgreementUrl(string $agreementUrl){
        $this->agreement_url = $agreementUrl;
    }


}


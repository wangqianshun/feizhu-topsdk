<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantShippinginfoUploadUploadShippingInfoRequest {

    /**
        商家地址
     **/
    public $seller_address_info;

    /**
        订单号
     **/
    public $order_id;

    /**
        协议信息
     **/
    public $agreement_info;

    /**
        凭证信息，最多8张
     **/
    public $credential_info;


    public function getSellerAddressInfo() : AlibabaFliggyLeaseMerchantShippinginfoUploadReceiverAddressInfoDTO{
        return $this->seller_address_info;
    }

    public function setSellerAddressInfo(AlibabaFliggyLeaseMerchantShippinginfoUploadReceiverAddressInfoDTO $sellerAddressInfo){
        $this->seller_address_info = $sellerAddressInfo;
    }

    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getAgreementInfo() : array{
        return $this->agreement_info;
    }

    public function setAgreementInfo(array $agreementInfo){
        $this->agreement_info = $agreementInfo;
    }

    public function getCredentialInfo() : array{
        return $this->credential_info;
    }

    public function setCredentialInfo(array $credentialInfo){
        $this->credential_info = $credentialInfo;
    }


}


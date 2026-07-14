<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantConfirmsignConfirmSignRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        凭证信息，最多8张
     **/
    public $credential_info;

    /**
        签收类型，可选值：SHIP_SIGN-发货签收，RETURN_SIGN-归还签收
     **/
    public $action_type;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getCredentialInfo() : array{
        return $this->credential_info;
    }

    public function setCredentialInfo(array $credentialInfo){
        $this->credential_info = $credentialInfo;
    }

    public function getActionType() : string{
        return $this->action_type;
    }

    public function setActionType(string $actionType){
        $this->action_type = $actionType;
    }


}


<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantQualityFeedbackFeedbackQualityRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        质检结果，可选值：通过-true，不通过-false
     **/
    public $is_pass;

    /**
        凭证信息，最多8张
     **/
    public $credential_info;

    /**
        定损金额;单位分;定损金额不得超过商品价值;如果isPass是false定损金额必须大于0
     **/
    public $damage_fee;

    /**
        定损原因;最多100字符
     **/
    public $reason;

    /**
        逾期租金;单位分;无法归还必须填入0;不可高于默认计算的逾期金额
     **/
    public $overdue_rent;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getIsPass() : bool{
        return $this->is_pass;
    }

    public function setIsPass(bool $isPass){
        $this->is_pass = $isPass;
    }

    public function getCredentialInfo() : array{
        return $this->credential_info;
    }

    public function setCredentialInfo(array $credentialInfo){
        $this->credential_info = $credentialInfo;
    }

    public function getDamageFee() : int{
        return $this->damage_fee;
    }

    public function setDamageFee(int $damageFee){
        $this->damage_fee = $damageFee;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getOverdueRent() : int{
        return $this->overdue_rent;
    }

    public function setOverdueRent(int $overdueRent){
        $this->overdue_rent = $overdueRent;
    }


}


<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantAuditAuditRequest {

    /**
        押金金额
     **/
    public $deposit_amount;

    /**
        审核原因
     **/
    public $reason;

    /**
        订单id
     **/
    public $order_id;

    /**
        审核结果，可选值：true-通过，false-不通过
     **/
    public $is_pass;


    public function getDepositAmount() : int{
        return $this->deposit_amount;
    }

    public function setDepositAmount(int $depositAmount){
        $this->deposit_amount = $depositAmount;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

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


}


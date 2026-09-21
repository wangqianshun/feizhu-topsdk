<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryPaidDetailDTO {

    /**
        费用类型：RENT 租金/PENALTY 违约金
     **/
    public $fee_type;

    /**
        支付方式：AUTO_DEDUCT 支付宝代扣/ACTIVE_PAY 主动支付/DEPOSIT_OFFSET 押金抵扣
     **/
    public $pay_method;

    /**
        支付时间 yyyy-MM-dd HH:mm:ss
     **/
    public $pay_time;

    /**
        支付金额（分）
     **/
    public $amount;

    /**
        交易流水号（押金抵扣=关联押金流水号）
     **/
    public $transaction_id;


    public function getFeeType() : string{
        return $this->fee_type;
    }

    public function setFeeType(string $feeType){
        $this->fee_type = $feeType;
    }

    public function getPayMethod() : string{
        return $this->pay_method;
    }

    public function setPayMethod(string $payMethod){
        $this->pay_method = $payMethod;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getTransactionId() : string{
        return $this->transaction_id;
    }

    public function setTransactionId(string $transactionId){
        $this->transaction_id = $transactionId;
    }


}


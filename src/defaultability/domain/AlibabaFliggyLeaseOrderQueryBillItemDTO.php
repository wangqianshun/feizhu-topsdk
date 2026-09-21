<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryBillItemDTO {

    /**
        账期期数
     **/
    public $period;

    /**
        还款日 yyyy-MM-dd
     **/
    public $repay_date;

    /**
        账期状态：1-未到还款日/2-已到还款日未付/3-部分支付/4-逾期/5-已还清
     **/
    public $bill_status;

    /**
        租金（分）
     **/
    public $rent;

    /**
        已付租金（分，含押金抵扣）
     **/
    public $paid_rent;

    /**
        租金支付状态：1-未付/2-已付/3-部分支付（部分仅押金抵扣产生）
     **/
    public $rent_pay_status;

    /**
        逾期天数
     **/
    public $overdue_days;

    /**
        逾期金额（租金未付+有效违约金未付，分）
     **/
    public $un_paid_rent;

    /**
        违约金（系统累计=违约金单 disburse_fee，分）
     **/
    public $penalty;

    /**
        修改后违约金（null=未修改/已过期，分）
     **/
    public $modified_penalty;

    /**
        已付违约金（分，含押金抵扣）
     **/
    public $paid_penalty;

    /**
        违约金累计状态：1-累计中/2-挂起/3-定稿
     **/
    public $penalty_calc_status;

    /**
        已付明细列表（仅成功记录）
     **/
    public $paid_detail_list;

    /**
        2026-08-13
     **/
    public $rent_start_time;

    /**
        2027-08-12
     **/
    public $rent_end_time;


    public function getPeriod() : int{
        return $this->period;
    }

    public function setPeriod(int $period){
        $this->period = $period;
    }

    public function getRepayDate() : string{
        return $this->repay_date;
    }

    public function setRepayDate(string $repayDate){
        $this->repay_date = $repayDate;
    }

    public function getBillStatus() : int{
        return $this->bill_status;
    }

    public function setBillStatus(int $billStatus){
        $this->bill_status = $billStatus;
    }

    public function getRent() : int{
        return $this->rent;
    }

    public function setRent(int $rent){
        $this->rent = $rent;
    }

    public function getPaidRent() : int{
        return $this->paid_rent;
    }

    public function setPaidRent(int $paidRent){
        $this->paid_rent = $paidRent;
    }

    public function getRentPayStatus() : int{
        return $this->rent_pay_status;
    }

    public function setRentPayStatus(int $rentPayStatus){
        $this->rent_pay_status = $rentPayStatus;
    }

    public function getOverdueDays() : int{
        return $this->overdue_days;
    }

    public function setOverdueDays(int $overdueDays){
        $this->overdue_days = $overdueDays;
    }

    public function getUnPaidRent() : int{
        return $this->un_paid_rent;
    }

    public function setUnPaidRent(int $unPaidRent){
        $this->un_paid_rent = $unPaidRent;
    }

    public function getPenalty() : int{
        return $this->penalty;
    }

    public function setPenalty(int $penalty){
        $this->penalty = $penalty;
    }

    public function getModifiedPenalty() : int{
        return $this->modified_penalty;
    }

    public function setModifiedPenalty(int $modifiedPenalty){
        $this->modified_penalty = $modifiedPenalty;
    }

    public function getPaidPenalty() : int{
        return $this->paid_penalty;
    }

    public function setPaidPenalty(int $paidPenalty){
        $this->paid_penalty = $paidPenalty;
    }

    public function getPenaltyCalcStatus() : int{
        return $this->penalty_calc_status;
    }

    public function setPenaltyCalcStatus(int $penaltyCalcStatus){
        $this->penalty_calc_status = $penaltyCalcStatus;
    }

    public function getPaidDetailList() : array{
        return $this->paid_detail_list;
    }

    public function setPaidDetailList(array $paidDetailList){
        $this->paid_detail_list = $paidDetailList;
    }

    public function getRentStartTime() : string{
        return $this->rent_start_time;
    }

    public function setRentStartTime(string $rentStartTime){
        $this->rent_start_time = $rentStartTime;
    }

    public function getRentEndTime() : string{
        return $this->rent_end_time;
    }

    public function setRentEndTime(string $rentEndTime){
        $this->rent_end_time = $rentEndTime;
    }


}


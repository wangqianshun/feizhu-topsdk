<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoLogisticsPartnersGetPartnerDetail {

    /**
        物流公司支付宝账号
     **/
    public $account_no;

    /**
        物流公司代码
     **/
    public $company_code;

    /**
        物流公司id
     **/
    public $company_id;

    /**
        物流公司全名
     **/
    public $full_name;

    /**
        运单号验证正则表达式
     **/
    public $reg_mail_no;

    /**
        旺旺id
     **/
    public $wangwang_id;

    /**
        物流公司简称
     **/
    public $company_name;


    public function getAccountNo() : string{
        return $this->account_no;
    }

    public function setAccountNo(string $accountNo){
        $this->account_no = $accountNo;
    }

    public function getCompanyCode() : string{
        return $this->company_code;
    }

    public function setCompanyCode(string $companyCode){
        $this->company_code = $companyCode;
    }

    public function getCompanyId() : int{
        return $this->company_id;
    }

    public function setCompanyId(int $companyId){
        $this->company_id = $companyId;
    }

    public function getFullName() : string{
        return $this->full_name;
    }

    public function setFullName(string $fullName){
        $this->full_name = $fullName;
    }

    public function getRegMailNo() : string{
        return $this->reg_mail_no;
    }

    public function setRegMailNo(string $regMailNo){
        $this->reg_mail_no = $regMailNo;
    }

    public function getWangwangId() : string{
        return $this->wangwang_id;
    }

    public function setWangwangId(string $wangwangId){
        $this->wangwang_id = $wangwangId;
    }

    public function getCompanyName() : string{
        return $this->company_name;
    }

    public function setCompanyName(string $companyName){
        $this->company_name = $companyName;
    }


}


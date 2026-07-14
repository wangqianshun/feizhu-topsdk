<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoLogisticsCompaniesGetLogisticsCompany {

    /**
        物流公司标识
     **/
    public $id;

    /**
        物流公司代码
     **/
    public $code;

    /**
        物流公司简称
     **/
    public $name;

    /**
        运单号验证正则表达式
     **/
    public $reg_mail_no;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getRegMailNo() : string{
        return $this->reg_mail_no;
    }

    public function setRegMailNo(string $regMailNo){
        $this->reg_mail_no = $regMailNo;
    }


}


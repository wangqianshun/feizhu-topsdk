<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsCpGetLogisticsResourceDTO {

    /**
        运单号校验正则表达式
     **/
    public $reg_mail_no;

    /**
        快递资源编码
     **/
    public $resource_code;

    /**
        快递资源名称
     **/
    public $resource_name;

    /**
        快递公司id
     **/
    public $company_id;


    public function getRegMailNo() : string{
        return $this->reg_mail_no;
    }

    public function setRegMailNo(string $regMailNo){
        $this->reg_mail_no = $regMailNo;
    }

    public function getResourceCode() : string{
        return $this->resource_code;
    }

    public function setResourceCode(string $resourceCode){
        $this->resource_code = $resourceCode;
    }

    public function getResourceName() : string{
        return $this->resource_name;
    }

    public function setResourceName(string $resourceName){
        $this->resource_name = $resourceName;
    }

    public function getCompanyId() : int{
        return $this->company_id;
    }

    public function setCompanyId(int $companyId){
        $this->company_id = $companyId;
    }


}


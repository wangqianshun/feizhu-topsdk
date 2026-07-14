<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsConsignResendTopConsignPkgRequest {

    /**
        物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
     **/
    public $company_code;

    /**
        运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
     **/
    public $out_sid;


    public function getCompanyCode() : string{
        return $this->company_code;
    }

    public function setCompanyCode(string $companyCode){
        $this->company_code = $companyCode;
    }

    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }


}


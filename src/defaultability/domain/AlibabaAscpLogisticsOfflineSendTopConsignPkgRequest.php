<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsOfflineSendTopConsignPkgRequest {

    /**
        运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
     **/
    public $out_sid;

    /**
        物流公司代码.如"POST"就代表中国邮政,"ZJS"就代表宅急送.调用 taobao.logistics.companies.get 获取
     **/
    public $company_code;

    /**
        包裹中商品信息
     **/
    public $goods;

    /**
        快递子单运单号
     **/
    public $sub_out_sid;


    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }

    public function getCompanyCode() : string{
        return $this->company_code;
    }

    public function setCompanyCode(string $companyCode){
        $this->company_code = $companyCode;
    }

    public function getGoods() : array{
        return $this->goods;
    }

    public function setGoods(array $goods){
        $this->goods = $goods;
    }

    public function getSubOutSid() : string{
        return $this->sub_out_sid;
    }

    public function setSubOutSid(string $subOutSid){
        $this->sub_out_sid = $subOutSid;
    }


}


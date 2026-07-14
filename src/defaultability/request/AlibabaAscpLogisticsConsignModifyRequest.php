<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsConsignModifyRequest {

    /**
        订单id
     **/
    private $tid;

    /**
        原物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
     **/
    private $oldCompanyCode;

    /**
        原运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
     **/
    private $oldOutSid;

    /**
        新物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
     **/
    private $newCompanyCode;

    /**
        新运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
     **/
    private $newOutSid;

    /**
        原包裹中的商品信息
     **/
    private $goods;

    /**
        feature参数格式，KV之间用“=”分隔，多个key之间用”;”分隔 ，范例: instantMobilePhoneNumber=12345678910表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"。
     **/
    private $feature;


    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getOldCompanyCode() : string{
        return $this->oldCompanyCode;
    }

    public function setOldCompanyCode(string $oldCompanyCode){
        $this->oldCompanyCode = $oldCompanyCode;
    }

    public function getOldOutSid() : string{
        return $this->oldOutSid;
    }

    public function setOldOutSid(string $oldOutSid){
        $this->oldOutSid = $oldOutSid;
    }

    public function getNewCompanyCode() : string{
        return $this->newCompanyCode;
    }

    public function setNewCompanyCode(string $newCompanyCode){
        $this->newCompanyCode = $newCompanyCode;
    }

    public function getNewOutSid() : string{
        return $this->newOutSid;
    }

    public function setNewOutSid(string $newOutSid){
        $this->newOutSid = $newOutSid;
    }

    public function getGoods() : array{
        return $this->goods;
    }

    public function setGoods(array $goods){
        $this->goods = $goods;
    }

    public function getFeature() : string{
        return $this->feature;
    }

    public function setFeature(string $feature){
        $this->feature = $feature;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.consign.modify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->oldCompanyCode)) {
            $requestParam["old_company_code"] = TopUtil::convertBasic($this->oldCompanyCode);
        }

        if (!TopUtil::checkEmpty($this->oldOutSid)) {
            $requestParam["old_out_sid"] = TopUtil::convertBasic($this->oldOutSid);
        }

        if (!TopUtil::checkEmpty($this->newCompanyCode)) {
            $requestParam["new_company_code"] = TopUtil::convertBasic($this->newCompanyCode);
        }

        if (!TopUtil::checkEmpty($this->newOutSid)) {
            $requestParam["new_out_sid"] = TopUtil::convertBasic($this->newOutSid);
        }

        if (!TopUtil::checkEmpty($this->goods)) {
            $requestParam["goods"] = TopUtil::convertStructList($this->goods);
        }

        if (!TopUtil::checkEmpty($this->feature)) {
            $requestParam["feature"] = TopUtil::convertBasic($this->feature);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


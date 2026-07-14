<?php
namespace FeiZhu\TopSdk\Ability648\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsCompaniesGetRequest {

    /**
        需返回的字段列表。可选值:LogisticCompany 结构中的所有字段;多个字段间用","逗号隔开.
如:id,code,name,reg_mail_no
<br><font color='red'>说明：</font>
<br>id：物流公司ID
<br>code：物流公司code
<br>name：物流公司名称
<br>reg_mail_no：物流公司对应的运单规则
     **/
    private $fields;

    /**
        是否查询推荐物流公司.可选值:true,false.如果不提供此参数,将会返回所有支持电话联系的物流公司.
     **/
    private $isRecommended;

    /**
        推荐物流公司的下单方式.可选值:offline(电话联系/自己联系),online(在线下单),all(即电话联系又在线下单). 此参数仅仅用于is_recommended 为ture时。就是说对于推荐物流公司才可用.如果不选择此参数将会返回推荐物流中支持电话联系的物流公司.
     **/
    private $orderMode;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getIsRecommended() : bool{
        return $this->isRecommended;
    }

    public function setIsRecommended(bool $isRecommended){
        $this->isRecommended = $isRecommended;
    }

    public function getOrderMode() : string{
        return $this->orderMode;
    }

    public function setOrderMode(string $orderMode){
        $this->orderMode = $orderMode;
    }


    public function getApiName() : string {
        return "taobao.logistics.companies.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->isRecommended)) {
            $requestParam["is_recommended"] = TopUtil::convertBasic($this->isRecommended);
        }

        if (!TopUtil::checkEmpty($this->orderMode)) {
            $requestParam["order_mode"] = TopUtil::convertBasic($this->orderMode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


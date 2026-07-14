<?php
namespace FeiZhu\TopSdk\Ability648\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsPartnersGetRequest {

    /**
        物流公司揽货地地区码（必须是区、县一级的）.参考:http://www.stats.gov.cn/tjsj/tjbz/xzqhdm/201401/t20140116_501070.html或者调用 taobao.areas.get 获取
     **/
    private $sourceId;

    /**
        物流公司派送地地区码（必须是区、县一级的）.参考:http://www.stats.gov.cn/tjsj/tjbz/xzqhdm/201401/t20140116_501070.html或者调用 taobao.areas.get 获取
     **/
    private $targetId;

    /**
        服务类型，根据此参数可查出提供相应服务类型的物流公司信息(物流公司状态正常)，可选值：cod(货到付款)、online(在线下单)、 offline(自己联系)、limit(限时物流)。然后再根据source_id,target_id,goods_value这三个条件来过滤物流公司. 目前输入自己联系服务类型将会返回空，因为自己联系并没有具体的服务信息，所以不会有记录。
     **/
    private $serviceType;

    /**
        货物价格.只有当选择货到付款此参数才会有效
     **/
    private $goodsValue;

    /**
        是否需要揽收资费信息，默认false。在此值为false时，返回内容中将无carriage。在未设置source_id或target_id的情况下，无法查询揽收资费信息。自己联系无揽收资费记录。
     **/
    private $isNeedCarriage;


    public function getSourceId() : string{
        return $this->sourceId;
    }

    public function setSourceId(string $sourceId){
        $this->sourceId = $sourceId;
    }

    public function getTargetId() : string{
        return $this->targetId;
    }

    public function setTargetId(string $targetId){
        $this->targetId = $targetId;
    }

    public function getServiceType() : string{
        return $this->serviceType;
    }

    public function setServiceType(string $serviceType){
        $this->serviceType = $serviceType;
    }

    public function getGoodsValue() : string{
        return $this->goodsValue;
    }

    public function setGoodsValue(string $goodsValue){
        $this->goodsValue = $goodsValue;
    }

    public function getIsNeedCarriage() : bool{
        return $this->isNeedCarriage;
    }

    public function setIsNeedCarriage(bool $isNeedCarriage){
        $this->isNeedCarriage = $isNeedCarriage;
    }


    public function getApiName() : string {
        return "taobao.logistics.partners.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->sourceId)) {
            $requestParam["source_id"] = TopUtil::convertBasic($this->sourceId);
        }

        if (!TopUtil::checkEmpty($this->targetId)) {
            $requestParam["target_id"] = TopUtil::convertBasic($this->targetId);
        }

        if (!TopUtil::checkEmpty($this->serviceType)) {
            $requestParam["service_type"] = TopUtil::convertBasic($this->serviceType);
        }

        if (!TopUtil::checkEmpty($this->goodsValue)) {
            $requestParam["goods_value"] = TopUtil::convertBasic($this->goodsValue);
        }

        if (!TopUtil::checkEmpty($this->isNeedCarriage)) {
            $requestParam["is_need_carriage"] = TopUtil::convertBasic($this->isNeedCarriage);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


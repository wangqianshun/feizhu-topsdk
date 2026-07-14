<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsOfflineSendRequest {

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
     **/
    private $senderId;

    /**
        feature参数格式 范例: identCode=tid1:识别码1,识别码2|tid2:识别码3;machineCode=tid3:3C机器号A,3C机器号B identCode为识别码的KEY,machineCode为3C的KEY,多个key之间用”;”分隔 “tid1:识别码1,识别码2|tid2:识别码3”为identCode对应的value。 "|"不同商品间的分隔符。 例1商品和2商品，之间就用"|"分开。 TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上) ":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。 "," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。 具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。 参数格式：identCode=TIDA:12345,67890。 TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。 当存在"|"时，就说明订单中存在多个商品，商品间用"|"分隔了开来。|"之后的内容含义同上。retailStoreId=12345，发货门店ID或仓信息。retailStoreType=STORE: 发货门店类别，STORE表示门店，WAREHOUSE表示电商仓。对于全渠道订单回传的商家，retailStoreId和retailStoreType字段为必填字段。instantMobilePhoneNumber表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"。
     **/
    private $feature;

    /**
        淘宝交易ID
     **/
    private $tid;

    /**
        发货的子订单id列表（consign_type = 1、2、3 时不再使用次字段，使用新字段goods代替需要发货的子订单信息）
     **/
    private $subTid;

    /**
        包裹信息
     **/
    private $consignPkgs;

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。 如果为空，取的卖家的默认退货地址
     **/
    private $cancelId;

    /**
        子订单发货状态
     **/
    private $consignStatus;

    /**
        发货类型 0：普通发货(老链路) 1: 普通发货（新链路，支持子订单部分发货、成分品发货以及ERP线下赠品发货） 2: 将发货状态从"部分发"修改为"全部发" 3：补发；默认为0
     **/
    private $consignType;


    public function getSenderId() : int{
        return $this->senderId;
    }

    public function setSenderId(int $senderId){
        $this->senderId = $senderId;
    }

    public function getFeature() : string{
        return $this->feature;
    }

    public function setFeature(string $feature){
        $this->feature = $feature;
    }

    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getSubTid() : string{
        return $this->subTid;
    }

    public function setSubTid(string $subTid){
        $this->subTid = $subTid;
    }

    public function getConsignPkgs() : array{
        return $this->consignPkgs;
    }

    public function setConsignPkgs(array $consignPkgs){
        $this->consignPkgs = $consignPkgs;
    }

    public function getCancelId() : int{
        return $this->cancelId;
    }

    public function setCancelId(int $cancelId){
        $this->cancelId = $cancelId;
    }

    public function getConsignStatus() : array{
        return $this->consignStatus;
    }

    public function setConsignStatus(array $consignStatus){
        $this->consignStatus = $consignStatus;
    }

    public function getConsignType() : int{
        return $this->consignType;
    }

    public function setConsignType(int $consignType){
        $this->consignType = $consignType;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.offline.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->senderId)) {
            $requestParam["sender_id"] = TopUtil::convertBasic($this->senderId);
        }

        if (!TopUtil::checkEmpty($this->feature)) {
            $requestParam["feature"] = TopUtil::convertBasic($this->feature);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->subTid)) {
            $requestParam["sub_tid"] = TopUtil::convertBasic($this->subTid);
        }

        if (!TopUtil::checkEmpty($this->consignPkgs)) {
            $requestParam["consign_pkgs"] = TopUtil::convertStructList($this->consignPkgs);
        }

        if (!TopUtil::checkEmpty($this->cancelId)) {
            $requestParam["cancel_id"] = TopUtil::convertBasic($this->cancelId);
        }

        if (!TopUtil::checkEmpty($this->consignStatus)) {
            $requestParam["consign_status"] = TopUtil::convertStructList($this->consignStatus);
        }

        if (!TopUtil::checkEmpty($this->consignType)) {
            $requestParam["consign_type"] = TopUtil::convertBasic($this->consignType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


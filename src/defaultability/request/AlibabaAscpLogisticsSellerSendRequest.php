<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsSellerSendRequest {

    /**
        派送员手机号（支持座机号和400）
     **/
    private $deliveryMobile;

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
     **/
    private $senderId;

    /**
        feature参数格式 范例: identCode=tid1:识别码1,识别码2|tid2:识别码3;machineCode=tid3:3C机器号A,3C机器号B identCode为识别码的KEY,machineCode为3C的KEY,多个key之间用”;”分隔 “tid1:识别码1,识别码2|tid2:识别码3”为identCode对应的value。 "|"不同商品间的分隔符。 例1商品和2商品，之间就用"|"分开。 TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上) ":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。 "," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。 具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。 参数格式：identCode=TIDA:12345,67890。 TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。 当存在"|"时，就说明订单中存在多个商品，商品间用"|"分隔了开来。|"之后的内容含义同上。retailStoreId=12345，发货门店ID或仓信息。retailStoreType=STORE: 发货门店类别，STORE表示门店，WAREHOUSE表示电商仓。对于全渠道订单回传的商家，retailStoreId和retailStoreType字段为必填字段
     **/
    private $feature;

    /**
        淘宝交易ID
     **/
    private $tid;

    /**
        需要拆单发货的子订单集合，针对的是一笔交易下有多个子订单需要分开发货的场景；1次可传人多个子订单号，子订单间用逗号隔开；为空表示不做拆单发货。
     **/
    private $subTid;

    /**
        派送员姓名
     **/
    private $deliveryName;

    /**
        卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。 如果为空，取的卖家的默认退货地址
     **/
    private $cancelId;

    /**
         A（默认，核销签收模式），B（商家回传物流节点模式）
     **/
    private $mode;


    public function getDeliveryMobile() : string{
        return $this->deliveryMobile;
    }

    public function setDeliveryMobile(string $deliveryMobile){
        $this->deliveryMobile = $deliveryMobile;
    }

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

    public function getDeliveryName() : string{
        return $this->deliveryName;
    }

    public function setDeliveryName(string $deliveryName){
        $this->deliveryName = $deliveryName;
    }

    public function getCancelId() : int{
        return $this->cancelId;
    }

    public function setCancelId(int $cancelId){
        $this->cancelId = $cancelId;
    }

    public function getMode() : string{
        return $this->mode;
    }

    public function setMode(string $mode){
        $this->mode = $mode;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.seller.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->deliveryMobile)) {
            $requestParam["delivery_mobile"] = TopUtil::convertBasic($this->deliveryMobile);
        }

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

        if (!TopUtil::checkEmpty($this->deliveryName)) {
            $requestParam["delivery_name"] = TopUtil::convertBasic($this->deliveryName);
        }

        if (!TopUtil::checkEmpty($this->cancelId)) {
            $requestParam["cancel_id"] = TopUtil::convertBasic($this->cancelId);
        }

        if (!TopUtil::checkEmpty($this->mode)) {
            $requestParam["mode"] = TopUtil::convertBasic($this->mode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


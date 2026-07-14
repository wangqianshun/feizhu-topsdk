<?php
namespace FeiZhu\TopSdk\Ability648\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsDummySendRequest {

    /**
        feature参数格式<br>范例: identCode=tid1:识别码1,识别码2|tid2:识别码3;machineCode=tid3:3C机器号A,3C机器号B<br>identCode为识别码的KEY,machineCode为3C的KEY,多个key之间用”;”分隔<br>“tid1:识别码1,识别码2|tid2:识别码3”为identCode对应的value。"|"不同商品间的分隔符。<br>例1商品和2商品，之间就用"|"分开。<br>TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上)<br>":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。<br>"," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。<br>具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。<br>参数格式：identCode=TIDA:12345,67890。TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。<br>当存在"|"时，就说明订单中存在多个商品，商品间用"|"分隔了开来。|"之后的内容含义同上。
     **/
    private $feature;

    /**
        商家的IP地址
     **/
    private $sellerIp;

    /**
        淘宝交易ID
     **/
    private $tid;


    public function getFeature() : string{
        return $this->feature;
    }

    public function setFeature(string $feature){
        $this->feature = $feature;
    }

    public function getSellerIp() : string{
        return $this->sellerIp;
    }

    public function setSellerIp(string $sellerIp){
        $this->sellerIp = $sellerIp;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }


    public function getApiName() : string {
        return "taobao.logistics.dummy.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->feature)) {
            $requestParam["feature"] = TopUtil::convertBasic($this->feature);
        }

        if (!TopUtil::checkEmpty($this->sellerIp)) {
            $requestParam["seller_ip"] = TopUtil::convertBasic($this->sellerIp);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


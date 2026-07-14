<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsOrderCreateRequest {

    /**
        发货的物流公司运单号。在logis_type=OFFLINE且is_consign=true时，此项必填。
     **/
    private $mailNo;

    /**
        卖家旺旺号
     **/
    private $sellerWangwangId;

    /**
        物流发货类型：1-普通订单
不填为默认类型 1-普通订单
     **/
    private $orderType;

    /**
        发货的物流公司代码，如申通=STO，圆通=YTO。is_consign=true时，此项必填。
     **/
    private $logisCompanyCode;

    /**
        订单的交易号码
     **/
    private $tradeId;

    /**
        创建订单同时是否进行发货，默认发货。
     **/
    private $isConsign;

    /**
        发货方式,默认为自己联系发货。可选值:ONLINE(在线下单)、OFFLINE(自己联系)。
     **/
    private $logisType;

    /**
        运费承担方式。1为买家承担运费，2为卖家承担运费，其他值为错误参数。
     **/
    private $shipping;

    /**
        运送货物的单价列表(注意：单位为分），用|号隔开
     **/
    private $itemValues;

    /**
        运送的货物名称列表，用|号隔开
     **/
    private $goodsNames;

    /**
        运送货物的数量列表，用|号隔开
     **/
    private $goodsQuantities;


    public function getMailNo() : string{
        return $this->mailNo;
    }

    public function setMailNo(string $mailNo){
        $this->mailNo = $mailNo;
    }

    public function getSellerWangwangId() : string{
        return $this->sellerWangwangId;
    }

    public function setSellerWangwangId(string $sellerWangwangId){
        $this->sellerWangwangId = $sellerWangwangId;
    }

    public function getOrderType() : int{
        return $this->orderType;
    }

    public function setOrderType(int $orderType){
        $this->orderType = $orderType;
    }

    public function getLogisCompanyCode() : string{
        return $this->logisCompanyCode;
    }

    public function setLogisCompanyCode(string $logisCompanyCode){
        $this->logisCompanyCode = $logisCompanyCode;
    }

    public function getTradeId() : int{
        return $this->tradeId;
    }

    public function setTradeId(int $tradeId){
        $this->tradeId = $tradeId;
    }

    public function getIsConsign() : bool{
        return $this->isConsign;
    }

    public function setIsConsign(bool $isConsign){
        $this->isConsign = $isConsign;
    }

    public function getLogisType() : string{
        return $this->logisType;
    }

    public function setLogisType(string $logisType){
        $this->logisType = $logisType;
    }

    public function getShipping() : int{
        return $this->shipping;
    }

    public function setShipping(int $shipping){
        $this->shipping = $shipping;
    }

    public function getItemValues() : string{
        return $this->itemValues;
    }

    public function setItemValues(string $itemValues){
        $this->itemValues = $itemValues;
    }

    public function getGoodsNames() : string{
        return $this->goodsNames;
    }

    public function setGoodsNames(string $goodsNames){
        $this->goodsNames = $goodsNames;
    }

    public function getGoodsQuantities() : string{
        return $this->goodsQuantities;
    }

    public function setGoodsQuantities(string $goodsQuantities){
        $this->goodsQuantities = $goodsQuantities;
    }


    public function getApiName() : string {
        return "taobao.logistics.order.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->mailNo)) {
            $requestParam["mail_no"] = TopUtil::convertBasic($this->mailNo);
        }

        if (!TopUtil::checkEmpty($this->sellerWangwangId)) {
            $requestParam["seller_wangwang_id"] = TopUtil::convertBasic($this->sellerWangwangId);
        }

        if (!TopUtil::checkEmpty($this->orderType)) {
            $requestParam["order_type"] = TopUtil::convertBasic($this->orderType);
        }

        if (!TopUtil::checkEmpty($this->logisCompanyCode)) {
            $requestParam["logis_company_code"] = TopUtil::convertBasic($this->logisCompanyCode);
        }

        if (!TopUtil::checkEmpty($this->tradeId)) {
            $requestParam["trade_id"] = TopUtil::convertBasic($this->tradeId);
        }

        if (!TopUtil::checkEmpty($this->isConsign)) {
            $requestParam["is_consign"] = TopUtil::convertBasic($this->isConsign);
        }

        if (!TopUtil::checkEmpty($this->logisType)) {
            $requestParam["logis_type"] = TopUtil::convertBasic($this->logisType);
        }

        if (!TopUtil::checkEmpty($this->shipping)) {
            $requestParam["shipping"] = TopUtil::convertBasic($this->shipping);
        }

        if (!TopUtil::checkEmpty($this->itemValues)) {
            $requestParam["item_values"] = TopUtil::convertBasic($this->itemValues);
        }

        if (!TopUtil::checkEmpty($this->goodsNames)) {
            $requestParam["goods_names"] = TopUtil::convertBasic($this->goodsNames);
        }

        if (!TopUtil::checkEmpty($this->goodsQuantities)) {
            $requestParam["goods_quantities"] = TopUtil::convertBasic($this->goodsQuantities);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


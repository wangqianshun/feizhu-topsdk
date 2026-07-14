<?php
namespace FeiZhu\TopSdk\Ability15\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoLogisticsConsignOrderCreateandsendRequest {

    /**
        物流公司ID
     **/
    private $companyId;

    /**
        交易流水号，淘外订单号或者商家内部交易流水号
     **/
    private $tradeId;

    /**
        运单号
     **/
    private $mailNo;

    /**
        订单来源，值选择：30
     **/
    private $orderSource;

    /**
        用户ID
     **/
    private $userId;

    /**
        物流订单物流类型，值固定选择：2
     **/
    private $logisType;

    /**
        订单类型，值固定选择：30
     **/
    private $orderType;

    /**
        费用承担方式 1买家承担运费 2卖家承担运费
     **/
    private $shipping;

    /**
        物品的json数据。
     **/
    private $itemJsonString;

    /**
        发件人街道地址
     **/
    private $sAddress;

    /**
        市
     **/
    private $sCityName;

    /**
        发件人名称
     **/
    private $sName;

    /**
        省
     **/
    private $sProvName;

    /**
        区
     **/
    private $sDistName;

    /**
        发件人区域ID
     **/
    private $sAreaId;

    /**
        电话号码
     **/
    private $sTelephone;

    /**
        手机号码
     **/
    private $sMobilePhone;

    /**
        发件人出编
     **/
    private $sZipCode;

    /**
        电话号码
     **/
    private $rTelephone;

    /**
        省
     **/
    private $rProvName;

    /**
        收件人街道地址
     **/
    private $rAddress;

    /**
        市
     **/
    private $rCityName;

    /**
        手机号码
     **/
    private $rMobilePhone;

    /**
        区
     **/
    private $rDistName;

    /**
        收件人邮编
     **/
    private $rZipCode;

    /**
        收件人名称
     **/
    private $rName;

    /**
        收件人区域ID
     **/
    private $rAreaId;


    public function getCompanyId() : int{
        return $this->companyId;
    }

    public function setCompanyId(int $companyId){
        $this->companyId = $companyId;
    }

    public function getTradeId() : int{
        return $this->tradeId;
    }

    public function setTradeId(int $tradeId){
        $this->tradeId = $tradeId;
    }

    public function getMailNo() : string{
        return $this->mailNo;
    }

    public function setMailNo(string $mailNo){
        $this->mailNo = $mailNo;
    }

    public function getOrderSource() : int{
        return $this->orderSource;
    }

    public function setOrderSource(int $orderSource){
        $this->orderSource = $orderSource;
    }

    public function getUserId() : int{
        return $this->userId;
    }

    public function setUserId(int $userId){
        $this->userId = $userId;
    }

    public function getLogisType() : int{
        return $this->logisType;
    }

    public function setLogisType(int $logisType){
        $this->logisType = $logisType;
    }

    public function getOrderType() : int{
        return $this->orderType;
    }

    public function setOrderType(int $orderType){
        $this->orderType = $orderType;
    }

    public function getShipping() : string{
        return $this->shipping;
    }

    public function setShipping(string $shipping){
        $this->shipping = $shipping;
    }

    public function getItemJsonString() : string{
        return $this->itemJsonString;
    }

    public function setItemJsonString(string $itemJsonString){
        $this->itemJsonString = $itemJsonString;
    }

    public function getSAddress() : string{
        return $this->sAddress;
    }

    public function setSAddress(string $sAddress){
        $this->sAddress = $sAddress;
    }

    public function getSCityName() : string{
        return $this->sCityName;
    }

    public function setSCityName(string $sCityName){
        $this->sCityName = $sCityName;
    }

    public function getSName() : string{
        return $this->sName;
    }

    public function setSName(string $sName){
        $this->sName = $sName;
    }

    public function getSProvName() : string{
        return $this->sProvName;
    }

    public function setSProvName(string $sProvName){
        $this->sProvName = $sProvName;
    }

    public function getSDistName() : string{
        return $this->sDistName;
    }

    public function setSDistName(string $sDistName){
        $this->sDistName = $sDistName;
    }

    public function getSAreaId() : int{
        return $this->sAreaId;
    }

    public function setSAreaId(int $sAreaId){
        $this->sAreaId = $sAreaId;
    }

    public function getSTelephone() : string{
        return $this->sTelephone;
    }

    public function setSTelephone(string $sTelephone){
        $this->sTelephone = $sTelephone;
    }

    public function getSMobilePhone() : string{
        return $this->sMobilePhone;
    }

    public function setSMobilePhone(string $sMobilePhone){
        $this->sMobilePhone = $sMobilePhone;
    }

    public function getSZipCode() : string{
        return $this->sZipCode;
    }

    public function setSZipCode(string $sZipCode){
        $this->sZipCode = $sZipCode;
    }

    public function getRTelephone() : string{
        return $this->rTelephone;
    }

    public function setRTelephone(string $rTelephone){
        $this->rTelephone = $rTelephone;
    }

    public function getRProvName() : string{
        return $this->rProvName;
    }

    public function setRProvName(string $rProvName){
        $this->rProvName = $rProvName;
    }

    public function getRAddress() : string{
        return $this->rAddress;
    }

    public function setRAddress(string $rAddress){
        $this->rAddress = $rAddress;
    }

    public function getRCityName() : string{
        return $this->rCityName;
    }

    public function setRCityName(string $rCityName){
        $this->rCityName = $rCityName;
    }

    public function getRMobilePhone() : string{
        return $this->rMobilePhone;
    }

    public function setRMobilePhone(string $rMobilePhone){
        $this->rMobilePhone = $rMobilePhone;
    }

    public function getRDistName() : string{
        return $this->rDistName;
    }

    public function setRDistName(string $rDistName){
        $this->rDistName = $rDistName;
    }

    public function getRZipCode() : string{
        return $this->rZipCode;
    }

    public function setRZipCode(string $rZipCode){
        $this->rZipCode = $rZipCode;
    }

    public function getRName() : string{
        return $this->rName;
    }

    public function setRName(string $rName){
        $this->rName = $rName;
    }

    public function getRAreaId() : int{
        return $this->rAreaId;
    }

    public function setRAreaId(int $rAreaId){
        $this->rAreaId = $rAreaId;
    }


    public function getApiName() : string {
        return "taobao.logistics.consign.order.createandsend";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->companyId)) {
            $requestParam["company_id"] = TopUtil::convertBasic($this->companyId);
        }

        if (!TopUtil::checkEmpty($this->tradeId)) {
            $requestParam["trade_id"] = TopUtil::convertBasic($this->tradeId);
        }

        if (!TopUtil::checkEmpty($this->mailNo)) {
            $requestParam["mail_no"] = TopUtil::convertBasic($this->mailNo);
        }

        if (!TopUtil::checkEmpty($this->orderSource)) {
            $requestParam["order_source"] = TopUtil::convertBasic($this->orderSource);
        }

        if (!TopUtil::checkEmpty($this->userId)) {
            $requestParam["user_id"] = TopUtil::convertBasic($this->userId);
        }

        if (!TopUtil::checkEmpty($this->logisType)) {
            $requestParam["logis_type"] = TopUtil::convertBasic($this->logisType);
        }

        if (!TopUtil::checkEmpty($this->orderType)) {
            $requestParam["order_type"] = TopUtil::convertBasic($this->orderType);
        }

        if (!TopUtil::checkEmpty($this->shipping)) {
            $requestParam["shipping"] = TopUtil::convertBasic($this->shipping);
        }

        if (!TopUtil::checkEmpty($this->itemJsonString)) {
            $requestParam["item_json_string"] = TopUtil::convertBasic($this->itemJsonString);
        }

        if (!TopUtil::checkEmpty($this->sAddress)) {
            $requestParam["s_address"] = TopUtil::convertBasic($this->sAddress);
        }

        if (!TopUtil::checkEmpty($this->sCityName)) {
            $requestParam["s_city_name"] = TopUtil::convertBasic($this->sCityName);
        }

        if (!TopUtil::checkEmpty($this->sName)) {
            $requestParam["s_name"] = TopUtil::convertBasic($this->sName);
        }

        if (!TopUtil::checkEmpty($this->sProvName)) {
            $requestParam["s_prov_name"] = TopUtil::convertBasic($this->sProvName);
        }

        if (!TopUtil::checkEmpty($this->sDistName)) {
            $requestParam["s_dist_name"] = TopUtil::convertBasic($this->sDistName);
        }

        if (!TopUtil::checkEmpty($this->sAreaId)) {
            $requestParam["s_area_id"] = TopUtil::convertBasic($this->sAreaId);
        }

        if (!TopUtil::checkEmpty($this->sTelephone)) {
            $requestParam["s_telephone"] = TopUtil::convertBasic($this->sTelephone);
        }

        if (!TopUtil::checkEmpty($this->sMobilePhone)) {
            $requestParam["s_mobile_phone"] = TopUtil::convertBasic($this->sMobilePhone);
        }

        if (!TopUtil::checkEmpty($this->sZipCode)) {
            $requestParam["s_zip_code"] = TopUtil::convertBasic($this->sZipCode);
        }

        if (!TopUtil::checkEmpty($this->rTelephone)) {
            $requestParam["r_telephone"] = TopUtil::convertBasic($this->rTelephone);
        }

        if (!TopUtil::checkEmpty($this->rProvName)) {
            $requestParam["r_prov_name"] = TopUtil::convertBasic($this->rProvName);
        }

        if (!TopUtil::checkEmpty($this->rAddress)) {
            $requestParam["r_address"] = TopUtil::convertBasic($this->rAddress);
        }

        if (!TopUtil::checkEmpty($this->rCityName)) {
            $requestParam["r_city_name"] = TopUtil::convertBasic($this->rCityName);
        }

        if (!TopUtil::checkEmpty($this->rMobilePhone)) {
            $requestParam["r_mobile_phone"] = TopUtil::convertBasic($this->rMobilePhone);
        }

        if (!TopUtil::checkEmpty($this->rDistName)) {
            $requestParam["r_dist_name"] = TopUtil::convertBasic($this->rDistName);
        }

        if (!TopUtil::checkEmpty($this->rZipCode)) {
            $requestParam["r_zip_code"] = TopUtil::convertBasic($this->rZipCode);
        }

        if (!TopUtil::checkEmpty($this->rName)) {
            $requestParam["r_name"] = TopUtil::convertBasic($this->rName);
        }

        if (!TopUtil::checkEmpty($this->rAreaId)) {
            $requestParam["r_area_id"] = TopUtil::convertBasic($this->rAreaId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


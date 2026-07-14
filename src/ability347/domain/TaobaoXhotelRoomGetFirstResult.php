<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRoomGetFirstResult {

    /**
        发票类型为其他时的发票描述,不能超过30个汉字，60个字符
     **/
    public $receipt_other_type_desc;

    /**
        发票类型。A,B。分别代表： A:酒店住宿发票,B:其他
     **/
    public $receipt_type;

    /**
        酒店商品是否提供发票
     **/
    public $has_receipt;

    /**
        酒店商品图片Url。多个url用逗号隔开
     **/
    public $pic_urls;

    /**
        宝贝描述
     **/
    public $desc;

    /**
        购买须知
     **/
    public $guide;

    /**
        宝贝名称
     **/
    public $title;

    /**
        rid房型id
     **/
    public $rid;

    /**
        hid酒店id
     **/
    public $hid;

    /**
        iid淘宝商品id
     **/
    public $iid;

    /**
        gid酒店商品id
     **/
    public $gid;

    /**
        发票说明，不能超过100个汉字,200个字符。
     **/
    public $receipt_info;

    /**
        库存日历
     **/
    public $inventory;

    /**
        宝贝状态。1：上架。2：下架。3：删除
     **/
    public $status;

    /**
        橱窗推荐
     **/
    public $recommend;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        extend_info1
     **/
    public $extend_info1;

    /**
        extend_info2
     **/
    public $extend_info2;

    /**
        extend_info3
     **/
    public $extend_info3;

    /**
        卖家渠道
     **/
    public $vendor;

    /**
        out_rid
     **/
    public $out_rid;

    /**
        商品下架原因
     **/
    public $down_reason;

    /**
        switchCalendar
     **/
    public $switch_calendar;


    public function getReceiptOtherTypeDesc() : string{
        return $this->receipt_other_type_desc;
    }

    public function setReceiptOtherTypeDesc(string $receiptOtherTypeDesc){
        $this->receipt_other_type_desc = $receiptOtherTypeDesc;
    }

    public function getReceiptType() : string{
        return $this->receipt_type;
    }

    public function setReceiptType(string $receiptType){
        $this->receipt_type = $receiptType;
    }

    public function getHasReceipt() : bool{
        return $this->has_receipt;
    }

    public function setHasReceipt(bool $hasReceipt){
        $this->has_receipt = $hasReceipt;
    }

    public function getPicUrls() : string{
        return $this->pic_urls;
    }

    public function setPicUrls(string $picUrls){
        $this->pic_urls = $picUrls;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getGuide() : string{
        return $this->guide;
    }

    public function setGuide(string $guide){
        $this->guide = $guide;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getIid() : int{
        return $this->iid;
    }

    public function setIid(int $iid){
        $this->iid = $iid;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getReceiptInfo() : string{
        return $this->receipt_info;
    }

    public function setReceiptInfo(string $receiptInfo){
        $this->receipt_info = $receiptInfo;
    }

    public function getInventory() : string{
        return $this->inventory;
    }

    public function setInventory(string $inventory){
        $this->inventory = $inventory;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getRecommend() : bool{
        return $this->recommend;
    }

    public function setRecommend(bool $recommend){
        $this->recommend = $recommend;
    }

    public function getCreatedTime() : string{
        return $this->created_time;
    }

    public function setCreatedTime(string $createdTime){
        $this->created_time = $createdTime;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getExtendInfo1() : string{
        return $this->extend_info1;
    }

    public function setExtendInfo1(string $extendInfo1){
        $this->extend_info1 = $extendInfo1;
    }

    public function getExtendInfo2() : string{
        return $this->extend_info2;
    }

    public function setExtendInfo2(string $extendInfo2){
        $this->extend_info2 = $extendInfo2;
    }

    public function getExtendInfo3() : string{
        return $this->extend_info3;
    }

    public function setExtendInfo3(string $extendInfo3){
        $this->extend_info3 = $extendInfo3;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOutRid() : string{
        return $this->out_rid;
    }

    public function setOutRid(string $outRid){
        $this->out_rid = $outRid;
    }

    public function getDownReason() : string{
        return $this->down_reason;
    }

    public function setDownReason(string $downReason){
        $this->down_reason = $downReason;
    }

    public function getSwitchCalendar() : string{
        return $this->switch_calendar;
    }

    public function setSwitchCalendar(string $switchCalendar){
        $this->switch_calendar = $switchCalendar;
    }


}


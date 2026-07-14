<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomUpdateRequest {

    /**
        废弃，使用out_rid
     **/
    private $gid;

    /**
        卖家房型ID
     **/
    private $outRid;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        废弃，宝贝名称展示在店铺里
     **/
    private $title;

    /**
        废弃，房型购买须知展示在PC购物路径
     **/
    private $guide;

    /**
        废弃，宝贝描述展示在宝贝详情页面
     **/
    private $desc;

    /**
        废弃，宝贝图片，没有默认使用标准酒店房型图片
     **/
    private $pic;

    /**
        废弃，房型是否提供发票
     **/
    private $hasReceipt;

    /**
        废弃，房型发票类型。A,B。分别代表： A:酒店住宿发票,B:其他
     **/
    private $receiptType;

    /**
        废弃，房型发票类型为其他时的发票描述,不能超过30个字
     **/
    private $receiptOtherTypeDesc;

    /**
        废弃，房型发票说明，不能超过100个字
     **/
    private $receiptInfo;

    /**
        房型共享库存日历。quota物理库存；al_quota保留房库存；sp_quota超预定库存。其中保留房库存和超预定库存需要向运营申请权限示例：[{"date":2011-01-28,"quota":10,"al_quota":2,"sp_quota":3}]
     **/
    private $inventory;

    /**
        房型库存开关。 1，开；2，关
     **/
    private $roomSwitchCal;

    /**
        超预定库存截止时间
     **/
    private $superbookEndTime;

    /**
        超预定库存开始时间
     **/
    private $superbookStartTime;

    /**
        保留房库存截止时间
     **/
    private $allotmentEndTime;

    /**
        保留房库存截止时间
     **/
    private $allotmentStartTime;

    /**
        宝贝状态,1上架。
     **/
    private $status;


    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getGuide() : string{
        return $this->guide;
    }

    public function setGuide(string $guide){
        $this->guide = $guide;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getPic() : string{
        return $this->pic;
    }

    public function setPic(string $pic){
        $this->pic = $pic;
    }

    public function getHasReceipt() : bool{
        return $this->hasReceipt;
    }

    public function setHasReceipt(bool $hasReceipt){
        $this->hasReceipt = $hasReceipt;
    }

    public function getReceiptType() : string{
        return $this->receiptType;
    }

    public function setReceiptType(string $receiptType){
        $this->receiptType = $receiptType;
    }

    public function getReceiptOtherTypeDesc() : string{
        return $this->receiptOtherTypeDesc;
    }

    public function setReceiptOtherTypeDesc(string $receiptOtherTypeDesc){
        $this->receiptOtherTypeDesc = $receiptOtherTypeDesc;
    }

    public function getReceiptInfo() : string{
        return $this->receiptInfo;
    }

    public function setReceiptInfo(string $receiptInfo){
        $this->receiptInfo = $receiptInfo;
    }

    public function getInventory() : string{
        return $this->inventory;
    }

    public function setInventory(string $inventory){
        $this->inventory = $inventory;
    }

    public function getRoomSwitchCal() : string{
        return $this->roomSwitchCal;
    }

    public function setRoomSwitchCal(string $roomSwitchCal){
        $this->roomSwitchCal = $roomSwitchCal;
    }

    public function getSuperbookEndTime() : string{
        return $this->superbookEndTime;
    }

    public function setSuperbookEndTime(string $superbookEndTime){
        $this->superbookEndTime = $superbookEndTime;
    }

    public function getSuperbookStartTime() : string{
        return $this->superbookStartTime;
    }

    public function setSuperbookStartTime(string $superbookStartTime){
        $this->superbookStartTime = $superbookStartTime;
    }

    public function getAllotmentEndTime() : string{
        return $this->allotmentEndTime;
    }

    public function setAllotmentEndTime(string $allotmentEndTime){
        $this->allotmentEndTime = $allotmentEndTime;
    }

    public function getAllotmentStartTime() : string{
        return $this->allotmentStartTime;
    }

    public function setAllotmentStartTime(string $allotmentStartTime){
        $this->allotmentStartTime = $allotmentStartTime;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


    public function getApiName() : string {
        return "taobao.xhotel.room.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->guide)) {
            $requestParam["guide"] = TopUtil::convertBasic($this->guide);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        if (!TopUtil::checkEmpty($this->hasReceipt)) {
            $requestParam["has_receipt"] = TopUtil::convertBasic($this->hasReceipt);
        }

        if (!TopUtil::checkEmpty($this->receiptType)) {
            $requestParam["receipt_type"] = TopUtil::convertBasic($this->receiptType);
        }

        if (!TopUtil::checkEmpty($this->receiptOtherTypeDesc)) {
            $requestParam["receipt_other_type_desc"] = TopUtil::convertBasic($this->receiptOtherTypeDesc);
        }

        if (!TopUtil::checkEmpty($this->receiptInfo)) {
            $requestParam["receipt_info"] = TopUtil::convertBasic($this->receiptInfo);
        }

        if (!TopUtil::checkEmpty($this->inventory)) {
            $requestParam["inventory"] = TopUtil::convertBasic($this->inventory);
        }

        if (!TopUtil::checkEmpty($this->roomSwitchCal)) {
            $requestParam["room_switch_cal"] = TopUtil::convertBasic($this->roomSwitchCal);
        }

        if (!TopUtil::checkEmpty($this->superbookEndTime)) {
            $requestParam["superbook_end_time"] = TopUtil::convertBasic($this->superbookEndTime);
        }

        if (!TopUtil::checkEmpty($this->superbookStartTime)) {
            $requestParam["superbook_start_time"] = TopUtil::convertBasic($this->superbookStartTime);
        }

        if (!TopUtil::checkEmpty($this->allotmentEndTime)) {
            $requestParam["allotment_end_time"] = TopUtil::convertBasic($this->allotmentEndTime);
        }

        if (!TopUtil::checkEmpty($this->allotmentStartTime)) {
            $requestParam["allotment_start_time"] = TopUtil::convertBasic($this->allotmentStartTime);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->pic)){
            $fileParam["pic"] = TopUtil::convertBasic($this->pic);
        }
        return $fileParam;
    }

}


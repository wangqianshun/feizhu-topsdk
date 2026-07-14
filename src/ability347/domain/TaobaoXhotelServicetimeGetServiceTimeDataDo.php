<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelServicetimeGetServiceTimeDataDo {

    /**
        supplier
     **/
    public $supplier;

    /**
        卖家nick
     **/
    public $seller_nick;

    /**
        卖家id
     **/
    public $seller_id;

    /**
        业务类型：1卖家；2supplier;3酒店
     **/
    public $business_type;

    /**
        业务id
     **/
    public $business_id;

    /**
        timeZoneName
     **/
    public $time_zone_name;

    /**
        1: 当日订单, 2:次日及以后订单
     **/
    public $order_confirm_type;

    /**
        是否在非工作时间显示商品 1:显示, 2:不显示
     **/
    public $display_item_in_nonworking_time;

    /**
        周五服务时间（当地时间）
     **/
    public $friday_confirm_local_time;

    /**
        周一服务时间（当地时间）
     **/
    public $monday_confirm_local_time;

    /**
        周二服务时间（当地时间）
     **/
    public $tuesday_confirm_local_time;

    /**
        id
     **/
    public $id;

    /**
        周三服务时间（当地时间）
     **/
    public $wednesday_confirm_local_time;

    /**
        周六服务时间（当地时间）
     **/
    public $saturday_confirm_local_time;

    /**
        operator
     **/
    public $operator;

    /**
        周日服务时间（当地时间）
     **/
    public $sunday_confirm_local_time;

    /**
        周四服务时间（当地时间）
     **/
    public $thursday_confirm_local_time;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        最后修改时间
     **/
    public $gmt_modified;


    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getBusinessType() : string{
        return $this->business_type;
    }

    public function setBusinessType(string $businessType){
        $this->business_type = $businessType;
    }

    public function getBusinessId() : int{
        return $this->business_id;
    }

    public function setBusinessId(int $businessId){
        $this->business_id = $businessId;
    }

    public function getTimeZoneName() : string{
        return $this->time_zone_name;
    }

    public function setTimeZoneName(string $timeZoneName){
        $this->time_zone_name = $timeZoneName;
    }

    public function getOrderConfirmType() : int{
        return $this->order_confirm_type;
    }

    public function setOrderConfirmType(int $orderConfirmType){
        $this->order_confirm_type = $orderConfirmType;
    }

    public function getDisplayItemInNonworkingTime() : int{
        return $this->display_item_in_nonworking_time;
    }

    public function setDisplayItemInNonworkingTime(int $displayItemInNonworkingTime){
        $this->display_item_in_nonworking_time = $displayItemInNonworkingTime;
    }

    public function getFridayConfirmLocalTime() : string{
        return $this->friday_confirm_local_time;
    }

    public function setFridayConfirmLocalTime(string $fridayConfirmLocalTime){
        $this->friday_confirm_local_time = $fridayConfirmLocalTime;
    }

    public function getMondayConfirmLocalTime() : string{
        return $this->monday_confirm_local_time;
    }

    public function setMondayConfirmLocalTime(string $mondayConfirmLocalTime){
        $this->monday_confirm_local_time = $mondayConfirmLocalTime;
    }

    public function getTuesdayConfirmLocalTime() : string{
        return $this->tuesday_confirm_local_time;
    }

    public function setTuesdayConfirmLocalTime(string $tuesdayConfirmLocalTime){
        $this->tuesday_confirm_local_time = $tuesdayConfirmLocalTime;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getWednesdayConfirmLocalTime() : string{
        return $this->wednesday_confirm_local_time;
    }

    public function setWednesdayConfirmLocalTime(string $wednesdayConfirmLocalTime){
        $this->wednesday_confirm_local_time = $wednesdayConfirmLocalTime;
    }

    public function getSaturdayConfirmLocalTime() : string{
        return $this->saturday_confirm_local_time;
    }

    public function setSaturdayConfirmLocalTime(string $saturdayConfirmLocalTime){
        $this->saturday_confirm_local_time = $saturdayConfirmLocalTime;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }

    public function getSundayConfirmLocalTime() : string{
        return $this->sunday_confirm_local_time;
    }

    public function setSundayConfirmLocalTime(string $sundayConfirmLocalTime){
        $this->sunday_confirm_local_time = $sundayConfirmLocalTime;
    }

    public function getThursdayConfirmLocalTime() : string{
        return $this->thursday_confirm_local_time;
    }

    public function setThursdayConfirmLocalTime(string $thursdayConfirmLocalTime){
        $this->thursday_confirm_local_time = $thursdayConfirmLocalTime;
    }

    public function getGmtCreate() : array{
        return $this->gmt_create;
    }

    public function setGmtCreate(array $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getGmtModified() : array{
        return $this->gmt_modified;
    }

    public function setGmtModified(array $gmtModified){
        $this->gmt_modified = $gmtModified;
    }


}


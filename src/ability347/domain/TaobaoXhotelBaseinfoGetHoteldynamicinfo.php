<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBaseinfoGetHoteldynamicinfo {

    /**
        不可售原因
     **/
    public $unsale_reason;

    /**
        酒店hid
     **/
    public $hid;

    /**
        酒店状态
     **/
    public $status;

    /**
        酒店的销售渠道
     **/
    public $vendor;

    /**
        可售健康房型数
     **/
    public $ks_heathy_room_num;

    /**
        电话
     **/
    public $tel;

    /**
        标准酒店ID
     **/
    public $shid;

    /**
        城市名称
     **/
    public $city_str;

    /**
        城市编码
     **/
    public $city;

    /**
        id
     **/
    public $id;

    /**
        房型数
     **/
    public $room_nun;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        地址
     **/
    public $address;

    /**
        可售房型数
     **/
    public $ks_room_num;

    /**
        卖家ID
     **/
    public $seller_id;

    /**
        不可售原因
     **/
    public $unsale_type;

    /**
        酒店名字
     **/
    public $name;

    /**
        分析日期
     **/
    public $calculate_date;

    /**
        酒店匹配
     **/
    public $data_confirm;

    /**
        酒店外部ID
     **/
    public $outer_id;


    public function getUnsaleReason() : string{
        return $this->unsale_reason;
    }

    public function setUnsaleReason(string $unsaleReason){
        $this->unsale_reason = $unsaleReason;
    }

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getKsHeathyRoomNum() : int{
        return $this->ks_heathy_room_num;
    }

    public function setKsHeathyRoomNum(int $ksHeathyRoomNum){
        $this->ks_heathy_room_num = $ksHeathyRoomNum;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getCityStr() : string{
        return $this->city_str;
    }

    public function setCityStr(string $cityStr){
        $this->city_str = $cityStr;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getRoomNun() : int{
        return $this->room_nun;
    }

    public function setRoomNun(int $roomNun){
        $this->room_nun = $roomNun;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getKsRoomNum() : int{
        return $this->ks_room_num;
    }

    public function setKsRoomNum(int $ksRoomNum){
        $this->ks_room_num = $ksRoomNum;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getUnsaleType() : int{
        return $this->unsale_type;
    }

    public function setUnsaleType(int $unsaleType){
        $this->unsale_type = $unsaleType;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getCalculateDate() : string{
        return $this->calculate_date;
    }

    public function setCalculateDate(string $calculateDate){
        $this->calculate_date = $calculateDate;
    }

    public function getDataConfirm() : int{
        return $this->data_confirm;
    }

    public function setDataConfirm(int $dataConfirm){
        $this->data_confirm = $dataConfirm;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }


}


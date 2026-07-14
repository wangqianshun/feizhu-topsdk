<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBaseinfoGetRequest {

    /**
        淘宝酒店ID
     **/
    private $hid;

    /**
        推荐使用卖家系统中的酒店ID。
     **/
    private $outHid;

    /**
        用于标示该酒店发布的渠道信息
     **/
    private $vendor;

    /**
        是否需要房价基本信息（false为不需要），默认为需要
     **/
    private $isNeedRatePlan;

    /**
        是否需要房型基本信息（false为不需要），默认为需要
     **/
    private $isNeedRoomType;

    /**
        是否需要 根据 hid 查询 标准房型列表
     **/
    private $needSRoomTypeList;

    /**
        是否需要酒店房型可售详情
     **/
    private $needHotelDynamicInfo;

    /**
        在查询酒店房型可售详情 时的入参JSON , {@link com.taobao.trip.hpc.client.query.HotelSellerInvQuery}
     **/
    private $jsonHotelSellerInvQuery;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getIsNeedRatePlan() : bool{
        return $this->isNeedRatePlan;
    }

    public function setIsNeedRatePlan(bool $isNeedRatePlan){
        $this->isNeedRatePlan = $isNeedRatePlan;
    }

    public function getIsNeedRoomType() : bool{
        return $this->isNeedRoomType;
    }

    public function setIsNeedRoomType(bool $isNeedRoomType){
        $this->isNeedRoomType = $isNeedRoomType;
    }

    public function getNeedSRoomTypeList() : bool{
        return $this->needSRoomTypeList;
    }

    public function setNeedSRoomTypeList(bool $needSRoomTypeList){
        $this->needSRoomTypeList = $needSRoomTypeList;
    }

    public function getNeedHotelDynamicInfo() : bool{
        return $this->needHotelDynamicInfo;
    }

    public function setNeedHotelDynamicInfo(bool $needHotelDynamicInfo){
        $this->needHotelDynamicInfo = $needHotelDynamicInfo;
    }

    public function getJsonHotelSellerInvQuery() : string{
        return $this->jsonHotelSellerInvQuery;
    }

    public function setJsonHotelSellerInvQuery(string $jsonHotelSellerInvQuery){
        $this->jsonHotelSellerInvQuery = $jsonHotelSellerInvQuery;
    }


    public function getApiName() : string {
        return "taobao.xhotel.baseinfo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->isNeedRatePlan)) {
            $requestParam["is_need_rate_plan"] = TopUtil::convertBasic($this->isNeedRatePlan);
        }

        if (!TopUtil::checkEmpty($this->isNeedRoomType)) {
            $requestParam["is_need_room_type"] = TopUtil::convertBasic($this->isNeedRoomType);
        }

        if (!TopUtil::checkEmpty($this->needSRoomTypeList)) {
            $requestParam["need_s_room_type_list"] = TopUtil::convertBasic($this->needSRoomTypeList);
        }

        if (!TopUtil::checkEmpty($this->needHotelDynamicInfo)) {
            $requestParam["need_hotel_dynamic_info"] = TopUtil::convertBasic($this->needHotelDynamicInfo);
        }

        if (!TopUtil::checkEmpty($this->jsonHotelSellerInvQuery)) {
            $requestParam["json_hotel_seller_inv_query"] = TopUtil::convertBasic($this->jsonHotelSellerInvQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelQuotaUpdateRequest {

    /**
        库存类型,0: 普通库存, 1: 普通保留房库存, 2:协议保留房库存
     **/
    private $quotaType;

    /**
        是否使用room库存,true使用，false不使用
     **/
    private $useRoomInventory;

    /**
        room的gid
     **/
    private $gid;

    /**
        增减的值
     **/
    private $quota;

    /**
        数量类型, 2:增加房量,3:减少房量
     **/
    private $quotaNumType;

    /**
        修改日期列表
     **/
    private $dates;

    /**
        rate的id, rate库存时必填
     **/
    private $rateId;


    public function getQuotaType() : int{
        return $this->quotaType;
    }

    public function setQuotaType(int $quotaType){
        $this->quotaType = $quotaType;
    }

    public function getUseRoomInventory() : bool{
        return $this->useRoomInventory;
    }

    public function setUseRoomInventory(bool $useRoomInventory){
        $this->useRoomInventory = $useRoomInventory;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getQuota() : int{
        return $this->quota;
    }

    public function setQuota(int $quota){
        $this->quota = $quota;
    }

    public function getQuotaNumType() : int{
        return $this->quotaNumType;
    }

    public function setQuotaNumType(int $quotaNumType){
        $this->quotaNumType = $quotaNumType;
    }

    public function getDates() : array{
        return $this->dates;
    }

    public function setDates(array $dates){
        $this->dates = $dates;
    }

    public function getRateId() : int{
        return $this->rateId;
    }

    public function setRateId(int $rateId){
        $this->rateId = $rateId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.quota.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->quotaType)) {
            $requestParam["quota_type"] = TopUtil::convertBasic($this->quotaType);
        }

        if (!TopUtil::checkEmpty($this->useRoomInventory)) {
            $requestParam["use_room_inventory"] = TopUtil::convertBasic($this->useRoomInventory);
        }

        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->quota)) {
            $requestParam["quota"] = TopUtil::convertBasic($this->quota);
        }

        if (!TopUtil::checkEmpty($this->quotaNumType)) {
            $requestParam["quota_num_type"] = TopUtil::convertBasic($this->quotaNumType);
        }

        if (!TopUtil::checkEmpty($this->dates)) {
            $requestParam["dates"] = TopUtil::convertBasicList($this->dates);
        }

        if (!TopUtil::checkEmpty($this->rateId)) {
            $requestParam["rate_id"] = TopUtil::convertBasic($this->rateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


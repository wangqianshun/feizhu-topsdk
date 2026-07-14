<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbhotelDataSyncRequest {

    /**
        飞猪民宿名称
     **/
    private $bnbName;

    /**
        小猪分销平台ID
     **/
    private $distributedId;

    /**
        飞猪民宿rid
     **/
    private $bnbRid;

    /**
        飞猪酒店shid
     **/
    private $shid;

    /**
        ctime
     **/
    private $utime;

    /**
        飞猪酒店hid
     **/
    private $hotelHid;

    /**
        分销结果
     **/
    private $result;

    /**
        飞猪luid
     **/
    private $luid;

    /**
        飞猪酒店名称
     **/
    private $name;

    /**
        小猪酒店ID
     **/
    private $xiaozhuHid;

    /**
        飞猪酒店rid
     **/
    private $hotelRid;

    /**
        ctime
     **/
    private $ctime;

    /**
        飞猪民宿hid
     **/
    private $bnbHid;

    /**
        房型分销结果
     **/
    private $hotelResult;

    /**
        KA渠道
     **/
    private $kaChannel;


    public function getBnbName() : string{
        return $this->bnbName;
    }

    public function setBnbName(string $bnbName){
        $this->bnbName = $bnbName;
    }

    public function getDistributedId() : string{
        return $this->distributedId;
    }

    public function setDistributedId(string $distributedId){
        $this->distributedId = $distributedId;
    }

    public function getBnbRid() : string{
        return $this->bnbRid;
    }

    public function setBnbRid(string $bnbRid){
        $this->bnbRid = $bnbRid;
    }

    public function getShid() : string{
        return $this->shid;
    }

    public function setShid(string $shid){
        $this->shid = $shid;
    }

    public function getUtime() : string{
        return $this->utime;
    }

    public function setUtime(string $utime){
        $this->utime = $utime;
    }

    public function getHotelHid() : string{
        return $this->hotelHid;
    }

    public function setHotelHid(string $hotelHid){
        $this->hotelHid = $hotelHid;
    }

    public function getResult() : string{
        return $this->result;
    }

    public function setResult(string $result){
        $this->result = $result;
    }

    public function getLuid() : string{
        return $this->luid;
    }

    public function setLuid(string $luid){
        $this->luid = $luid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getXiaozhuHid() : string{
        return $this->xiaozhuHid;
    }

    public function setXiaozhuHid(string $xiaozhuHid){
        $this->xiaozhuHid = $xiaozhuHid;
    }

    public function getHotelRid() : string{
        return $this->hotelRid;
    }

    public function setHotelRid(string $hotelRid){
        $this->hotelRid = $hotelRid;
    }

    public function getCtime() : string{
        return $this->ctime;
    }

    public function setCtime(string $ctime){
        $this->ctime = $ctime;
    }

    public function getBnbHid() : string{
        return $this->bnbHid;
    }

    public function setBnbHid(string $bnbHid){
        $this->bnbHid = $bnbHid;
    }

    public function getHotelResult() : string{
        return $this->hotelResult;
    }

    public function setHotelResult(string $hotelResult){
        $this->hotelResult = $hotelResult;
    }

    public function getKaChannel() : string{
        return $this->kaChannel;
    }

    public function setKaChannel(string $kaChannel){
        $this->kaChannel = $kaChannel;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbhotel.data.sync";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bnbName)) {
            $requestParam["bnb_name"] = TopUtil::convertBasic($this->bnbName);
        }

        if (!TopUtil::checkEmpty($this->distributedId)) {
            $requestParam["distributed_id"] = TopUtil::convertBasic($this->distributedId);
        }

        if (!TopUtil::checkEmpty($this->bnbRid)) {
            $requestParam["bnb_rid"] = TopUtil::convertBasic($this->bnbRid);
        }

        if (!TopUtil::checkEmpty($this->shid)) {
            $requestParam["shid"] = TopUtil::convertBasic($this->shid);
        }

        if (!TopUtil::checkEmpty($this->utime)) {
            $requestParam["utime"] = TopUtil::convertBasic($this->utime);
        }

        if (!TopUtil::checkEmpty($this->hotelHid)) {
            $requestParam["hotel_hid"] = TopUtil::convertBasic($this->hotelHid);
        }

        if (!TopUtil::checkEmpty($this->result)) {
            $requestParam["result"] = TopUtil::convertBasic($this->result);
        }

        if (!TopUtil::checkEmpty($this->luid)) {
            $requestParam["luid"] = TopUtil::convertBasic($this->luid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->xiaozhuHid)) {
            $requestParam["xiaozhu_hid"] = TopUtil::convertBasic($this->xiaozhuHid);
        }

        if (!TopUtil::checkEmpty($this->hotelRid)) {
            $requestParam["hotel_rid"] = TopUtil::convertBasic($this->hotelRid);
        }

        if (!TopUtil::checkEmpty($this->ctime)) {
            $requestParam["ctime"] = TopUtil::convertBasic($this->ctime);
        }

        if (!TopUtil::checkEmpty($this->bnbHid)) {
            $requestParam["bnb_hid"] = TopUtil::convertBasic($this->bnbHid);
        }

        if (!TopUtil::checkEmpty($this->hotelResult)) {
            $requestParam["hotel_result"] = TopUtil::convertBasic($this->hotelResult);
        }

        if (!TopUtil::checkEmpty($this->kaChannel)) {
            $requestParam["ka_channel"] = TopUtil::convertBasic($this->kaChannel);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


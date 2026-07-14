<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbAggSyncRequest {

    /**
        民宿shid
     **/
    private $bnbShid;

    /**
        聚合房源shid
     **/
    private $aggShid;

    /**
        聚合房源rpId
     **/
    private $aggRpId;

    /**
        聚合房源srid
     **/
    private $aggSrid;

    /**
        民宿rpid
     **/
    private $bnbRpId;

    /**
        民宿srid
     **/
    private $bnbSrid;

    /**
        luid
     **/
    private $luid;

    /**
        小猪门店ID
     **/
    private $xiaozhuHid;

    /**
        聚合房源房型分销时间
     **/
    private $aggSridCtime;

    /**
        聚合房源门店分销时间
     **/
    private $aggShidCtime;

    /**
        民宿rid
     **/
    private $bnbRid;

    /**
        聚合房源hid
     **/
    private $aggHid;

    /**
        聚合房源rid
     **/
    private $aggRid;

    /**
        进酒房源hid
     **/
    private $hotelHid;

    /**
        进酒房源shid
     **/
    private $hotelShid;

    /**
        聚合房源房型分销结果
     **/
    private $aggSridResult;

    /**
        聚合房源门店分销成功
     **/
    private $aggShidResult;

    /**
        进酒房源rid
     **/
    private $hotelRid;

    /**
        进酒房源rp
     **/
    private $hotelRpId;

    /**
        进酒房源srid
     **/
    private $hotelSrid;

    /**
        民宿hid
     **/
    private $bnbHid;

    /**
        聚合类型
     **/
    private $aggType;


    public function getBnbShid() : string{
        return $this->bnbShid;
    }

    public function setBnbShid(string $bnbShid){
        $this->bnbShid = $bnbShid;
    }

    public function getAggShid() : string{
        return $this->aggShid;
    }

    public function setAggShid(string $aggShid){
        $this->aggShid = $aggShid;
    }

    public function getAggRpId() : string{
        return $this->aggRpId;
    }

    public function setAggRpId(string $aggRpId){
        $this->aggRpId = $aggRpId;
    }

    public function getAggSrid() : string{
        return $this->aggSrid;
    }

    public function setAggSrid(string $aggSrid){
        $this->aggSrid = $aggSrid;
    }

    public function getBnbRpId() : string{
        return $this->bnbRpId;
    }

    public function setBnbRpId(string $bnbRpId){
        $this->bnbRpId = $bnbRpId;
    }

    public function getBnbSrid() : string{
        return $this->bnbSrid;
    }

    public function setBnbSrid(string $bnbSrid){
        $this->bnbSrid = $bnbSrid;
    }

    public function getLuid() : string{
        return $this->luid;
    }

    public function setLuid(string $luid){
        $this->luid = $luid;
    }

    public function getXiaozhuHid() : string{
        return $this->xiaozhuHid;
    }

    public function setXiaozhuHid(string $xiaozhuHid){
        $this->xiaozhuHid = $xiaozhuHid;
    }

    public function getAggSridCtime() : string{
        return $this->aggSridCtime;
    }

    public function setAggSridCtime(string $aggSridCtime){
        $this->aggSridCtime = $aggSridCtime;
    }

    public function getAggShidCtime() : string{
        return $this->aggShidCtime;
    }

    public function setAggShidCtime(string $aggShidCtime){
        $this->aggShidCtime = $aggShidCtime;
    }

    public function getBnbRid() : string{
        return $this->bnbRid;
    }

    public function setBnbRid(string $bnbRid){
        $this->bnbRid = $bnbRid;
    }

    public function getAggHid() : string{
        return $this->aggHid;
    }

    public function setAggHid(string $aggHid){
        $this->aggHid = $aggHid;
    }

    public function getAggRid() : string{
        return $this->aggRid;
    }

    public function setAggRid(string $aggRid){
        $this->aggRid = $aggRid;
    }

    public function getHotelHid() : string{
        return $this->hotelHid;
    }

    public function setHotelHid(string $hotelHid){
        $this->hotelHid = $hotelHid;
    }

    public function getHotelShid() : string{
        return $this->hotelShid;
    }

    public function setHotelShid(string $hotelShid){
        $this->hotelShid = $hotelShid;
    }

    public function getAggSridResult() : string{
        return $this->aggSridResult;
    }

    public function setAggSridResult(string $aggSridResult){
        $this->aggSridResult = $aggSridResult;
    }

    public function getAggShidResult() : string{
        return $this->aggShidResult;
    }

    public function setAggShidResult(string $aggShidResult){
        $this->aggShidResult = $aggShidResult;
    }

    public function getHotelRid() : string{
        return $this->hotelRid;
    }

    public function setHotelRid(string $hotelRid){
        $this->hotelRid = $hotelRid;
    }

    public function getHotelRpId() : string{
        return $this->hotelRpId;
    }

    public function setHotelRpId(string $hotelRpId){
        $this->hotelRpId = $hotelRpId;
    }

    public function getHotelSrid() : string{
        return $this->hotelSrid;
    }

    public function setHotelSrid(string $hotelSrid){
        $this->hotelSrid = $hotelSrid;
    }

    public function getBnbHid() : string{
        return $this->bnbHid;
    }

    public function setBnbHid(string $bnbHid){
        $this->bnbHid = $bnbHid;
    }

    public function getAggType() : string{
        return $this->aggType;
    }

    public function setAggType(string $aggType){
        $this->aggType = $aggType;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.agg.sync";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bnbShid)) {
            $requestParam["bnb_shid"] = TopUtil::convertBasic($this->bnbShid);
        }

        if (!TopUtil::checkEmpty($this->aggShid)) {
            $requestParam["agg_shid"] = TopUtil::convertBasic($this->aggShid);
        }

        if (!TopUtil::checkEmpty($this->aggRpId)) {
            $requestParam["agg_rp_id"] = TopUtil::convertBasic($this->aggRpId);
        }

        if (!TopUtil::checkEmpty($this->aggSrid)) {
            $requestParam["agg_srid"] = TopUtil::convertBasic($this->aggSrid);
        }

        if (!TopUtil::checkEmpty($this->bnbRpId)) {
            $requestParam["bnb_rp_id"] = TopUtil::convertBasic($this->bnbRpId);
        }

        if (!TopUtil::checkEmpty($this->bnbSrid)) {
            $requestParam["bnb_srid"] = TopUtil::convertBasic($this->bnbSrid);
        }

        if (!TopUtil::checkEmpty($this->luid)) {
            $requestParam["luid"] = TopUtil::convertBasic($this->luid);
        }

        if (!TopUtil::checkEmpty($this->xiaozhuHid)) {
            $requestParam["xiaozhu_hid"] = TopUtil::convertBasic($this->xiaozhuHid);
        }

        if (!TopUtil::checkEmpty($this->aggSridCtime)) {
            $requestParam["agg_srid_ctime"] = TopUtil::convertBasic($this->aggSridCtime);
        }

        if (!TopUtil::checkEmpty($this->aggShidCtime)) {
            $requestParam["agg_shid_ctime"] = TopUtil::convertBasic($this->aggShidCtime);
        }

        if (!TopUtil::checkEmpty($this->bnbRid)) {
            $requestParam["bnb_rid"] = TopUtil::convertBasic($this->bnbRid);
        }

        if (!TopUtil::checkEmpty($this->aggHid)) {
            $requestParam["agg_hid"] = TopUtil::convertBasic($this->aggHid);
        }

        if (!TopUtil::checkEmpty($this->aggRid)) {
            $requestParam["agg_rid"] = TopUtil::convertBasic($this->aggRid);
        }

        if (!TopUtil::checkEmpty($this->hotelHid)) {
            $requestParam["hotel_hid"] = TopUtil::convertBasic($this->hotelHid);
        }

        if (!TopUtil::checkEmpty($this->hotelShid)) {
            $requestParam["hotel_shid"] = TopUtil::convertBasic($this->hotelShid);
        }

        if (!TopUtil::checkEmpty($this->aggSridResult)) {
            $requestParam["agg_srid_result"] = TopUtil::convertBasic($this->aggSridResult);
        }

        if (!TopUtil::checkEmpty($this->aggShidResult)) {
            $requestParam["agg_shid_result"] = TopUtil::convertBasic($this->aggShidResult);
        }

        if (!TopUtil::checkEmpty($this->hotelRid)) {
            $requestParam["hotel_rid"] = TopUtil::convertBasic($this->hotelRid);
        }

        if (!TopUtil::checkEmpty($this->hotelRpId)) {
            $requestParam["hotel_rp_id"] = TopUtil::convertBasic($this->hotelRpId);
        }

        if (!TopUtil::checkEmpty($this->hotelSrid)) {
            $requestParam["hotel_srid"] = TopUtil::convertBasic($this->hotelSrid);
        }

        if (!TopUtil::checkEmpty($this->bnbHid)) {
            $requestParam["bnb_hid"] = TopUtil::convertBasic($this->bnbHid);
        }

        if (!TopUtil::checkEmpty($this->aggType)) {
            $requestParam["agg_type"] = TopUtil::convertBasic($this->aggType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbRadarCallbackRequest {

    /**
        回调参数URL
     **/
    private $ossUrl;

    /**
        业务参数
     **/
    private $extraMap;

    /**
        酒店ID
     **/
    private $hotelId;


    public function getOssUrl() : string{
        return $this->ossUrl;
    }

    public function setOssUrl(string $ossUrl){
        $this->ossUrl = $ossUrl;
    }

    public function getExtraMap() : array{
        return $this->extraMap;
    }

    public function setExtraMap(array $extraMap){
        $this->extraMap = $extraMap;
    }

    public function getHotelId() : string{
        return $this->hotelId;
    }

    public function setHotelId(string $hotelId){
        $this->hotelId = $hotelId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.radar.callback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ossUrl)) {
            $requestParam["oss_url"] = TopUtil::convertBasic($this->ossUrl);
        }

        if (!TopUtil::checkEmpty($this->extraMap)) {
            $requestParam["extra_map"] = TopUtil::convertStruct($this->extraMap);
        }

        if (!TopUtil::checkEmpty($this->hotelId)) {
            $requestParam["hotel_id"] = TopUtil::convertBasic($this->hotelId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


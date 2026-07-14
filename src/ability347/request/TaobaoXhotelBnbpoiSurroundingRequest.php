<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpoiSurroundingRequest {

    /**
        城市code
     **/
    private $cityCode;

    /**
        经纬度
     **/
    private $latitude;

    /**
        经纬度
     **/
    private $longitude;

    /**
        poi分类直线过滤大小
     **/
    private $poiFilterDistance;


    public function getCityCode() : int{
        return $this->cityCode;
    }

    public function setCityCode(int $cityCode){
        $this->cityCode = $cityCode;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getPoiFilterDistance() : array{
        return $this->poiFilterDistance;
    }

    public function setPoiFilterDistance(array $poiFilterDistance){
        $this->poiFilterDistance = $poiFilterDistance;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpoi.surrounding";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cityCode)) {
            $requestParam["city_code"] = TopUtil::convertBasic($this->cityCode);
        }

        if (!TopUtil::checkEmpty($this->latitude)) {
            $requestParam["latitude"] = TopUtil::convertBasic($this->latitude);
        }

        if (!TopUtil::checkEmpty($this->longitude)) {
            $requestParam["longitude"] = TopUtil::convertBasic($this->longitude);
        }

        if (!TopUtil::checkEmpty($this->poiFilterDistance)) {
            $requestParam["poi_filter_distance"] = TopUtil::convertStruct($this->poiFilterDistance);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


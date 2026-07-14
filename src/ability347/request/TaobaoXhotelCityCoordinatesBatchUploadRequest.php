<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelCityCoordinatesBatchUploadRequest {

    /**
        经纬度列表
     **/
    private $coordinateList;


    public function getCoordinateList() : array{
        return $this->coordinateList;
    }

    public function setCoordinateList(array $coordinateList){
        $this->coordinateList = $coordinateList;
    }


    public function getApiName() : string {
        return "taobao.xhotel.city.coordinates.batch.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->coordinateList)) {
            $requestParam["coordinate_list"] = TopUtil::convertStructList($this->coordinateList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


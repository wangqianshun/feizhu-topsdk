<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelCityCoordinatesBatchDownloadRequest {

    /**
        上传的经纬度批次号
     **/
    private $batchId;


    public function getBatchId() : int{
        return $this->batchId;
    }

    public function setBatchId(int $batchId){
        $this->batchId = $batchId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.city.coordinates.batch.download";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->batchId)) {
            $requestParam["batch_id"] = TopUtil::convertBasic($this->batchId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


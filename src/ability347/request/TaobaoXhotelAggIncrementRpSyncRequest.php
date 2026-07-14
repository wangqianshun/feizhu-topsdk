<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelAggIncrementRpSyncRequest {

    /**
        rid
     **/
    private $rid;

    /**
        rpid
     **/
    private $rpId;


    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getRpId() : int{
        return $this->rpId;
    }

    public function setRpId(int $rpId){
        $this->rpId = $rpId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.agg.increment.rp.sync";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
        }

        if (!TopUtil::checkEmpty($this->rpId)) {
            $requestParam["rp_id"] = TopUtil::convertBasic($this->rpId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


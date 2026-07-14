<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomsIncrementRequest {

    /**
        批量全量推送房型共享库存,一次最多修改30个房型。json encode。示例：[{"out_rid":"hotel1_roomtype22","vendor":"","allotment_start_Time":"","allotment_end_time":"","superbook_start_time":"","superbook_end_time":"","roomQuota":[{"date":2010-01-28,"quota":10,"al_quota":2,"sp_quota":3}]}] 其中al_quota为保留房库存，sp_quota为超预定库存，quota为物理库存。al_quota和sp_quota需要向运营申请权限才可维护。allotment_start_Time和allotment_end_time为保留房库存开始和截止时间；superbook_start_time和superbook_end_time为超预定库存开始和截止时间。
     **/
    private $roomQuotaMap;


    public function getRoomQuotaMap() : string{
        return $this->roomQuotaMap;
    }

    public function setRoomQuotaMap(string $roomQuotaMap){
        $this->roomQuotaMap = $roomQuotaMap;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rooms.increment";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->roomQuotaMap)) {
            $requestParam["room_quota_map"] = TopUtil::convertBasic($this->roomQuotaMap);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


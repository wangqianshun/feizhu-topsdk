<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomtypeGetRequest {

    /**
        废弃，使用商家房型ID
     **/
    private $rid;

    /**
        商家房型ID
     **/
    private $outerId;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;


    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }


    public function getApiName() : string {
        return "taobao.xhotel.roomtype.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


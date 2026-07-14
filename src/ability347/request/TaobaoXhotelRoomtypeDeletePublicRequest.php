<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomtypeDeletePublicRequest {

    /**
        房型rid ，传参方式：rid    或者   outer_id+vendor
     **/
    private $rid;

    /**
        vendor
     **/
    private $vendor;

    /**
        外部房型ID
     **/
    private $outerRid;

    /**
        具体操作人，比如酒店帐号、小二名称等
     **/
    private $operator;


    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOuterRid() : string{
        return $this->outerRid;
    }

    public function setOuterRid(string $outerRid){
        $this->outerRid = $outerRid;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }


    public function getApiName() : string {
        return "taobao.xhotel.roomtype.delete.public";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outerRid)) {
            $requestParam["outer_rid"] = TopUtil::convertBasic($this->outerRid);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


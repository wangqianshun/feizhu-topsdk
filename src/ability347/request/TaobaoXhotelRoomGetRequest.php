<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomGetRequest {

    /**
        卖家渠道 如果gid为空，那么out_rid和vendor都不能为空。 支持通过gid或者通过out_rid和vendor来获取商品
     **/
    private $vendor;

    /**
        外部房型id 如果gid为空，那么out_rid和vendor都不能为空 支持通过gid或者通过out_rid和vendor来获取商品
     **/
    private $outRid;

    /**
        废弃
     **/
    private $gid;


    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }


    public function getApiName() : string {
        return "taobao.xhotel.room.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


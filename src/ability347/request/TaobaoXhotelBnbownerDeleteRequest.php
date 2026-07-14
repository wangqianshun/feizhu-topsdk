<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbownerDeleteRequest {

    /**
        对接系统商名称：可为空不要乱填，需要申请后使用，默认taobao
     **/
    private $vendor;

    /**
        房东Id，系统商outer_id
     **/
    private $outerId;


    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbowner.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


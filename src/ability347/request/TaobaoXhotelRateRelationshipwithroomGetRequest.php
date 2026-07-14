<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateRelationshipwithroomGetRequest {

    /**
        rpId
     **/
    private $rpId;

    /**
        页数
     **/
    private $pageNo;


    public function getRpId() : int{
        return $this->rpId;
    }

    public function setRpId(int $rpId){
        $this->rpId = $rpId;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.relationshipwithroom.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rpId)) {
            $requestParam["rp_id"] = TopUtil::convertBasic($this->rpId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


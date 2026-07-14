<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateRelationshipwithrpGetRequest {

    /**
        宝贝的gid
     **/
    private $gid;

    /**
        页数，可根据此值展示某页的数据。不填默认为1
     **/
    private $pageNo;


    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.relationshipwithrp.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
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


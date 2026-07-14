<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpromoDeleteRequest {

    /**
        外部活动code
     **/
    private $outerActivityCode;


    public function getOuterActivityCode() : string{
        return $this->outerActivityCode;
    }

    public function setOuterActivityCode(string $outerActivityCode){
        $this->outerActivityCode = $outerActivityCode;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outerActivityCode)) {
            $requestParam["outer_activity_code"] = TopUtil::convertBasic($this->outerActivityCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbownerAddAddOwnerParam;

class TaobaoXhotelBnbownerAddRequest {

    /**
        添加房东信息的对象
     **/
    private $addOwnerParam;


    public function getAddOwnerParam() : TaobaoXhotelBnbownerAddAddOwnerParam{
        return $this->addOwnerParam;
    }

    public function setAddOwnerParam(TaobaoXhotelBnbownerAddAddOwnerParam $addOwnerParam){
        $this->addOwnerParam = $addOwnerParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbowner.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addOwnerParam)) {
            $requestParam["add_owner_param"] = TopUtil::convertStruct($this->addOwnerParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


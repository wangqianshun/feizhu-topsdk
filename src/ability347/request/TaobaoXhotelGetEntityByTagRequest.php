<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelGetEntityByTagRequest {

    /**
        标签
     **/
    private $tag;

    /**
        查询token，填入上一页查询的返回结果，只能按顺序单线程查询
     **/
    private $tokenStr;


    public function getTag() : int{
        return $this->tag;
    }

    public function setTag(int $tag){
        $this->tag = $tag;
    }

    public function getTokenStr() : string{
        return $this->tokenStr;
    }

    public function setTokenStr(string $tokenStr){
        $this->tokenStr = $tokenStr;
    }


    public function getApiName() : string {
        return "taobao.xhotel.get.entity.by.tag";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tag)) {
            $requestParam["tag"] = TopUtil::convertBasic($this->tag);
        }

        if (!TopUtil::checkEmpty($this->tokenStr)) {
            $requestParam["token_str"] = TopUtil::convertBasic($this->tokenStr);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


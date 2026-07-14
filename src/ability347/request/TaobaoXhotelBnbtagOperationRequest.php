<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbtagOperationRequest {

    /**
        标签集
     **/
    private $tagList;

    /**
        操作人名
     **/
    private $operation;


    public function getTagList() : array{
        return $this->tagList;
    }

    public function setTagList(array $tagList){
        $this->tagList = $tagList;
    }

    public function getOperation() : string{
        return $this->operation;
    }

    public function setOperation(string $operation){
        $this->operation = $operation;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbtag.operation";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tagList)) {
            $requestParam["tag_list"] = TopUtil::convertStructList($this->tagList);
        }

        if (!TopUtil::checkEmpty($this->operation)) {
            $requestParam["operation"] = TopUtil::convertBasic($this->operation);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


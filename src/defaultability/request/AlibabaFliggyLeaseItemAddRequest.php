<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseItemAddAddItemRequest;

class AlibabaFliggyLeaseItemAddRequest {

    /**
        新增商品请求
     **/
    private $addItemRequest;


    public function getAddItemRequest() : AlibabaFliggyLeaseItemAddAddItemRequest{
        return $this->addItemRequest;
    }

    public function setAddItemRequest(AlibabaFliggyLeaseItemAddAddItemRequest $addItemRequest){
        $this->addItemRequest = $addItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.item.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addItemRequest)) {
            $requestParam["add_item_request"] = TopUtil::convertStruct($this->addItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseItemUpdateUpdateItemRequest;

class AlibabaFliggyLeaseItemUpdateRequest {

    /**
        更新商品请求
     **/
    private $updateItemRequest;


    public function getUpdateItemRequest() : AlibabaFliggyLeaseItemUpdateUpdateItemRequest{
        return $this->updateItemRequest;
    }

    public function setUpdateItemRequest(AlibabaFliggyLeaseItemUpdateUpdateItemRequest $updateItemRequest){
        $this->updateItemRequest = $updateItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.item.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updateItemRequest)) {
            $requestParam["update_item_request"] = TopUtil::convertStruct($this->updateItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


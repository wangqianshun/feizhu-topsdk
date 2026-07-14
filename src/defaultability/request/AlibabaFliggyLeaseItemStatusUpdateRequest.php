<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseItemStatusUpdateUpdateItemStatusRequest;

class AlibabaFliggyLeaseItemStatusUpdateRequest {

    /**
        商品上下架请求
     **/
    private $updateItemStatusRequest;


    public function getUpdateItemStatusRequest() : AlibabaFliggyLeaseItemStatusUpdateUpdateItemStatusRequest{
        return $this->updateItemStatusRequest;
    }

    public function setUpdateItemStatusRequest(AlibabaFliggyLeaseItemStatusUpdateUpdateItemStatusRequest $updateItemStatusRequest){
        $this->updateItemStatusRequest = $updateItemStatusRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.item.status.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updateItemStatusRequest)) {
            $requestParam["update_item_status_request"] = TopUtil::convertStruct($this->updateItemStatusRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseItemInventoryUpdateUpdateInventoryRequest;

class AlibabaFliggyLeaseItemInventoryUpdateRequest {

    /**
        商品库存修改请求
     **/
    private $updateInventoryRequest;


    public function getUpdateInventoryRequest() : AlibabaFliggyLeaseItemInventoryUpdateUpdateInventoryRequest{
        return $this->updateInventoryRequest;
    }

    public function setUpdateInventoryRequest(AlibabaFliggyLeaseItemInventoryUpdateUpdateInventoryRequest $updateInventoryRequest){
        $this->updateInventoryRequest = $updateInventoryRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.item.inventory.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updateInventoryRequest)) {
            $requestParam["update_inventory_request"] = TopUtil::convertStruct($this->updateInventoryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


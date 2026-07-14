<?php
namespace FeiZhu\TopSdk\Ability198\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsSellerWritelogisticsnodeRequest {

    /**
        物流发货单号
     **/
    private $lpOrderId;

    /**
        物流节点
     **/
    private $nodes;


    public function getLpOrderId() : int{
        return $this->lpOrderId;
    }

    public function setLpOrderId(int $lpOrderId){
        $this->lpOrderId = $lpOrderId;
    }

    public function getNodes() : array{
        return $this->nodes;
    }

    public function setNodes(array $nodes){
        $this->nodes = $nodes;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.seller.writelogisticsnode";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->lpOrderId)) {
            $requestParam["lp_order_id"] = TopUtil::convertBasic($this->lpOrderId);
        }

        if (!TopUtil::checkEmpty($this->nodes)) {
            $requestParam["nodes"] = TopUtil::convertStructList($this->nodes);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


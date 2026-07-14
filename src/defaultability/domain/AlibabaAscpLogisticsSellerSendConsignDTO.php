<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerSendConsignDTO {

    /**
        物流发货单号
     **/
    public $lp_order_id;

    /**
        发货文案描述
     **/
    public $consign_desc;


    public function getLpOrderId() : int{
        return $this->lp_order_id;
    }

    public function setLpOrderId(int $lpOrderId){
        $this->lp_order_id = $lpOrderId;
    }

    public function getConsignDesc() : string{
        return $this->consign_desc;
    }

    public function setConsignDesc(string $consignDesc){
        $this->consign_desc = $consignDesc;
    }


}


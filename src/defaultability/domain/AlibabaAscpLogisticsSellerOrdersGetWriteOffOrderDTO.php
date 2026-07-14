<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerOrdersGetWriteOffOrderDTO {

    /**
        交易单所包含的商品列表
     **/
    public $goods_list;

    /**
        核销订单Id
     **/
    public $lp_order_id;

    /**
        淘宝交易Id
     **/
    public $trade_id;


    public function getGoodsList() : array{
        return $this->goods_list;
    }

    public function setGoodsList(array $goodsList){
        $this->goods_list = $goodsList;
    }

    public function getLpOrderId() : string{
        return $this->lp_order_id;
    }

    public function setLpOrderId(string $lpOrderId){
        $this->lp_order_id = $lpOrderId;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }


}


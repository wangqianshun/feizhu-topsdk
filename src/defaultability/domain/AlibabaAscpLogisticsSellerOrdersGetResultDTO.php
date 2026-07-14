<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerOrdersGetResultDTO {

    /**
        返回核销订单列表
     **/
    public $writeoff_order_list;

    /**
        是否成功
     **/
    public $success;


    public function getWriteoffOrderList() : array{
        return $this->writeoff_order_list;
    }

    public function setWriteoffOrderList(array $writeoffOrderList){
        $this->writeoff_order_list = $writeoffOrderList;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


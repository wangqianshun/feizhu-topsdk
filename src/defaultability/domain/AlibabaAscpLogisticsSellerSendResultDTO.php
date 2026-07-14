<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerSendResultDTO {

    /**
        执行结果
     **/
    public $success;

    /**
        -
     **/
    public $consign;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getConsign() : AlibabaAscpLogisticsSellerSendConsignDTO{
        return $this->consign;
    }

    public function setConsign(AlibabaAscpLogisticsSellerSendConsignDTO $consign){
        $this->consign = $consign;
    }


}


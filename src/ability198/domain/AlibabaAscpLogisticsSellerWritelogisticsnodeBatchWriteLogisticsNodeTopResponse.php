<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsSellerWritelogisticsnodeBatchWriteLogisticsNodeTopResponse {

    /**
        true成功，false失败
     **/
    public $success;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


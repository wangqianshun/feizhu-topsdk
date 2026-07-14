<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaAscpLogisticsSellerWriteoffResultDTO {

    /**
        是否核销成功
     **/
    public $success;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


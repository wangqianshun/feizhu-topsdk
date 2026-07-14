<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoLogisticsDummySendShipping {

    /**
        返回发货是否成功。
     **/
    public $is_success;


    public function getIsSuccess() : bool{
        return $this->is_success;
    }

    public function setIsSuccess(bool $isSuccess){
        $this->is_success = $isSuccess;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelIntlRateUpdateUpdateRateParam {

    /**
        rate更新列表
     **/
    public $update_rate_d_o_list;

    /**
        过期时间
     **/
    public $expire_time;

    /**
        供应商
     **/
    public $supplier;


    public function getUpdateRateDOList() : array{
        return $this->update_rate_d_o_list;
    }

    public function setUpdateRateDOList(array $updateRateDOList){
        $this->update_rate_d_o_list = $updateRateDOList;
    }

    public function getExpireTime() : string{
        return $this->expire_time;
    }

    public function setExpireTime(string $expireTime){
        $this->expire_time = $expireTime;
    }

    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }


}


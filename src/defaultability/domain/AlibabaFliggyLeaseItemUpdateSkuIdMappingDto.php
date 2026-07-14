<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateSkuIdMappingDto {

    /**
        飞猪skuId
     **/
    public $sku_id;

    /**
        外部skuId
     **/
    public $out_sku_id;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getOutSkuId() : string{
        return $this->out_sku_id;
    }

    public function setOutSkuId(string $outSkuId){
        $this->out_sku_id = $outSkuId;
    }


}


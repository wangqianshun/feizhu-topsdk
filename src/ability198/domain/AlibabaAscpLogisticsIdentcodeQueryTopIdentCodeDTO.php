<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsIdentcodeQueryTopIdentCodeDTO {

    /**
        识别码
     **/
    public $ident_code;

    /**
        识别码类型，SN/IMEI
     **/
    public $ident_type;

    /**
        品牌ID
     **/
    public $brand_id;

    /**
        根类目ID
     **/
    public $root_cat_id;

    /**
        是否可用
     **/
    public $available;

    /**
        不可用原因
     **/
    public $un_available_reason;


    public function getIdentCode() : string{
        return $this->ident_code;
    }

    public function setIdentCode(string $identCode){
        $this->ident_code = $identCode;
    }

    public function getIdentType() : string{
        return $this->ident_type;
    }

    public function setIdentType(string $identType){
        $this->ident_type = $identType;
    }

    public function getBrandId() : string{
        return $this->brand_id;
    }

    public function setBrandId(string $brandId){
        $this->brand_id = $brandId;
    }

    public function getRootCatId() : string{
        return $this->root_cat_id;
    }

    public function setRootCatId(string $rootCatId){
        $this->root_cat_id = $rootCatId;
    }

    public function getAvailable() : bool{
        return $this->available;
    }

    public function setAvailable(bool $available){
        $this->available = $available;
    }

    public function getUnAvailableReason() : string{
        return $this->un_available_reason;
    }

    public function setUnAvailableReason(string $unAvailableReason){
        $this->un_available_reason = $unAvailableReason;
    }


}


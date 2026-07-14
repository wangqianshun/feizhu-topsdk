<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoLogisticsPartnersGetLogisticsPartner {

    /**
        物流公司揽收和资费详细信息
     **/
    public $carriage;

    /**
        揽收说明信息
     **/
    public $cover_remark;

    /**
        物流公司详细信息
     **/
    public $partner;

    /**
        不可送达的说明信息
     **/
    public $uncover_remark;


    public function getCarriage() : TaobaoLogisticsPartnersGetCarriageDetail{
        return $this->carriage;
    }

    public function setCarriage(TaobaoLogisticsPartnersGetCarriageDetail $carriage){
        $this->carriage = $carriage;
    }

    public function getCoverRemark() : string{
        return $this->cover_remark;
    }

    public function setCoverRemark(string $coverRemark){
        $this->cover_remark = $coverRemark;
    }

    public function getPartner() : TaobaoLogisticsPartnersGetPartnerDetail{
        return $this->partner;
    }

    public function setPartner(TaobaoLogisticsPartnersGetPartnerDetail $partner){
        $this->partner = $partner;
    }

    public function getUncoverRemark() : string{
        return $this->uncover_remark;
    }

    public function setUncoverRemark(string $uncoverRemark){
        $this->uncover_remark = $uncoverRemark;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatExposureModule {

    /**
        返回结果
     **/
    public $seller_stat_exposure_element_list;


    public function getSellerStatExposureElementList() : array{
        return $this->seller_stat_exposure_element_list;
    }

    public function setSellerStatExposureElementList(array $sellerStatExposureElementList){
        $this->seller_stat_exposure_element_list = $sellerStatExposureElementList;
    }


}


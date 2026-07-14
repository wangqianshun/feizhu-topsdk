<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatHotshidModule {

    /**
        热销标准酒店中卖家覆盖的数量
     **/
    public $covered_hid_amount;

    /**
        热销标准酒店中卖家可售的酒店数量
     **/
    public $can_sale_hid_amount;


    public function getCoveredHidAmount() : string{
        return $this->covered_hid_amount;
    }

    public function setCoveredHidAmount(string $coveredHidAmount){
        $this->covered_hid_amount = $coveredHidAmount;
    }

    public function getCanSaleHidAmount() : string{
        return $this->can_sale_hid_amount;
    }

    public function setCanSaleHidAmount(string $canSaleHidAmount){
        $this->can_sale_hid_amount = $canSaleHidAmount;
    }


}


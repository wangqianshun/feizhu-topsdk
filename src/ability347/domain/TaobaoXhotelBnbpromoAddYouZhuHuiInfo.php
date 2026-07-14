<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddYouZhuHuiInfo {

    /**
        会员F1等级折扣
     **/
    public $level_1_discount;

    /**
        会员F2等级折扣
     **/
    public $level_2_discount;

    /**
        会员F3等级折扣
     **/
    public $level_3_discount;

    /**
        会员F4等级折扣
     **/
    public $level_4_discount;


    public function getLevel1Discount() : int{
        return $this->level_1_discount;
    }

    public function setLevel1Discount(int $level1Discount){
        $this->level_1_discount = $level1Discount;
    }

    public function getLevel2Discount() : int{
        return $this->level_2_discount;
    }

    public function setLevel2Discount(int $level2Discount){
        $this->level_2_discount = $level2Discount;
    }

    public function getLevel3Discount() : int{
        return $this->level_3_discount;
    }

    public function setLevel3Discount(int $level3Discount){
        $this->level_3_discount = $level3Discount;
    }

    public function getLevel4Discount() : int{
        return $this->level_4_discount;
    }

    public function setLevel4Discount(int $level4Discount){
        $this->level_4_discount = $level4Discount;
    }


}


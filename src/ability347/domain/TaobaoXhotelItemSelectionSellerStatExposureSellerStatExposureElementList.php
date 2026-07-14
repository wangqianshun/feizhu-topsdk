<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatExposureSellerStatExposureElementList {

    /**
        日期
     **/
    public $stat_date;

    /**
        曝光率
     **/
    public $exposed_percent;

    /**
        shid维度访问量
     **/
    public $shid_total_amount;

    /**
        对应商品曝光数量
     **/
    public $exposed_amount;


    public function getStatDate() : string{
        return $this->stat_date;
    }

    public function setStatDate(string $statDate){
        $this->stat_date = $statDate;
    }

    public function getExposedPercent() : string{
        return $this->exposed_percent;
    }

    public function setExposedPercent(string $exposedPercent){
        $this->exposed_percent = $exposedPercent;
    }

    public function getShidTotalAmount() : string{
        return $this->shid_total_amount;
    }

    public function setShidTotalAmount(string $shidTotalAmount){
        $this->shid_total_amount = $shidTotalAmount;
    }

    public function getExposedAmount() : string{
        return $this->exposed_amount;
    }

    public function setExposedAmount(string $exposedAmount){
        $this->exposed_amount = $exposedAmount;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpriceAppealPriceAppealItem {

    /**
        卖家酒店
     **/
    public $hid;

    /**
        标准酒店
     **/
    public $shid;

    /**
        标准房型数
     **/
    public $srid_cnt;

    /**
        卖家ID
     **/
    public $seller_id;

    /**
        卖家房型ji
     **/
    public $srid_list;


    public function getHid() : string{
        return $this->hid;
    }

    public function setHid(string $hid){
        $this->hid = $hid;
    }

    public function getShid() : string{
        return $this->shid;
    }

    public function setShid(string $shid){
        $this->shid = $shid;
    }

    public function getSridCnt() : string{
        return $this->srid_cnt;
    }

    public function setSridCnt(string $sridCnt){
        $this->srid_cnt = $sridCnt;
    }

    public function getSellerId() : string{
        return $this->seller_id;
    }

    public function setSellerId(string $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getSridList() : string{
        return $this->srid_list;
    }

    public function setSridList(string $sridList){
        $this->srid_list = $sridList;
    }


}


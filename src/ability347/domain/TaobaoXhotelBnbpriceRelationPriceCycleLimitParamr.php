<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpriceRelationPriceCycleLimitParamr {

    /**
        卖家房型id
     **/
    public $hid;

    /**
        价态限制关系
     **/
    public $tag;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getTag() : int{
        return $this->tag;
    }

    public function setTag(int $tag){
        $this->tag = $tag;
    }


}


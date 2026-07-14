<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelpriceTrackBedInfo {

    /**
        床类型：0:大床，2:单人床，7:特大床
     **/
    public $bed_type;

    /**
        床张数
     **/
    public $bed_num;

    /**
        床宽度（无值可不传）
     **/
    public $width;


    public function getBedType() : string{
        return $this->bed_type;
    }

    public function setBedType(string $bedType){
        $this->bed_type = $bedType;
    }

    public function getBedNum() : int{
        return $this->bed_num;
    }

    public function setBedNum(int $bedNum){
        $this->bed_num = $bedNum;
    }

    public function getWidth() : string{
        return $this->width;
    }

    public function setWidth(string $width){
        $this->width = $width;
    }


}


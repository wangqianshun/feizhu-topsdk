<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelpriceTrackBedInfoGroup {

    /**
        床型信息列表
     **/
    public $bed_infos;


    public function getBedInfos() : array{
        return $this->bed_infos;
    }

    public function setBedInfos(array $bedInfos){
        $this->bed_infos = $bedInfos;
    }


}


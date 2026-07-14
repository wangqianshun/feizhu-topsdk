<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelpriceTrackBedInfoDTO {

    /**
        床型简单描述
     **/
    public $simple_desc;

    /**
        床型信息列表
     **/
    public $bed_info_groups;


    public function getSimpleDesc() : string{
        return $this->simple_desc;
    }

    public function setSimpleDesc(string $simpleDesc){
        $this->simple_desc = $simpleDesc;
    }

    public function getBedInfoGroups() : array{
        return $this->bed_info_groups;
    }

    public function setBedInfoGroups(array $bedInfoGroups){
        $this->bed_info_groups = $bedInfoGroups;
    }


}


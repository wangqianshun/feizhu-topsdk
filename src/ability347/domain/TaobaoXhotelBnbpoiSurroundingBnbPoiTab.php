<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpoiSurroundingBnbPoiTab {

    /**
        pou分类
     **/
    public $tab_name;

    /**
        标识
     **/
    public $tab_type;

    /**
        poi相关信息
     **/
    public $poi_entity_list;


    public function getTabName() : string{
        return $this->tab_name;
    }

    public function setTabName(string $tabName){
        $this->tab_name = $tabName;
    }

    public function getTabType() : string{
        return $this->tab_type;
    }

    public function setTabType(string $tabType){
        $this->tab_type = $tabType;
    }

    public function getPoiEntityList() : array{
        return $this->poi_entity_list;
    }

    public function setPoiEntityList(array $poiEntityList){
        $this->poi_entity_list = $poiEntityList;
    }


}


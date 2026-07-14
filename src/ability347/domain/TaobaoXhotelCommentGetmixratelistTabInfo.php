<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistTabInfo {

    /**
        标签的态度 1好 0中性 -1 差
     **/
    public $attitude;

    /**
        tab是否点击
     **/
    public $is_click;

    /**
        tab编码
     **/
    public $tab_code;

    /**
        tab下的统计数据
     **/
    public $tab_detail;

    /**
        id
     **/
    public $tab_id;

    /**
        名称
     **/
    public $tab_name;

    /**
        标签的类型 0正常 1热词 2房型 3度假
     **/
    public $type;


    public function getAttitude() : int{
        return $this->attitude;
    }

    public function setAttitude(int $attitude){
        $this->attitude = $attitude;
    }

    public function getIsClick() : bool{
        return $this->is_click;
    }

    public function setIsClick(bool $isClick){
        $this->is_click = $isClick;
    }

    public function getTabCode() : string{
        return $this->tab_code;
    }

    public function setTabCode(string $tabCode){
        $this->tab_code = $tabCode;
    }

    public function getTabDetail() : string{
        return $this->tab_detail;
    }

    public function setTabDetail(string $tabDetail){
        $this->tab_detail = $tabDetail;
    }

    public function getTabId() : int{
        return $this->tab_id;
    }

    public function setTabId(int $tabId){
        $this->tab_id = $tabId;
    }

    public function getTabName() : string{
        return $this->tab_name;
    }

    public function setTabName(string $tabName){
        $this->tab_name = $tabName;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}


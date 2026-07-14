<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistAddRateEntrance {

    /**
        是否可以发表评价,0:不可以发表评价,1:可以发表评价.
     **/
    public $available;

    /**
        写点评的跳转链接
     **/
    public $jump_info;

    /**
        名称
     **/
    public $name;

    /**
        是否展示入口 0:不展示,1:展示
     **/
    public $show_status;


    public function getAvailable() : int{
        return $this->available;
    }

    public function setAvailable(int $available){
        $this->available = $available;
    }

    public function getJumpInfo() : TaobaoXhotelCommentGetmixratelistJumpInfo{
        return $this->jump_info;
    }

    public function setJumpInfo(TaobaoXhotelCommentGetmixratelistJumpInfo $jumpInfo){
        $this->jump_info = $jumpInfo;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getShowStatus() : int{
        return $this->show_status;
    }

    public function setShowStatus(int $showStatus){
        $this->show_status = $showStatus;
    }


}


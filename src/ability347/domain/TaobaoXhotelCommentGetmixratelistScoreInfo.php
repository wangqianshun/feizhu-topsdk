<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistScoreInfo {

    /**
        数量
     **/
    public $count;

    /**
        描述
     **/
    public $desc;

    /**
        标签
     **/
    public $label;

    /**
        分数
     **/
    public $score;


    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getLabel() : string{
        return $this->label;
    }

    public function setLabel(string $label){
        $this->label = $label;
    }

    public function getScore() : string{
        return $this->score;
    }

    public function setScore(string $score){
        $this->score = $score;
    }


}


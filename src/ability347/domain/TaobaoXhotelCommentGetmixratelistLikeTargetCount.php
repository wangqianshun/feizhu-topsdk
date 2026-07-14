<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistLikeTargetCount {

    /**
        目标对象的赞数量或者踩数量
     **/
    public $count;

    /**
        目标对象的ID
     **/
    public $target_id;

    /**
        针对当前targetId,是否点赞过或踩过
     **/
    public $voted;


    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getTargetId() : int{
        return $this->target_id;
    }

    public function setTargetId(int $targetId){
        $this->target_id = $targetId;
    }

    public function getVoted() : bool{
        return $this->voted;
    }

    public function setVoted(bool $voted){
        $this->voted = $voted;
    }


}


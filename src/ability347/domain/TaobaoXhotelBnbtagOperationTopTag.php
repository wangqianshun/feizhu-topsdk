<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbtagOperationTopTag {

    /**
        对象id
     **/
    public $item_id;

    /**
        类型
     **/
    public $type;

    /**
        标签ID
     **/
    public $tag_id;

    /**
        标签是否需要申请审核
     **/
    public $has_approval;

    /**
        新增还是
     **/
    public $add_or_remove;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getTagId() : int{
        return $this->tag_id;
    }

    public function setTagId(int $tagId){
        $this->tag_id = $tagId;
    }

    public function getHasApproval() : bool{
        return $this->has_approval;
    }

    public function setHasApproval(bool $hasApproval){
        $this->has_approval = $hasApproval;
    }

    public function getAddOrRemove() : bool{
        return $this->add_or_remove;
    }

    public function setAddOrRemove(bool $addOrRemove){
        $this->add_or_remove = $addOrRemove;
    }


}


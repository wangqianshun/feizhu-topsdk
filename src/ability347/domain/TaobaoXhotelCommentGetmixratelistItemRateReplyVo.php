<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistItemRateReplyVo {

    /**
        业务类型
     **/
    public $biz_type;

    /**
        内容
     **/
    public $content;

    /**
        创建日期
     **/
    public $gmt_create;

    /**
        与主评间隔天数
     **/
    public $interval_day;

    /**
        图片信息
     **/
    public $media_info;

    /**
        当前用户的评价 0:不是, 1:是
     **/
    public $owner;

    /**
        回复的是那一条，如果是回复主评为0，否则为追评id，组成树形结构
     **/
    public $parent_id;

    /**
        被回复人的冗余信息
     **/
    public $parent_info;

    /**
        该条回复的id
     **/
    public $reply_id;

    /**
        回复类型 0买家追评 1卖家回复
     **/
    public $reply_type;

    /**
        状态
     **/
    public $status;

    /**
        酒店类目是标准酒店ID ，用来分库
     **/
    public $travel_item_id;

    /**
        用户名称,已脱敏
     **/
    public $user_nick;


    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getIntervalDay() : int{
        return $this->interval_day;
    }

    public function setIntervalDay(int $intervalDay){
        $this->interval_day = $intervalDay;
    }

    public function getMediaInfo() : string{
        return $this->media_info;
    }

    public function setMediaInfo(string $mediaInfo){
        $this->media_info = $mediaInfo;
    }

    public function getOwner() : int{
        return $this->owner;
    }

    public function setOwner(int $owner){
        $this->owner = $owner;
    }

    public function getParentId() : int{
        return $this->parent_id;
    }

    public function setParentId(int $parentId){
        $this->parent_id = $parentId;
    }

    public function getParentInfo() : TaobaoXhotelCommentGetmixratelistParentInfo{
        return $this->parent_info;
    }

    public function setParentInfo(TaobaoXhotelCommentGetmixratelistParentInfo $parentInfo){
        $this->parent_info = $parentInfo;
    }

    public function getReplyId() : int{
        return $this->reply_id;
    }

    public function setReplyId(int $replyId){
        $this->reply_id = $replyId;
    }

    public function getReplyType() : int{
        return $this->reply_type;
    }

    public function setReplyType(int $replyType){
        $this->reply_type = $replyType;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTravelItemId() : int{
        return $this->travel_item_id;
    }

    public function setTravelItemId(int $travelItemId){
        $this->travel_item_id = $travelItemId;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }


}


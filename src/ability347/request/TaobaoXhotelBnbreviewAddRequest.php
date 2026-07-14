<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbreviewAddRequest {

    /**
        入住时间
     **/
    private $checkInTime;

    /**
        评论来源ID，38-小猪 39-爱彼迎
     **/
    private $source;

    /**
        图片地址
     **/
    private $picInfoList;

    /**
        飞猪侧房源ID
     **/
    private $rid;

    /**
        创建时间
     **/
    private $gmtCreate;

    /**
        评论内容
     **/
    private $content;

    /**
        用户名称
     **/
    private $userNick;

    /**
        外部评论id
     **/
    private $outerId;

    /**
        评分细分
     **/
    private $scoreDetail;

    /**
        总评分,Double类型得
     **/
    private $totalScore;


    public function getCheckInTime() : string{
        return $this->checkInTime;
    }

    public function setCheckInTime(string $checkInTime){
        $this->checkInTime = $checkInTime;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getPicInfoList() : array{
        return $this->picInfoList;
    }

    public function setPicInfoList(array $picInfoList){
        $this->picInfoList = $picInfoList;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getGmtCreate() : string{
        return $this->gmtCreate;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmtCreate = $gmtCreate;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getUserNick() : string{
        return $this->userNick;
    }

    public function setUserNick(string $userNick){
        $this->userNick = $userNick;
    }

    public function getOuterId() : int{
        return $this->outerId;
    }

    public function setOuterId(int $outerId){
        $this->outerId = $outerId;
    }

    public function getScoreDetail() : array{
        return $this->scoreDetail;
    }

    public function setScoreDetail(array $scoreDetail){
        $this->scoreDetail = $scoreDetail;
    }

    public function getTotalScore() : string{
        return $this->totalScore;
    }

    public function setTotalScore(string $totalScore){
        $this->totalScore = $totalScore;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbreview.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->checkInTime)) {
            $requestParam["check_in_time"] = TopUtil::convertBasic($this->checkInTime);
        }

        if (!TopUtil::checkEmpty($this->source)) {
            $requestParam["source"] = TopUtil::convertBasic($this->source);
        }

        if (!TopUtil::checkEmpty($this->picInfoList)) {
            $requestParam["pic_info_list"] = TopUtil::convertStructList($this->picInfoList);
        }

        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
        }

        if (!TopUtil::checkEmpty($this->gmtCreate)) {
            $requestParam["gmt_create"] = TopUtil::convertBasic($this->gmtCreate);
        }

        if (!TopUtil::checkEmpty($this->content)) {
            $requestParam["content"] = TopUtil::convertBasic($this->content);
        }

        if (!TopUtil::checkEmpty($this->userNick)) {
            $requestParam["user_nick"] = TopUtil::convertBasic($this->userNick);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->scoreDetail)) {
            $requestParam["score_detail"] = TopUtil::convertStructList($this->scoreDetail);
        }

        if (!TopUtil::checkEmpty($this->totalScore)) {
            $requestParam["total_score"] = TopUtil::convertBasic($this->totalScore);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistItemStatisticVo {

    /**
        最佳得分项
     **/
    public $best_item;

    /**
        五分制标记, 1为五分制， 0为十分制
     **/
    public $is_five_grade;

    /**
        评论总数
     **/
    public $rate_cnt;

    /**
        有图的评论总数
     **/
    public $rate_pic_cnt;

    /**
        推荐率
     **/
    public $recommend_str;

    /**
        回复总数
     **/
    public $reply_cnt;

    /**
        tab信息
     **/
    public $room_tab_infos;

    /**
        评分描述： 非常好
     **/
    public $score_desc;

    /**
        评分详情，json格式
     **/
    public $score_detail;

    /**
        不同分数的数量
     **/
    public $score_infos;

    /**
        评分星级
     **/
    public $score_level;

    /**
        source来源 0自采 1共享 21agoda 22艺龙 23tripAdvisor
     **/
    public $source;

    /**
        tab信息
     **/
    public $sub_item_infos;

    /**
        tab信息
     **/
    public $tab_info_s;

    /**
        热词显示的行数
     **/
    public $tab_show_lines;

    /**
        总评分
     **/
    public $total_score;

    /**
        酒店类目是标准酒店ID
     **/
    public $travel_item_id;

    /**
        旅游商品信息
     **/
    public $travel_item_info;

    /**
        tripAdv评论数
     **/
    public $trip_advate_cnt;


    public function getBestItem() : string{
        return $this->best_item;
    }

    public function setBestItem(string $bestItem){
        $this->best_item = $bestItem;
    }

    public function getIsFiveGrade() : int{
        return $this->is_five_grade;
    }

    public function setIsFiveGrade(int $isFiveGrade){
        $this->is_five_grade = $isFiveGrade;
    }

    public function getRateCnt() : int{
        return $this->rate_cnt;
    }

    public function setRateCnt(int $rateCnt){
        $this->rate_cnt = $rateCnt;
    }

    public function getRatePicCnt() : int{
        return $this->rate_pic_cnt;
    }

    public function setRatePicCnt(int $ratePicCnt){
        $this->rate_pic_cnt = $ratePicCnt;
    }

    public function getRecommendStr() : string{
        return $this->recommend_str;
    }

    public function setRecommendStr(string $recommendStr){
        $this->recommend_str = $recommendStr;
    }

    public function getReplyCnt() : int{
        return $this->reply_cnt;
    }

    public function setReplyCnt(int $replyCnt){
        $this->reply_cnt = $replyCnt;
    }

    public function getRoomTabInfos() : array{
        return $this->room_tab_infos;
    }

    public function setRoomTabInfos(array $roomTabInfos){
        $this->room_tab_infos = $roomTabInfos;
    }

    public function getScoreDesc() : string{
        return $this->score_desc;
    }

    public function setScoreDesc(string $scoreDesc){
        $this->score_desc = $scoreDesc;
    }

    public function getScoreDetail() : string{
        return $this->score_detail;
    }

    public function setScoreDetail(string $scoreDetail){
        $this->score_detail = $scoreDetail;
    }

    public function getScoreInfos() : array{
        return $this->score_infos;
    }

    public function setScoreInfos(array $scoreInfos){
        $this->score_infos = $scoreInfos;
    }

    public function getScoreLevel() : int{
        return $this->score_level;
    }

    public function setScoreLevel(int $scoreLevel){
        $this->score_level = $scoreLevel;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getSubItemInfos() : array{
        return $this->sub_item_infos;
    }

    public function setSubItemInfos(array $subItemInfos){
        $this->sub_item_infos = $subItemInfos;
    }

    public function getTabInfoS() : array{
        return $this->tab_info_s;
    }

    public function setTabInfoS(array $tabInfoS){
        $this->tab_info_s = $tabInfoS;
    }

    public function getTabShowLines() : int{
        return $this->tab_show_lines;
    }

    public function setTabShowLines(int $tabShowLines){
        $this->tab_show_lines = $tabShowLines;
    }

    public function getTotalScore() : string{
        return $this->total_score;
    }

    public function setTotalScore(string $totalScore){
        $this->total_score = $totalScore;
    }

    public function getTravelItemId() : int{
        return $this->travel_item_id;
    }

    public function setTravelItemId(int $travelItemId){
        $this->travel_item_id = $travelItemId;
    }

    public function getTravelItemInfo() : string{
        return $this->travel_item_info;
    }

    public function setTravelItemInfo(string $travelItemInfo){
        $this->travel_item_info = $travelItemInfo;
    }

    public function getTripAdvateCnt() : int{
        return $this->trip_advate_cnt;
    }

    public function setTripAdvateCnt(int $tripAdvateCnt){
        $this->trip_advate_cnt = $tripAdvateCnt;
    }


}


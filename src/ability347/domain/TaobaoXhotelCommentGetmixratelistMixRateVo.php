<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistMixRateVo {

    /**
        顶数量
     **/
    public $agree_count;

    /**
        业务类型
     **/
    public $biz_type;

    /**
        内容
     **/
    public $content;

    /**
        默认icon
     **/
    public $default_icon;

    /**
        差评数
     **/
    public $disagree_count;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        id
     **/
    public $id;

    /**
        商品id
     **/
    public $item_id;

    /**
        商品信息
     **/
    public $item_info;

    /**
        商品评论ID
     **/
    public $item_rate_id;

    /**
        所有商品评论回复
     **/
    public $item_replies;

    /**
        点赞数据
     **/
    public $like;

    /**
        图片信息,图片URL的list
     **/
    public $media_info;

    /**
        订单ID
     **/
    public $order_id;

    /**
        订单ID
     **/
    public $order_id_str;

    /**
        交易信息
     **/
    public $order_info;

    /**
        当前用户的评价 0:不是, 1:是
     **/
    public $owner;

    /**
        图片URL
     **/
    public $picture_urls;

    /**
        POI固定文本
     **/
    public $poi_str;

    /**
        跳转URL
     **/
    public $redirect_url;

    /**
        回复数量
     **/
    public $reply_count;

    /**
        评分详情
     **/
    public $score_detail;

    /**
        评分详情
     **/
    public $seller_score_detail;

    /**
        SKU
     **/
    public $sku;

    /**
        点评来源
     **/
    public $source;

    /**
        点评来源名称
     **/
    public $source_type_name;

    /**
        分割线内容
     **/
    public $split_line_content;

    /**
        置顶状态 0 普通，1置顶
     **/
    public $status;

    /**
        1
     **/
    public $tab_infos;

    /**
        标签信息
     **/
    public $tag_info;

    /**
        评论title,留作备用
     **/
    public $title;

    /**
        置顶状态 0 普通，1置顶
     **/
    public $top_status;

    /**
        置顶图标
     **/
    public $top_status_icon;

    /**
        置顶图标
     **/
    public $total_score;

    /**
        总评分
     **/
    public $travel_name;

    /**
        航旅标准商品子类型id
     **/
    public $travel_sub_item_id;

    /**
        航旅标准商品子类型信息
     **/
    public $travel_sub_item_info;

    /**
        行程ID
     **/
    public $trip_guid_id;

    /**
        冗余
     **/
    public $ttid;

    /**
        用户昵称,已脱敏
     **/
    public $user_nick;


    public function getAgreeCount() : int{
        return $this->agree_count;
    }

    public function setAgreeCount(int $agreeCount){
        $this->agree_count = $agreeCount;
    }

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

    public function getDefaultIcon() : int{
        return $this->default_icon;
    }

    public function setDefaultIcon(int $defaultIcon){
        $this->default_icon = $defaultIcon;
    }

    public function getDisagreeCount() : int{
        return $this->disagree_count;
    }

    public function setDisagreeCount(int $disagreeCount){
        $this->disagree_count = $disagreeCount;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getItemInfo() : string{
        return $this->item_info;
    }

    public function setItemInfo(string $itemInfo){
        $this->item_info = $itemInfo;
    }

    public function getItemRateId() : int{
        return $this->item_rate_id;
    }

    public function setItemRateId(int $itemRateId){
        $this->item_rate_id = $itemRateId;
    }

    public function getItemReplies() : array{
        return $this->item_replies;
    }

    public function setItemReplies(array $itemReplies){
        $this->item_replies = $itemReplies;
    }

    public function getLike() : TaobaoXhotelCommentGetmixratelistLikeTargetCount{
        return $this->like;
    }

    public function setLike(TaobaoXhotelCommentGetmixratelistLikeTargetCount $like){
        $this->like = $like;
    }

    public function getMediaInfo() : string{
        return $this->media_info;
    }

    public function setMediaInfo(string $mediaInfo){
        $this->media_info = $mediaInfo;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getOrderIdStr() : string{
        return $this->order_id_str;
    }

    public function setOrderIdStr(string $orderIdStr){
        $this->order_id_str = $orderIdStr;
    }

    public function getOrderInfo() : string{
        return $this->order_info;
    }

    public function setOrderInfo(string $orderInfo){
        $this->order_info = $orderInfo;
    }

    public function getOwner() : int{
        return $this->owner;
    }

    public function setOwner(int $owner){
        $this->owner = $owner;
    }

    public function getPictureUrls() : array{
        return $this->picture_urls;
    }

    public function setPictureUrls(array $pictureUrls){
        $this->picture_urls = $pictureUrls;
    }

    public function getPoiStr() : string{
        return $this->poi_str;
    }

    public function setPoiStr(string $poiStr){
        $this->poi_str = $poiStr;
    }

    public function getRedirectUrl() : string{
        return $this->redirect_url;
    }

    public function setRedirectUrl(string $redirectUrl){
        $this->redirect_url = $redirectUrl;
    }

    public function getReplyCount() : int{
        return $this->reply_count;
    }

    public function setReplyCount(int $replyCount){
        $this->reply_count = $replyCount;
    }

    public function getScoreDetail() : string{
        return $this->score_detail;
    }

    public function setScoreDetail(string $scoreDetail){
        $this->score_detail = $scoreDetail;
    }

    public function getSellerScoreDetail() : string{
        return $this->seller_score_detail;
    }

    public function setSellerScoreDetail(string $sellerScoreDetail){
        $this->seller_score_detail = $sellerScoreDetail;
    }

    public function getSku() : string{
        return $this->sku;
    }

    public function setSku(string $sku){
        $this->sku = $sku;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getSourceTypeName() : string{
        return $this->source_type_name;
    }

    public function setSourceTypeName(string $sourceTypeName){
        $this->source_type_name = $sourceTypeName;
    }

    public function getSplitLineContent() : string{
        return $this->split_line_content;
    }

    public function setSplitLineContent(string $splitLineContent){
        $this->split_line_content = $splitLineContent;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTabInfos() : array{
        return $this->tab_infos;
    }

    public function setTabInfos(array $tabInfos){
        $this->tab_infos = $tabInfos;
    }

    public function getTagInfo() : string{
        return $this->tag_info;
    }

    public function setTagInfo(string $tagInfo){
        $this->tag_info = $tagInfo;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTopStatus() : int{
        return $this->top_status;
    }

    public function setTopStatus(int $topStatus){
        $this->top_status = $topStatus;
    }

    public function getTopStatusIcon() : string{
        return $this->top_status_icon;
    }

    public function setTopStatusIcon(string $topStatusIcon){
        $this->top_status_icon = $topStatusIcon;
    }

    public function getTotalScore() : int{
        return $this->total_score;
    }

    public function setTotalScore(int $totalScore){
        $this->total_score = $totalScore;
    }

    public function getTravelName() : string{
        return $this->travel_name;
    }

    public function setTravelName(string $travelName){
        $this->travel_name = $travelName;
    }

    public function getTravelSubItemId() : int{
        return $this->travel_sub_item_id;
    }

    public function setTravelSubItemId(int $travelSubItemId){
        $this->travel_sub_item_id = $travelSubItemId;
    }

    public function getTravelSubItemInfo() : string{
        return $this->travel_sub_item_info;
    }

    public function setTravelSubItemInfo(string $travelSubItemInfo){
        $this->travel_sub_item_info = $travelSubItemInfo;
    }

    public function getTripGuidId() : int{
        return $this->trip_guid_id;
    }

    public function setTripGuidId(int $tripGuidId){
        $this->trip_guid_id = $tripGuidId;
    }

    public function getTtid() : string{
        return $this->ttid;
    }

    public function setTtid(string $ttid){
        $this->ttid = $ttid;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }


}


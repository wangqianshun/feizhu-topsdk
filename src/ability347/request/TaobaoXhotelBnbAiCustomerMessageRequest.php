<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbAiCustomerMessageRequest {

    /**
        IM对话ID
     **/
    private $chatId;

    /**
        发送者ID
     **/
    private $fromUserId;

    /**
        发送渠道
     **/
    private $channel;

    /**
        IM消息ID
     **/
    private $messageId;

    /**
        接收者ID
     **/
    private $toUserId;

    /**
        发送者角色
     **/
    private $fromRole;

    /**
        内容
     **/
    private $contentJson;

    /**
        发送时间戳
     **/
    private $timeStamp;

    /**
        发送端类型
     **/
    private $connType;

    /**
        扩展参数
     **/
    private $meta;

    /**
        IM会话ID
     **/
    private $talkId;

    /**
        接收端类型
     **/
    private $connToType;

    /**
        消息状态
     **/
    private $status;

    /**
        权限控制
     **/
    private $visibleTypes;

    /**
        消息类型
     **/
    private $type;


    public function getChatId() : string{
        return $this->chatId;
    }

    public function setChatId(string $chatId){
        $this->chatId = $chatId;
    }

    public function getFromUserId() : string{
        return $this->fromUserId;
    }

    public function setFromUserId(string $fromUserId){
        $this->fromUserId = $fromUserId;
    }

    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }

    public function getMessageId() : string{
        return $this->messageId;
    }

    public function setMessageId(string $messageId){
        $this->messageId = $messageId;
    }

    public function getToUserId() : string{
        return $this->toUserId;
    }

    public function setToUserId(string $toUserId){
        $this->toUserId = $toUserId;
    }

    public function getFromRole() : string{
        return $this->fromRole;
    }

    public function setFromRole(string $fromRole){
        $this->fromRole = $fromRole;
    }

    public function getContentJson() : string{
        return $this->contentJson;
    }

    public function setContentJson(string $contentJson){
        $this->contentJson = $contentJson;
    }

    public function getTimeStamp() : string{
        return $this->timeStamp;
    }

    public function setTimeStamp(string $timeStamp){
        $this->timeStamp = $timeStamp;
    }

    public function getConnType() : string{
        return $this->connType;
    }

    public function setConnType(string $connType){
        $this->connType = $connType;
    }

    public function getMeta() : string{
        return $this->meta;
    }

    public function setMeta(string $meta){
        $this->meta = $meta;
    }

    public function getTalkId() : string{
        return $this->talkId;
    }

    public function setTalkId(string $talkId){
        $this->talkId = $talkId;
    }

    public function getConnToType() : string{
        return $this->connToType;
    }

    public function setConnToType(string $connToType){
        $this->connToType = $connToType;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getVisibleTypes() : string{
        return $this->visibleTypes;
    }

    public function setVisibleTypes(string $visibleTypes){
        $this->visibleTypes = $visibleTypes;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.ai.customer.message";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->chatId)) {
            $requestParam["chat_id"] = TopUtil::convertBasic($this->chatId);
        }

        if (!TopUtil::checkEmpty($this->fromUserId)) {
            $requestParam["from_user_id"] = TopUtil::convertBasic($this->fromUserId);
        }

        if (!TopUtil::checkEmpty($this->channel)) {
            $requestParam["channel"] = TopUtil::convertBasic($this->channel);
        }

        if (!TopUtil::checkEmpty($this->messageId)) {
            $requestParam["message_id"] = TopUtil::convertBasic($this->messageId);
        }

        if (!TopUtil::checkEmpty($this->toUserId)) {
            $requestParam["to_user_id"] = TopUtil::convertBasic($this->toUserId);
        }

        if (!TopUtil::checkEmpty($this->fromRole)) {
            $requestParam["from_role"] = TopUtil::convertBasic($this->fromRole);
        }

        if (!TopUtil::checkEmpty($this->contentJson)) {
            $requestParam["content_json"] = TopUtil::convertBasic($this->contentJson);
        }

        if (!TopUtil::checkEmpty($this->timeStamp)) {
            $requestParam["time_stamp"] = TopUtil::convertBasic($this->timeStamp);
        }

        if (!TopUtil::checkEmpty($this->connType)) {
            $requestParam["conn_type"] = TopUtil::convertBasic($this->connType);
        }

        if (!TopUtil::checkEmpty($this->meta)) {
            $requestParam["meta"] = TopUtil::convertBasic($this->meta);
        }

        if (!TopUtil::checkEmpty($this->talkId)) {
            $requestParam["talk_id"] = TopUtil::convertBasic($this->talkId);
        }

        if (!TopUtil::checkEmpty($this->connToType)) {
            $requestParam["conn_to_type"] = TopUtil::convertBasic($this->connToType);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->visibleTypes)) {
            $requestParam["visible_types"] = TopUtil::convertBasic($this->visibleTypes);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


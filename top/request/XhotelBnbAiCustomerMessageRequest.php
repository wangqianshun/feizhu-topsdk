<?php
/**
 * TOP API: taobao.xhotel.bnb.ai.customer.message request
 * 
 * @author auto create
 * @since 1.0, 2026.01.27
 */
class XhotelBnbAiCustomerMessageRequest
{
	/** 
	 * 发送渠道
	 **/
	private $channel;
	
	/** 
	 * IM对话ID
	 **/
	private $chatId;
	
	/** 
	 * 接收端类型
	 **/
	private $connToType;
	
	/** 
	 * 发送端类型
	 **/
	private $connType;
	
	/** 
	 * 内容
	 **/
	private $contentJson;
	
	/** 
	 * 发送者角色
	 **/
	private $fromRole;
	
	/** 
	 * 发送者ID
	 **/
	private $fromUserId;
	
	/** 
	 * IM消息ID
	 **/
	private $messageId;
	
	/** 
	 * 扩展参数
	 **/
	private $meta;
	
	/** 
	 * 消息状态
	 **/
	private $status;
	
	/** 
	 * IM会话ID
	 **/
	private $talkId;
	
	/** 
	 * 发送时间戳
	 **/
	private $timeStamp;
	
	/** 
	 * 接收者ID
	 **/
	private $toUserId;
	
	/** 
	 * 消息类型
	 **/
	private $type;
	
	/** 
	 * 权限控制
	 **/
	private $visibleTypes;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setChatId($chatId)
	{
		$this->chatId = $chatId;
		$this->apiParas["chat_id"] = $chatId;
	}

	public function getChatId()
	{
		return $this->chatId;
	}

	public function setConnToType($connToType)
	{
		$this->connToType = $connToType;
		$this->apiParas["conn_to_type"] = $connToType;
	}

	public function getConnToType()
	{
		return $this->connToType;
	}

	public function setConnType($connType)
	{
		$this->connType = $connType;
		$this->apiParas["conn_type"] = $connType;
	}

	public function getConnType()
	{
		return $this->connType;
	}

	public function setContentJson($contentJson)
	{
		$this->contentJson = $contentJson;
		$this->apiParas["content_json"] = $contentJson;
	}

	public function getContentJson()
	{
		return $this->contentJson;
	}

	public function setFromRole($fromRole)
	{
		$this->fromRole = $fromRole;
		$this->apiParas["from_role"] = $fromRole;
	}

	public function getFromRole()
	{
		return $this->fromRole;
	}

	public function setFromUserId($fromUserId)
	{
		$this->fromUserId = $fromUserId;
		$this->apiParas["from_user_id"] = $fromUserId;
	}

	public function getFromUserId()
	{
		return $this->fromUserId;
	}

	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		$this->apiParas["message_id"] = $messageId;
	}

	public function getMessageId()
	{
		return $this->messageId;
	}

	public function setMeta($meta)
	{
		$this->meta = $meta;
		$this->apiParas["meta"] = $meta;
	}

	public function getMeta()
	{
		return $this->meta;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTalkId($talkId)
	{
		$this->talkId = $talkId;
		$this->apiParas["talk_id"] = $talkId;
	}

	public function getTalkId()
	{
		return $this->talkId;
	}

	public function setTimeStamp($timeStamp)
	{
		$this->timeStamp = $timeStamp;
		$this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp()
	{
		return $this->timeStamp;
	}

	public function setToUserId($toUserId)
	{
		$this->toUserId = $toUserId;
		$this->apiParas["to_user_id"] = $toUserId;
	}

	public function getToUserId()
	{
		return $this->toUserId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setVisibleTypes($visibleTypes)
	{
		$this->visibleTypes = $visibleTypes;
		$this->apiParas["visible_types"] = $visibleTypes;
	}

	public function getVisibleTypes()
	{
		return $this->visibleTypes;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnb.ai.customer.message";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

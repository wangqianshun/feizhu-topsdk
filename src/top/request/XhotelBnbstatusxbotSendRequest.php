<?php
/**
 * TOP API: taobao.xhotel.bnbstatusxbot.send request
 * 
 * @author auto create
 * @since 1.0, 2025.05.21
 */
class XhotelBnbstatusxbotSendRequest
{
	/** 
	 * 话术
	 **/
	private $patterns;
	
	/** 
	 * 被呼叫方的电话号码
	 **/
	private $phoneNum;
	
	/** 
	 * 本次请求的唯一ID
	 **/
	private $requestId;
	
	/** 
	 * 外呼场景
	 **/
	private $scene;
	
	private $apiParas = array();
	
	public function setPatterns($patterns)
	{
		$this->patterns = $patterns;
		$this->apiParas["patterns"] = $patterns;
	}

	public function getPatterns()
	{
		return $this->patterns;
	}

	public function setPhoneNum($phoneNum)
	{
		$this->phoneNum = $phoneNum;
		$this->apiParas["phone_num"] = $phoneNum;
	}

	public function getPhoneNum()
	{
		return $this->phoneNum;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbstatusxbot.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->patterns,"patterns");
		RequestCheckUtil::checkNotNull($this->phoneNum,"phoneNum");
		RequestCheckUtil::checkNotNull($this->requestId,"requestId");
		RequestCheckUtil::checkNotNull($this->scene,"scene");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

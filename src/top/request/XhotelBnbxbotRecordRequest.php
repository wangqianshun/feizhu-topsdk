<?php
/**
 * TOP API: taobao.xhotel.bnbxbot.record request
 * 
 * @author auto create
 * @since 1.0, 2025.08.21
 */
class XhotelBnbxbotRecordRequest
{
	/** 
	 * 被叫手机号
	 **/
	private $number;
	
	/** 
	 * ab
	 **/
	private $scene;
	
	/** 
	 * 23423424234
	 **/
	private $sessionId;
	
	private $apiParas = array();
	
	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
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

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
		$this->apiParas["session_id"] = $sessionId;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbxbot.record";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkNotNull($this->scene,"scene");
		RequestCheckUtil::checkNotNull($this->sessionId,"sessionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: taobao.xhotel.bnbllm.poll.query request
 * 
 * @author auto create
 * @since 1.0, 2025.02.26
 */
class XhotelBnbllmPollQueryRequest
{
	/** 
	 * 请求大模型的唯一key
	 **/
	private $requestKey;
	
	private $apiParas = array();
	
	public function setRequestKey($requestKey)
	{
		$this->requestKey = $requestKey;
		$this->apiParas["request_key"] = $requestKey;
	}

	public function getRequestKey()
	{
		return $this->requestKey;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbllm.poll.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->requestKey,"requestKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

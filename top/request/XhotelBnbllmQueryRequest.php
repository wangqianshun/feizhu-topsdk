<?php
/**
 * TOP API: taobao.xhotel.bnbllm.query request
 * 
 * @author auto create
 * @since 1.0, 2025.02.26
 */
class XhotelBnbllmQueryRequest
{
	/** 
	 * 大模型appId
	 **/
	private $appId;
	
	/** 
	 * 大模型flowId
	 **/
	private $flowId;
	
	/** 
	 * 查询扩展参数
	 **/
	private $variables;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setFlowId($flowId)
	{
		$this->flowId = $flowId;
		$this->apiParas["flow_id"] = $flowId;
	}

	public function getFlowId()
	{
		return $this->flowId;
	}

	public function setVariables($variables)
	{
		$this->variables = $variables;
		$this->apiParas["variables"] = $variables;
	}

	public function getVariables()
	{
		return $this->variables;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbllm.query";
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

<?php
/**
 * TOP API: taobao.xhotel.comment.getmixratelist request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelCommentGetmixratelistRequest
{
	/** 
	 * 1
	 **/
	private $paramGetMixRateListParam;
	
	private $apiParas = array();
	
	public function setParamGetMixRateListParam($paramGetMixRateListParam)
	{
		$this->paramGetMixRateListParam = $paramGetMixRateListParam;
		$this->apiParas["param_get_mix_rate_list_param"] = $paramGetMixRateListParam;
	}

	public function getParamGetMixRateListParam()
	{
		return $this->paramGetMixRateListParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.comment.getmixratelist";
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

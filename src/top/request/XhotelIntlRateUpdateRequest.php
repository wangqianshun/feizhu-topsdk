<?php
/**
 * TOP API: taobao.xhotel.intl.rate.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.01
 */
class XhotelIntlRateUpdateRequest
{
	/** 
	 * rate更新参数
	 **/
	private $updateRateParam;
	
	private $apiParas = array();
	
	public function setUpdateRateParam($updateRateParam)
	{
		$this->updateRateParam = $updateRateParam;
		$this->apiParas["update_rate_param"] = $updateRateParam;
	}

	public function getUpdateRateParam()
	{
		return $this->updateRateParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.intl.rate.update";
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

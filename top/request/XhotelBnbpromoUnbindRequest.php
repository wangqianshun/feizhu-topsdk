<?php
/**
 * TOP API: taobao.xhotel.bnbpromo.unbind request
 * 
 * @author auto create
 * @since 1.0, 2025.03.10
 */
class XhotelBnbpromoUnbindRequest
{
	/** 
	 * 营销活动code
	 **/
	private $activityCode;
	
	/** 
	 * 营销
	 **/
	private $rateInfos;
	
	private $apiParas = array();
	
	public function setActivityCode($activityCode)
	{
		$this->activityCode = $activityCode;
		$this->apiParas["activity_code"] = $activityCode;
	}

	public function getActivityCode()
	{
		return $this->activityCode;
	}

	public function setRateInfos($rateInfos)
	{
		$this->rateInfos = $rateInfos;
		$this->apiParas["rate_infos"] = $rateInfos;
	}

	public function getRateInfos()
	{
		return $this->rateInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpromo.unbind";
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

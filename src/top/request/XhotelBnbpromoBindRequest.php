<?php
/**
 * TOP API: taobao.xhotel.bnbpromo.bind request
 * 
 * @author auto create
 * @since 1.0, 2025.03.10
 */
class XhotelBnbpromoBindRequest
{
	/** 
	 * 营销活动code
	 **/
	private $activityCode;
	
	/** 
	 * 活动入住时间，民宿通用营销必填
	 **/
	private $checkInFrom;
	
	/** 
	 * 活动离店时间，民宿通用营销必填
	 **/
	private $checkOutTo;
	
	/** 
	 * 外部价格信息
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

	public function setCheckInFrom($checkInFrom)
	{
		$this->checkInFrom = $checkInFrom;
		$this->apiParas["check_in_from"] = $checkInFrom;
	}

	public function getCheckInFrom()
	{
		return $this->checkInFrom;
	}

	public function setCheckOutTo($checkOutTo)
	{
		$this->checkOutTo = $checkOutTo;
		$this->apiParas["check_out_to"] = $checkOutTo;
	}

	public function getCheckOutTo()
	{
		return $this->checkOutTo;
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
		return "taobao.xhotel.bnbpromo.bind";
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

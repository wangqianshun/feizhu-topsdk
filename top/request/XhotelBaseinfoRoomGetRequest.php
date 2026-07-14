<?php
/**
 * TOP API: taobao.xhotel.baseinfo.room.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelBaseinfoRoomGetRequest
{
	/** 
	 * 是否需要房价基本信息（false为不需要），默认为需要
	 **/
	private $isNeedRatePlan;
	
	/** 
	 * 卖家系统中的酒店ID。
	 **/
	private $outHid;
	
	/** 
	 * 用于标示该酒店发布的渠道信息
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setIsNeedRatePlan($isNeedRatePlan)
	{
		$this->isNeedRatePlan = $isNeedRatePlan;
		$this->apiParas["is_need_rate_plan"] = $isNeedRatePlan;
	}

	public function getIsNeedRatePlan()
	{
		return $this->isNeedRatePlan;
	}

	public function setOutHid($outHid)
	{
		$this->outHid = $outHid;
		$this->apiParas["out_hid"] = $outHid;
	}

	public function getOutHid()
	{
		return $this->outHid;
	}

	public function setVendor($vendor)
	{
		$this->vendor = $vendor;
		$this->apiParas["vendor"] = $vendor;
	}

	public function getVendor()
	{
		return $this->vendor;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.baseinfo.room.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outHid,"outHid");
		RequestCheckUtil::checkMaxLength($this->outHid,64,"outHid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

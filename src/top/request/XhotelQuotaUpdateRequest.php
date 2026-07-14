<?php
/**
 * TOP API: taobao.xhotel.quota.update request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelQuotaUpdateRequest
{
	/** 
	 * 修改日期列表
	 **/
	private $dates;
	
	/** 
	 * room的gid
	 **/
	private $gid;
	
	/** 
	 * 增减的值
	 **/
	private $quota;
	
	/** 
	 * 数量类型, 2:增加房量,3:减少房量
	 **/
	private $quotaNumType;
	
	/** 
	 * 库存类型,0: 普通库存, 1: 普通保留房库存, 2:协议保留房库存
	 **/
	private $quotaType;
	
	/** 
	 * rate的id, rate库存时必填
	 **/
	private $rateId;
	
	/** 
	 * 是否使用room库存,true使用，false不使用
	 **/
	private $useRoomInventory;
	
	private $apiParas = array();
	
	public function setDates($dates)
	{
		$this->dates = $dates;
		$this->apiParas["dates"] = $dates;
	}

	public function getDates()
	{
		return $this->dates;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setQuota($quota)
	{
		$this->quota = $quota;
		$this->apiParas["quota"] = $quota;
	}

	public function getQuota()
	{
		return $this->quota;
	}

	public function setQuotaNumType($quotaNumType)
	{
		$this->quotaNumType = $quotaNumType;
		$this->apiParas["quota_num_type"] = $quotaNumType;
	}

	public function getQuotaNumType()
	{
		return $this->quotaNumType;
	}

	public function setQuotaType($quotaType)
	{
		$this->quotaType = $quotaType;
		$this->apiParas["quota_type"] = $quotaType;
	}

	public function getQuotaType()
	{
		return $this->quotaType;
	}

	public function setRateId($rateId)
	{
		$this->rateId = $rateId;
		$this->apiParas["rate_id"] = $rateId;
	}

	public function getRateId()
	{
		return $this->rateId;
	}

	public function setUseRoomInventory($useRoomInventory)
	{
		$this->useRoomInventory = $useRoomInventory;
		$this->apiParas["use_room_inventory"] = $useRoomInventory;
	}

	public function getUseRoomInventory()
	{
		return $this->useRoomInventory;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.quota.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dates,"dates");
		RequestCheckUtil::checkMaxListSize($this->dates,20,"dates");
		RequestCheckUtil::checkNotNull($this->quota,"quota");
		RequestCheckUtil::checkNotNull($this->quotaNumType,"quotaNumType");
		RequestCheckUtil::checkNotNull($this->quotaType,"quotaType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: taobao.xhotel.multiplerate.delete request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelMultiplerateDeleteRequest
{
	/** 
	 * 入住人数
	 **/
	private $lengthofstay;
	
	/** 
	 * 连住天数
	 **/
	private $occupancy;
	
	/** 
	 * 商家房型编码
	 **/
	private $outRid;
	
	/** 
	 * 商家价格政策编码
	 **/
	private $rateplanCode;
	
	/** 
	 * 渠道，和推送房价所使用的渠道保持一致
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setLengthofstay($lengthofstay)
	{
		$this->lengthofstay = $lengthofstay;
		$this->apiParas["lengthofstay"] = $lengthofstay;
	}

	public function getLengthofstay()
	{
		return $this->lengthofstay;
	}

	public function setOccupancy($occupancy)
	{
		$this->occupancy = $occupancy;
		$this->apiParas["occupancy"] = $occupancy;
	}

	public function getOccupancy()
	{
		return $this->occupancy;
	}

	public function setOutRid($outRid)
	{
		$this->outRid = $outRid;
		$this->apiParas["out_rid"] = $outRid;
	}

	public function getOutRid()
	{
		return $this->outRid;
	}

	public function setRateplanCode($rateplanCode)
	{
		$this->rateplanCode = $rateplanCode;
		$this->apiParas["rateplan_code"] = $rateplanCode;
	}

	public function getRateplanCode()
	{
		return $this->rateplanCode;
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
		return "taobao.xhotel.multiplerate.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outRid,"outRid");
		RequestCheckUtil::checkNotNull($this->rateplanCode,"rateplanCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: taobao.xhotel.rate.delete request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRateDeleteRequest
{
	/** 
	 * 房型id
	 **/
	private $gid;
	
	/** 
	 * 商家房型ID
	 **/
	private $outRid;
	
	/** 
	 * rateId
	 **/
	private $rateId;
	
	/** 
	 * 商家价格政策编码
	 **/
	private $rateplanCode;
	
	/** 
	 * ratepland标识
	 **/
	private $rpId;
	
	/** 
	 * 系统商，一般不用填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
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

	public function setRateId($rateId)
	{
		$this->rateId = $rateId;
		$this->apiParas["rate_id"] = $rateId;
	}

	public function getRateId()
	{
		return $this->rateId;
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

	public function setRpId($rpId)
	{
		$this->rpId = $rpId;
		$this->apiParas["rp_id"] = $rpId;
	}

	public function getRpId()
	{
		return $this->rpId;
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
		return "taobao.xhotel.rate.delete";
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

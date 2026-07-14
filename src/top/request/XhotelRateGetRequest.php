<?php
/**
 * TOP API: taobao.xhotel.rate.get request
 * 
 * @author auto create
 * @since 1.0, 2025.06.29
 */
class XhotelRateGetRequest
{
	/** 
	 * gid酒店商品id
	 **/
	private $gid;
	
	/** 
	 * 卖家房型ID, 这是卖家自己系统中的房型ID 注意：需要按照规则组合
	 **/
	private $outRid;
	
	/** 
	 * RateID
	 **/
	private $rateId;
	
	/** 
	 * 卖家自己系统的Code，简称RateCode
	 **/
	private $rateplanCode;
	
	/** 
	 * 酒店RPID
	 **/
	private $rpid;
	
	/** 
	 * 用于标示该宝贝的售卖渠道信息，允许同一个卖家酒店房型在淘宝系统发布多个售卖渠道的宝贝的价格。
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

	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
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
		return "taobao.xhotel.rate.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->outRid,128,"outRid");
		RequestCheckUtil::checkMaxLength($this->rateplanCode,128,"rateplanCode");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

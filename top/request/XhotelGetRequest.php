<?php
/**
 * TOP API: taobao.xhotel.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelGetRequest
{
	/** 
	 * 废弃，请使用outer_id
	 **/
	private $hid;
	
	/** 
	 * 是否需要在售状态(默认false不需要)
	 **/
	private $needSaleInfo;
	
	/** 
	 * 卖家系统中的酒店ID。
	 **/
	private $outerId;
	
	/** 
	 * 系统商，一般不用填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setNeedSaleInfo($needSaleInfo)
	{
		$this->needSaleInfo = $needSaleInfo;
		$this->apiParas["need_sale_info"] = $needSaleInfo;
	}

	public function getNeedSaleInfo()
	{
		return $this->needSaleInfo;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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
		return "taobao.xhotel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

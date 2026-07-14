<?php
/**
 * TOP API: taobao.xhotel.delete request
 * 
 * @author auto create
 * @since 1.0, 2025.11.18
 */
class XhotelDeleteRequest
{
	/** 
	 * 酒店id，传参方式  hid   或者   outer_id+vendor
	 **/
	private $hid;
	
	/** 
	 * 酒店编码
	 **/
	private $outerId;
	
	/** 
	 * 酒店vendor
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
		return "taobao.xhotel.delete";
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

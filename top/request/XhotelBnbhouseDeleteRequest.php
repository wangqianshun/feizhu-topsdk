<?php
/**
 * TOP API: taobao.xhotel.bnbhouse.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.12.30
 */
class XhotelBnbhouseDeleteRequest
{
	/** 
	 * 门店Id，传参方式为hid或outer_id+vendor
	 **/
	private $hid;
	
	/** 
	 * 门店Id，系统商outer_id
	 **/
	private $outerId;
	
	/** 
	 * 对接系统商名称：可为空不要乱填，需要申请后使用
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
		return "taobao.xhotel.bnbhouse.delete";
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

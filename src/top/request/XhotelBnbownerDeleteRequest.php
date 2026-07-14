<?php
/**
 * TOP API: taobao.xhotel.bnbowner.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.09
 */
class XhotelBnbownerDeleteRequest
{
	/** 
	 * 房东Id，系统商outer_id
	 **/
	private $outerId;
	
	/** 
	 * 对接系统商名称：可为空不要乱填，需要申请后使用，默认taobao
	 **/
	private $vendor;
	
	private $apiParas = array();
	
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
		return "taobao.xhotel.bnbowner.delete";
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

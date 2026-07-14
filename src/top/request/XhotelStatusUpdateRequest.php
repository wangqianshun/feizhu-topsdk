<?php
/**
 * TOP API: taobao.xhotel.status.update request
 * 
 * @author auto create
 * @since 1.0, 2024.12.30
 */
class XhotelStatusUpdateRequest
{
	/** 
	 * 飞猪酒店id
	 **/
	private $hid;
	
	/** 
	 * 外部酒店id
	 **/
	private $outerId;
	
	/** 
	 * （0在线，-1删除， -2停售）
	 **/
	private $status;
	
	/** 
	 * 对接系统商，不填默认taobao
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.xhotel.status.update";
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

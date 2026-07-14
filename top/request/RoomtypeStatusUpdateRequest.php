<?php
/**
 * TOP API: taobao.roomtype.status.update request
 * 
 * @author auto create
 * @since 1.0, 2023.09.06
 */
class RoomtypeStatusUpdateRequest
{
	/** 
	 * 卖家房型id
	 **/
	private $outerId;
	
	/** 
	 * 飞猪房型id
	 **/
	private $rid;
	
	/** 
	 * 0在线，-1删除， -2停售）
	 **/
	private $status;
	
	/** 
	 * 对接系统商，不填默认taobao
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

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
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
		return "taobao.roomtype.status.update";
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

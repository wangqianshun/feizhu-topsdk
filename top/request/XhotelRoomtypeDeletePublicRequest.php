<?php
/**
 * TOP API: taobao.xhotel.roomtype.delete.public request
 * 
 * @author auto create
 * @since 1.0, 2025.11.18
 */
class XhotelRoomtypeDeletePublicRequest
{
	/** 
	 * 具体操作人，比如酒店帐号、小二名称等
	 **/
	private $operator;
	
	/** 
	 * 外部房型ID
	 **/
	private $outerRid;
	
	/** 
	 * 房型rid ，传参方式：rid    或者   outer_id+vendor
	 **/
	private $rid;
	
	/** 
	 * vendor
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOuterRid($outerRid)
	{
		$this->outerRid = $outerRid;
		$this->apiParas["outer_rid"] = $outerRid;
	}

	public function getOuterRid()
	{
		return $this->outerRid;
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
		return "taobao.xhotel.roomtype.delete.public";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operator,"operator");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

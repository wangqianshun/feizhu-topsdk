<?php
/**
 * TOP API: taobao.xhotel.multiplerate.get request
 * 
 * @author auto create
 * @since 1.0, 2018.11.10
 */
class XhotelMultiplerateGetRequest
{
	/** 
	 * 废弃，使用out_rid
	 **/
	private $gid;
	
	/** 
	 * 连住天数(范围1~10)
	 **/
	private $nod;
	
	/** 
	 * 入住人数(范围1~10)
	 **/
	private $nop;
	
	/** 
	 * 卖家的房型code
	 **/
	private $outRid;
	
	/** 
	 * 卖家的房价code
	 **/
	private $ratePlanCode;
	
	/** 
	 * 废弃，使用rate_plan_code
	 **/
	private $ratePlanId;
	
	/** 
	 * 系统商，一般不填写，使用须申请
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

	public function setNod($nod)
	{
		$this->nod = $nod;
		$this->apiParas["nod"] = $nod;
	}

	public function getNod()
	{
		return $this->nod;
	}

	public function setNop($nop)
	{
		$this->nop = $nop;
		$this->apiParas["nop"] = $nop;
	}

	public function getNop()
	{
		return $this->nop;
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

	public function setRatePlanCode($ratePlanCode)
	{
		$this->ratePlanCode = $ratePlanCode;
		$this->apiParas["rate_plan_code"] = $ratePlanCode;
	}

	public function getRatePlanCode()
	{
		return $this->ratePlanCode;
	}

	public function setRatePlanId($ratePlanId)
	{
		$this->ratePlanId = $ratePlanId;
		$this->apiParas["rate_plan_id"] = $ratePlanId;
	}

	public function getRatePlanId()
	{
		return $this->ratePlanId;
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
		return "taobao.xhotel.multiplerate.get";
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

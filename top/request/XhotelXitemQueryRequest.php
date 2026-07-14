<?php
/**
 * TOP API: taobao.xhotel.xitem.query request
 * 
 * @author auto create
 * @since 1.0, 2023.08.04
 */
class XhotelXitemQueryRequest
{
	/** 
	 * 商家酒店ID，指明该 x 元素属于哪家酒店
	 **/
	private $outHid;
	
	/** 
	 * 商家房型ID，指明该 x 元素关联哪个房型
	 **/
	private $outRid;
	
	/** 
	 * 需要查询的 x_code 编码
	 **/
	private $outXCodes;
	
	/** 
	 * 商家 RP ID，指明该 x 元素关联了哪个 RP
	 **/
	private $ratePlanCode;
	
	/** 
	 * 系统商，一般不填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setOutHid($outHid)
	{
		$this->outHid = $outHid;
		$this->apiParas["out_hid"] = $outHid;
	}

	public function getOutHid()
	{
		return $this->outHid;
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

	public function setOutXCodes($outXCodes)
	{
		$this->outXCodes = $outXCodes;
		$this->apiParas["out_x_codes"] = $outXCodes;
	}

	public function getOutXCodes()
	{
		return $this->outXCodes;
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
		return "taobao.xhotel.xitem.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outHid,"outHid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

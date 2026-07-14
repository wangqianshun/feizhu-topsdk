<?php
/**
 * TOP API: taobao.xhotel.xitem.delete request
 * 
 * @author auto create
 * @since 1.0, 2023.08.04
 */
class XhotelXitemDeleteRequest
{
	/** 
	 * 商家酒店ID，指明该 x 元素属于哪家酒店
	 **/
	private $outHid;
	
	/** 
	 * 需要删除的 x_code 编码
	 **/
	private $outXCodes;
	
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

	public function setOutXCodes($outXCodes)
	{
		$this->outXCodes = $outXCodes;
		$this->apiParas["out_x_codes"] = $outXCodes;
	}

	public function getOutXCodes()
	{
		return $this->outXCodes;
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
		return "taobao.xhotel.xitem.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outHid,"outHid");
		RequestCheckUtil::checkNotNull($this->outXCodes,"outXCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

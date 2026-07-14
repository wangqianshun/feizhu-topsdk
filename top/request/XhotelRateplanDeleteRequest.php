<?php
/**
 * TOP API: taobao.xhotel.rateplan.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class XhotelRateplanDeleteRequest
{
	/** 
	 * 商家价格政策编码
	 **/
	private $rateplanCode;
	
	/** 
	 * ratepland标识
	 **/
	private $rpId;
	
	/** 
	 * 系统商，一般不用填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setRateplanCode($rateplanCode)
	{
		$this->rateplanCode = $rateplanCode;
		$this->apiParas["rateplan_code"] = $rateplanCode;
	}

	public function getRateplanCode()
	{
		return $this->rateplanCode;
	}

	public function setRpId($rpId)
	{
		$this->rpId = $rpId;
		$this->apiParas["rp_id"] = $rpId;
	}

	public function getRpId()
	{
		return $this->rpId;
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
		return "taobao.xhotel.rateplan.delete";
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

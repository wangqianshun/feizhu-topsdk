<?php
/**
 * TOP API: taobao.xhotel.servicetime.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelServicetimeGetRequest
{
	/** 
	 * 酒店id
	 **/
	private $hid;
	
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.servicetime.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hid,"hid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

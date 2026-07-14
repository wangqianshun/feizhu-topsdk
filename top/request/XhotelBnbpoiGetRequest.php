<?php
/**
 * TOP API: taobao.xhotel.bnbpoi.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.08
 */
class XhotelBnbpoiGetRequest
{
	/** 
	 * 城市code码
	 **/
	private $cityCode;
	
	private $apiParas = array();
	
	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpoi.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cityCode,"cityCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

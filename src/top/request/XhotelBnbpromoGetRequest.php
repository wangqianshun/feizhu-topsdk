<?php
/**
 * TOP API: taobao.xhotel.bnbpromo.get request
 * 
 * @author auto create
 * @since 1.0, 2022.01.10
 */
class XhotelBnbpromoGetRequest
{
	/** 
	 * 外部活动code
	 **/
	private $outerActivityCode;
	
	private $apiParas = array();
	
	public function setOuterActivityCode($outerActivityCode)
	{
		$this->outerActivityCode = $outerActivityCode;
		$this->apiParas["outer_activity_code"] = $outerActivityCode;
	}

	public function getOuterActivityCode()
	{
		return $this->outerActivityCode;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpromo.get";
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

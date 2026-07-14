<?php
/**
 * TOP API: taobao.xhotel.bnbprice.relation request
 * 
 * @author auto create
 * @since 1.0, 2026.04.09
 */
class XhotelBnbpriceRelationRequest
{
	/** 
	 * hid维度价态关系
	 **/
	private $priceCycleLimitParamList;
	
	private $apiParas = array();
	
	public function setPriceCycleLimitParamList($priceCycleLimitParamList)
	{
		$this->priceCycleLimitParamList = $priceCycleLimitParamList;
		$this->apiParas["price_cycle_limit_param_list"] = $priceCycleLimitParamList;
	}

	public function getPriceCycleLimitParamList()
	{
		return $this->priceCycleLimitParamList;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbprice.relation";
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

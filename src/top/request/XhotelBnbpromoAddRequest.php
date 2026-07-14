<?php
/**
 * TOP API: taobao.xhotel.bnbpromo.add request
 * 
 * @author auto create
 * @since 1.0, 2026.01.12
 */
class XhotelBnbpromoAddRequest
{
	/** 
	 * 营销类型
	 **/
	private $promoInfo;
	
	private $apiParas = array();
	
	public function setPromoInfo($promoInfo)
	{
		$this->promoInfo = $promoInfo;
		$this->apiParas["promo_info"] = $promoInfo;
	}

	public function getPromoInfo()
	{
		return $this->promoInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpromo.add";
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

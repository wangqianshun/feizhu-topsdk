<?php
/**
 * TOP API: taobao.xhotel.bnbpromo.update request
 * 
 * @author auto create
 * @since 1.0, 2022.01.10
 */
class XhotelBnbpromoUpdateRequest
{
	/** 
	 * 更新营销活动的入参
	 **/
	private $updatePromoParam;
	
	private $apiParas = array();
	
	public function setUpdatePromoParam($updatePromoParam)
	{
		$this->updatePromoParam = $updatePromoParam;
		$this->apiParas["update_promo_param"] = $updatePromoParam;
	}

	public function getUpdatePromoParam()
	{
		return $this->updatePromoParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpromo.update";
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

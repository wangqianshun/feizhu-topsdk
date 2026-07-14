<?php
/**
 * TOP API: taobao.xhotel.promotion.create request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelPromotionCreateRequest
{
	/** 
	 * 促销活动对象
	 **/
	private $createPromotionParam;
	
	private $apiParas = array();
	
	public function setCreatePromotionParam($createPromotionParam)
	{
		$this->createPromotionParam = $createPromotionParam;
		$this->apiParas["create_promotion_param"] = $createPromotionParam;
	}

	public function getCreatePromotionParam()
	{
		return $this->createPromotionParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.promotion.create";
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

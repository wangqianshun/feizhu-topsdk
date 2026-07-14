<?php
/**
 * TOP API: taobao.xhotel.promotion.list request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelPromotionListRequest
{
	/** 
	 * 查询活动请求
	 **/
	private $promotionParam;
	
	private $apiParas = array();
	
	public function setPromotionParam($promotionParam)
	{
		$this->promotionParam = $promotionParam;
		$this->apiParas["promotion_param"] = $promotionParam;
	}

	public function getPromotionParam()
	{
		return $this->promotionParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.promotion.list";
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

<?php
/**
 * TOP API: taobao.xhotel.promotion.query request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelPromotionQueryRequest
{
	/** 
	 * 查询活动请求
	 **/
	private $queryPromotionParam;
	
	private $apiParas = array();
	
	public function setQueryPromotionParam($queryPromotionParam)
	{
		$this->queryPromotionParam = $queryPromotionParam;
		$this->apiParas["query_promotion_param"] = $queryPromotionParam;
	}

	public function getQueryPromotionParam()
	{
		return $this->queryPromotionParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.promotion.query";
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

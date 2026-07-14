<?php
/**
 * TOP API: taobao.xhotel.promotion.resource.bind request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelPromotionResourceBindRequest
{
	/** 
	 * 资源绑定请求
	 **/
	private $bindPromotionResourceParam;
	
	private $apiParas = array();
	
	public function setBindPromotionResourceParam($bindPromotionResourceParam)
	{
		$this->bindPromotionResourceParam = $bindPromotionResourceParam;
		$this->apiParas["bind_promotion_resource_param"] = $bindPromotionResourceParam;
	}

	public function getBindPromotionResourceParam()
	{
		return $this->bindPromotionResourceParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.promotion.resource.bind";
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

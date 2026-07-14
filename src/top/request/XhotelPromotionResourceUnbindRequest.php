<?php
/**
 * TOP API: taobao.xhotel.promotion.resource.unbind request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelPromotionResourceUnbindRequest
{
	/** 
	 * 资源解绑请求
	 **/
	private $unBindPromotionResourceParam;
	
	private $apiParas = array();
	
	public function setUnBindPromotionResourceParam($unBindPromotionResourceParam)
	{
		$this->unBindPromotionResourceParam = $unBindPromotionResourceParam;
		$this->apiParas["un_bind_promotion_resource_param"] = $unBindPromotionResourceParam;
	}

	public function getUnBindPromotionResourceParam()
	{
		return $this->unBindPromotionResourceParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.promotion.resource.unbind";
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

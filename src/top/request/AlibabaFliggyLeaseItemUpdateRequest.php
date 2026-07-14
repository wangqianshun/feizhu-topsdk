<?php
/**
 * TOP API: alibaba.fliggy.lease.item.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseItemUpdateRequest
{
	/** 
	 * 更新商品请求
	 **/
	private $updateItemRequest;
	
	private $apiParas = array();
	
	public function setUpdateItemRequest($updateItemRequest)
	{
		$this->updateItemRequest = $updateItemRequest;
		$this->apiParas["update_item_request"] = $updateItemRequest;
	}

	public function getUpdateItemRequest()
	{
		return $this->updateItemRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.item.update";
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

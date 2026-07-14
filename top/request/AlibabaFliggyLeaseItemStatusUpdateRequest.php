<?php
/**
 * TOP API: alibaba.fliggy.lease.item.status.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseItemStatusUpdateRequest
{
	/** 
	 * 商品上下架请求
	 **/
	private $updateItemStatusRequest;
	
	private $apiParas = array();
	
	public function setUpdateItemStatusRequest($updateItemStatusRequest)
	{
		$this->updateItemStatusRequest = $updateItemStatusRequest;
		$this->apiParas["update_item_status_request"] = $updateItemStatusRequest;
	}

	public function getUpdateItemStatusRequest()
	{
		return $this->updateItemStatusRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.item.status.update";
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

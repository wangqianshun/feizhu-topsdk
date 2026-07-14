<?php
/**
 * TOP API: alibaba.fliggy.lease.item.inventory.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseItemInventoryUpdateRequest
{
	/** 
	 * 商品库存修改请求
	 **/
	private $updateInventoryRequest;
	
	private $apiParas = array();
	
	public function setUpdateInventoryRequest($updateInventoryRequest)
	{
		$this->updateInventoryRequest = $updateInventoryRequest;
		$this->apiParas["update_inventory_request"] = $updateInventoryRequest;
	}

	public function getUpdateInventoryRequest()
	{
		return $this->updateInventoryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.item.inventory.update";
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

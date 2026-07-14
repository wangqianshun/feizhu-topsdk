<?php
/**
 * TOP API: alibaba.fliggy.lease.item.add request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseItemAddRequest
{
	/** 
	 * 新增商品请求
	 **/
	private $addItemRequest;
	
	private $apiParas = array();
	
	public function setAddItemRequest($addItemRequest)
	{
		$this->addItemRequest = $addItemRequest;
		$this->apiParas["add_item_request"] = $addItemRequest;
	}

	public function getAddItemRequest()
	{
		return $this->addItemRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.item.add";
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

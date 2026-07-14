<?php
/**
 * TOP API: alibaba.fliggy.lease.order.query request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseOrderQueryRequest
{
	/** 
	 * 订单信息查询请求
	 **/
	private $orderQueryRequest;
	
	private $apiParas = array();
	
	public function setOrderQueryRequest($orderQueryRequest)
	{
		$this->orderQueryRequest = $orderQueryRequest;
		$this->apiParas["order_query_request"] = $orderQueryRequest;
	}

	public function getOrderQueryRequest()
	{
		return $this->orderQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.order.query";
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

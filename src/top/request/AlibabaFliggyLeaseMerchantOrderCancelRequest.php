<?php
/**
 * TOP API: alibaba.fliggy.lease.merchant.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseMerchantOrderCancelRequest
{
	/** 
	 * 商家取消订单请求
	 **/
	private $cancelOrderRequest;
	
	private $apiParas = array();
	
	public function setCancelOrderRequest($cancelOrderRequest)
	{
		$this->cancelOrderRequest = $cancelOrderRequest;
		$this->apiParas["cancel_order_request"] = $cancelOrderRequest;
	}

	public function getCancelOrderRequest()
	{
		return $this->cancelOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.merchant.order.cancel";
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

<?php
/**
 * TOP API: qimen.alibaba.fliggy.lease.order.status.sync request
 * 
 * @author auto create
 * @since 1.0, 2026.05.14
 */
class AlibabaFliggyLeaseOrderStatusSyncRequest
{
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 订单状态 PENDING_USER_AUTH:待用户认证 CREDIT_REVIEWING:信用审核中 PENDING_PAYMENT:待支付 PREPARING:备货中 SHIPPED:已发货 RENTING:租用中 PENDING_RETURN:待归还 RETURNING:归还中 PENDING_QUALITY_INSPECTION:待质检 RETURN_PENDING_DEDUCT:已归还待扣款 RETURN_SUCCESS:归还成功 CLOSED:租赁关闭
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "qimen.alibaba.fliggy.lease.order.status.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

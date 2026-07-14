<?php
/**
 * TOP API: alibaba.ascp.logistics.seller.writeoff request
 * 
 * @author auto create
 * @since 1.0, 2026.03.31
 */
class AlibabaAscpLogisticsSellerWriteoffRequest
{
	/** 
	 * 所要核销的核销物流单ID，在alibaba.ascp.logistics.seller.orders.get中获取。
	 **/
	private $lpOrderId;
	
	/** 
	 * 核销码
	 **/
	private $receiveCode;
	
	private $apiParas = array();
	
	public function setLpOrderId($lpOrderId)
	{
		$this->lpOrderId = $lpOrderId;
		$this->apiParas["lp_order_id"] = $lpOrderId;
	}

	public function getLpOrderId()
	{
		return $this->lpOrderId;
	}

	public function setReceiveCode($receiveCode)
	{
		$this->receiveCode = $receiveCode;
		$this->apiParas["receive_code"] = $receiveCode;
	}

	public function getReceiveCode()
	{
		return $this->receiveCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.seller.writeoff";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lpOrderId,"lpOrderId");
		RequestCheckUtil::checkNotNull($this->receiveCode,"receiveCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

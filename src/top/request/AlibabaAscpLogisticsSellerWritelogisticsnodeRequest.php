<?php
/**
 * TOP API: alibaba.ascp.logistics.seller.writelogisticsnode request
 * 
 * @author auto create
 * @since 1.0, 2023.04.14
 */
class AlibabaAscpLogisticsSellerWritelogisticsnodeRequest
{
	/** 
	 * 物流发货单号
	 **/
	private $lpOrderId;
	
	/** 
	 * 物流节点
	 **/
	private $nodes;
	
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

	public function setNodes($nodes)
	{
		$this->nodes = $nodes;
		$this->apiParas["nodes"] = $nodes;
	}

	public function getNodes()
	{
		return $this->nodes;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.seller.writelogisticsnode";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lpOrderId,"lpOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

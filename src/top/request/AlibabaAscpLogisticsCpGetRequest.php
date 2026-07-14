<?php
/**
 * TOP API: alibaba.ascp.logistics.cp.get request
 * 
 * @author auto create
 * @since 1.0, 2026.03.31
 */
class AlibabaAscpLogisticsCpGetRequest
{
	/** 
	 * 请求体
	 **/
	private $logisticsResourceRequest;
	
	private $apiParas = array();
	
	public function setLogisticsResourceRequest($logisticsResourceRequest)
	{
		$this->logisticsResourceRequest = $logisticsResourceRequest;
		$this->apiParas["logistics_resource_request"] = $logisticsResourceRequest;
	}

	public function getLogisticsResourceRequest()
	{
		return $this->logisticsResourceRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.cp.get";
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

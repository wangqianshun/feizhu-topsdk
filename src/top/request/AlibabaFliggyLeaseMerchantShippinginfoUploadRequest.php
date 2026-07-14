<?php
/**
 * TOP API: alibaba.fliggy.lease.merchant.shippinginfo.upload request
 * 
 * @author auto create
 * @since 1.0, 2026.06.29
 */
class AlibabaFliggyLeaseMerchantShippinginfoUploadRequest
{
	/** 
	 * 发货信息
	 **/
	private $incompleteShipmentRequest;
	
	private $apiParas = array();
	
	public function setIncompleteShipmentRequest($incompleteShipmentRequest)
	{
		$this->incompleteShipmentRequest = $incompleteShipmentRequest;
		$this->apiParas["incomplete_shipment_request"] = $incompleteShipmentRequest;
	}

	public function getIncompleteShipmentRequest()
	{
		return $this->incompleteShipmentRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.merchant.shippinginfo.upload";
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

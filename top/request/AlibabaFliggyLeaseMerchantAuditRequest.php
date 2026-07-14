<?php
/**
 * TOP API: alibaba.fliggy.lease.merchant.audit request
 * 
 * @author auto create
 * @since 1.0, 2026.06.29
 */
class AlibabaFliggyLeaseMerchantAuditRequest
{
	/** 
	 * 审核请求
	 **/
	private $auditCallbackRequest;
	
	private $apiParas = array();
	
	public function setAuditCallbackRequest($auditCallbackRequest)
	{
		$this->auditCallbackRequest = $auditCallbackRequest;
		$this->apiParas["audit_callback_request"] = $auditCallbackRequest;
	}

	public function getAuditCallbackRequest()
	{
		return $this->auditCallbackRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.merchant.audit";
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

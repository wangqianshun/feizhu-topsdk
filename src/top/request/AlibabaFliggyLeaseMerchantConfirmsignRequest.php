<?php
/**
 * TOP API: alibaba.fliggy.lease.merchant.confirmsign request
 * 
 * @author auto create
 * @since 1.0, 2026.06.29
 */
class AlibabaFliggyLeaseMerchantConfirmsignRequest
{
	/** 
	 * 签收请求
	 **/
	private $confirmSignRequest;
	
	private $apiParas = array();
	
	public function setConfirmSignRequest($confirmSignRequest)
	{
		$this->confirmSignRequest = $confirmSignRequest;
		$this->apiParas["confirm_sign_request"] = $confirmSignRequest;
	}

	public function getConfirmSignRequest()
	{
		return $this->confirmSignRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.merchant.confirmsign";
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

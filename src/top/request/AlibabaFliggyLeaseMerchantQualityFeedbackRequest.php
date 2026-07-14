<?php
/**
 * TOP API: alibaba.fliggy.lease.merchant.quality.feedback request
 * 
 * @author auto create
 * @since 1.0, 2026.07.08
 */
class AlibabaFliggyLeaseMerchantQualityFeedbackRequest
{
	/** 
	 * 质检结果回传请求
	 **/
	private $feedbackQualityRequest;
	
	private $apiParas = array();
	
	public function setFeedbackQualityRequest($feedbackQualityRequest)
	{
		$this->feedbackQualityRequest = $feedbackQualityRequest;
		$this->apiParas["feedback_quality_request"] = $feedbackQualityRequest;
	}

	public function getFeedbackQualityRequest()
	{
		return $this->feedbackQualityRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.fliggy.lease.merchant.quality.feedback";
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

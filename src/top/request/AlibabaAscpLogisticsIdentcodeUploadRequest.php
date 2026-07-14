<?php
/**
 * TOP API: alibaba.ascp.logistics.identcode.upload request
 * 
 * @author auto create
 * @since 1.0, 2025.08.21
 */
class AlibabaAscpLogisticsIdentcodeUploadRequest
{
	/** 
	 * sn码列表，多个用逗号分隔
	 **/
	private $codeList;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 1代表交易订单；2代表渠道订单，默认不传代表交易订单
	 **/
	private $orderType;
	
	private $apiParas = array();
	
	public function setCodeList($codeList)
	{
		$this->codeList = $codeList;
		$this->apiParas["code_list"] = $codeList;
	}

	public function getCodeList()
	{
		return $this->codeList;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.identcode.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->codeList,"codeList");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

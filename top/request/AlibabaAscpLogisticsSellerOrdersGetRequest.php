<?php
/**
 * TOP API: alibaba.ascp.logistics.seller.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2026.03.31
 */
class AlibabaAscpLogisticsSellerOrdersGetRequest
{
	/** 
	 * 分页索引
	 **/
	private $pageIndex;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 收货码
	 **/
	private $receiveCode;
	
	/** 
	 * 淘系交易id
	 **/
	private $tid;
	
	/** 
	 * 核销日期
	 **/
	private $writeOffDate;
	
	/** 
	 * 1代表未核销，2代表已核销
	 **/
	private $writeOffStatus;
	
	private $apiParas = array();
	
	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setWriteOffDate($writeOffDate)
	{
		$this->writeOffDate = $writeOffDate;
		$this->apiParas["write_off_date"] = $writeOffDate;
	}

	public function getWriteOffDate()
	{
		return $this->writeOffDate;
	}

	public function setWriteOffStatus($writeOffStatus)
	{
		$this->writeOffStatus = $writeOffStatus;
		$this->apiParas["write_off_status"] = $writeOffStatus;
	}

	public function getWriteOffStatus()
	{
		return $this->writeOffStatus;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.seller.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receiveCode,"receiveCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

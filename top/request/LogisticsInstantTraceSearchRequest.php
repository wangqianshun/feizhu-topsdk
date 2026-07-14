<?php
/**
 * TOP API: taobao.logistics.instant.trace.search request
 * 
 * @author auto create
 * @since 1.0, 2026.03.31
 */
class LogisticsInstantTraceSearchRequest
{
	/** 
	 * 是否拆单
	 **/
	private $isSplit;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 子订单列表
	 **/
	private $subTid;
	
	/** 
	 * 交易单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setIsSplit($isSplit)
	{
		$this->isSplit = $isSplit;
		$this->apiParas["is_split"] = $isSplit;
	}

	public function getIsSplit()
	{
		return $this->isSplit;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
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

	public function getApiMethodName()
	{
		return "taobao.logistics.instant.trace.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

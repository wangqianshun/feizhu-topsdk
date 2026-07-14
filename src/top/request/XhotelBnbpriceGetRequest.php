<?php
/**
 * TOP API: taobao.xhotel.bnbprice.get request
 * 
 * @author auto create
 * @since 1.0, 2025.08.26
 */
class XhotelBnbpriceGetRequest
{
	/** 
	 * 结束日期
	 **/
	private $endDate;
	
	/** 
	 * 要获取价格的房源ID
	 **/
	private $shids;
	
	/** 
	 * 开始日期
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setShids($shids)
	{
		$this->shids = $shids;
		$this->apiParas["shids"] = $shids;
	}

	public function getShids()
	{
		return $this->shids;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbprice.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->shids,"shids");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

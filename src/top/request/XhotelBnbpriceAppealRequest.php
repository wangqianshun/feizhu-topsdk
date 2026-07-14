<?php
/**
 * TOP API: taobao.xhotel.bnbprice.appeal request
 * 
 * @author auto create
 * @since 1.0, 2026.06.16
 */
class XhotelBnbpriceAppealRequest
{
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbprice.appeal";
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

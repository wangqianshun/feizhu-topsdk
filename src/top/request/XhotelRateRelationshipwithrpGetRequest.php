<?php
/**
 * TOP API: taobao.xhotel.rate.relationshipwithrp.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRateRelationshipwithrpGetRequest
{
	/** 
	 * 宝贝的gid
	 **/
	private $gid;
	
	/** 
	 * 页数，可根据此值展示某页的数据。不填默认为1
	 **/
	private $pageNo;
	
	private $apiParas = array();
	
	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rate.relationshipwithrp.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gid,"gid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

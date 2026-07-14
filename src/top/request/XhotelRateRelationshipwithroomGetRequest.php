<?php
/**
 * TOP API: taobao.xhotel.rate.relationshipwithroom.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRateRelationshipwithroomGetRequest
{
	/** 
	 * 页数
	 **/
	private $pageNo;
	
	/** 
	 * rpId
	 **/
	private $rpId;
	
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

	public function setRpId($rpId)
	{
		$this->rpId = $rpId;
		$this->apiParas["rp_id"] = $rpId;
	}

	public function getRpId()
	{
		return $this->rpId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rate.relationshipwithroom.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rpId,"rpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: taobao.xhotel.bnbtag.operation request
 * 
 * @author auto create
 * @since 1.0, 2026.06.04
 */
class XhotelBnbtagOperationRequest
{
	/** 
	 * 操作人名
	 **/
	private $operation;
	
	/** 
	 * 标签集
	 **/
	private $tagList;
	
	private $apiParas = array();
	
	public function setOperation($operation)
	{
		$this->operation = $operation;
		$this->apiParas["operation"] = $operation;
	}

	public function getOperation()
	{
		return $this->operation;
	}

	public function setTagList($tagList)
	{
		$this->tagList = $tagList;
		$this->apiParas["tag_list"] = $tagList;
	}

	public function getTagList()
	{
		return $this->tagList;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbtag.operation";
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

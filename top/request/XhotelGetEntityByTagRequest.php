<?php
/**
 * TOP API: taobao.xhotel.get.entity.by.tag request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelGetEntityByTagRequest
{
	/** 
	 * 标签
	 **/
	private $tag;
	
	/** 
	 * 查询token，填入上一页查询的返回结果，只能按顺序单线程查询
	 **/
	private $tokenStr;
	
	private $apiParas = array();
	
	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
	}

	public function setTokenStr($tokenStr)
	{
		$this->tokenStr = $tokenStr;
		$this->apiParas["token_str"] = $tokenStr;
	}

	public function getTokenStr()
	{
		return $this->tokenStr;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.get.entity.by.tag";
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

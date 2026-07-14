<?php
/**
 * TOP API: taobao.xhotel.bnbowner.add request
 * 
 * @author auto create
 * @since 1.0, 2022.10.17
 */
class XhotelBnbownerAddRequest
{
	/** 
	 * 添加房东信息的对象
	 **/
	private $addOwnerParam;
	
	private $apiParas = array();
	
	public function setAddOwnerParam($addOwnerParam)
	{
		$this->addOwnerParam = $addOwnerParam;
		$this->apiParas["add_owner_param"] = $addOwnerParam;
	}

	public function getAddOwnerParam()
	{
		return $this->addOwnerParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbowner.add";
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

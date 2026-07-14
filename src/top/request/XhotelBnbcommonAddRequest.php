<?php
/**
 * TOP API: taobao.xhotel.bnbcommon.add request
 * 
 * @author auto create
 * @since 1.0, 2022.10.25
 */
class XhotelBnbcommonAddRequest
{
	/** 
	 * 参数
	 **/
	private $param;
	
	/** 
	 * 业务场景
	 **/
	private $scene;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbcommon.add";
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

<?php
/**
 * TOP API: taobao.xhotel.order.update.confirmcode request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelOrderUpdateConfirmcodeRequest
{
	/** 
	 * 系统入参
	 **/
	private $param;
	
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.update.confirmcode";
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

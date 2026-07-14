<?php
/**
 * TOP API: taobao.xhotel.bnb.combohotel.callback request
 * 
 * @author auto create
 * @since 1.0, 2026.04.29
 */
class XhotelBnbCombohotelCallbackRequest
{
	/** 
	 * 请求结果
	 **/
	private $data;
	
	/** 
	 * 扩展字段
	 **/
	private $extraMap;
	
	/** 
	 * 失败原因
	 **/
	private $msg;
	
	/** 
	 * 请求是否成功
	 **/
	private $success;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setExtraMap($extraMap)
	{
		$this->extraMap = $extraMap;
		$this->apiParas["extra_map"] = $extraMap;
	}

	public function getExtraMap()
	{
		return $this->extraMap;
	}

	public function setMsg($msg)
	{
		$this->msg = $msg;
		$this->apiParas["msg"] = $msg;
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function setSuccess($success)
	{
		$this->success = $success;
		$this->apiParas["success"] = $success;
	}

	public function getSuccess()
	{
		return $this->success;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnb.combohotel.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->success,"success");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

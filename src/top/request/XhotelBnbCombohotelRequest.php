<?php
/**
 * TOP API: taobao.xhotel.bnb.combohotel request
 * 
 * @author auto create
 * @since 1.0, 2026.04.29
 */
class XhotelBnbCombohotelRequest
{
	/** 
	 * 操作人
	 **/
	private $operator;
	
	/** 
	 * 竞品hid
	 **/
	private $xcHid;
	
	private $apiParas = array();
	
	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setXcHid($xcHid)
	{
		$this->xcHid = $xcHid;
		$this->apiParas["xc_hid"] = $xcHid;
	}

	public function getXcHid()
	{
		return $this->xcHid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnb.combohotel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->xcHid,"xcHid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

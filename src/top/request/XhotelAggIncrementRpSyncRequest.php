<?php
/**
 * TOP API: taobao.xhotel.agg.increment.rp.sync request
 * 
 * @author auto create
 * @since 1.0, 2024.12.26
 */
class XhotelAggIncrementRpSyncRequest
{
	/** 
	 * rid
	 **/
	private $rid;
	
	/** 
	 * rpid
	 **/
	private $rpId;
	
	private $apiParas = array();
	
	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
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
		return "taobao.xhotel.agg.increment.rp.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rid,"rid");
		RequestCheckUtil::checkNotNull($this->rpId,"rpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

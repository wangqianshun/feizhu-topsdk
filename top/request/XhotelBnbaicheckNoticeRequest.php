<?php
/**
 * TOP API: taobao.xhotel.bnbaicheck.notice request
 * 
 * @author auto create
 * @since 1.0, 2026.04.15
 */
class XhotelBnbaicheckNoticeRequest
{
	/** 
	 * 会话id
	 **/
	private $talkId;
	
	private $apiParas = array();
	
	public function setTalkId($talkId)
	{
		$this->talkId = $talkId;
		$this->apiParas["talk_id"] = $talkId;
	}

	public function getTalkId()
	{
		return $this->talkId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbaicheck.notice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->talkId,"talkId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: taobao.xhotel.bnbhotelprice.msg request
 * 
 * @author auto create
 * @since 1.0, 2026.04.14
 */
class XhotelBnbhotelpriceMsgRequest
{
	/** 
	 * 基础信息
	 **/
	private $extraMap;
	
	/** 
	 * 消息体
	 **/
	private $msgList;
	
	/** 
	 * 消息标题
	 **/
	private $title;
	
	/** 
	 * xc的酒店ID
	 **/
	private $xcHotelId;
	
	private $apiParas = array();
	
	public function setExtraMap($extraMap)
	{
		$this->extraMap = $extraMap;
		$this->apiParas["extra_map"] = $extraMap;
	}

	public function getExtraMap()
	{
		return $this->extraMap;
	}

	public function setMsgList($msgList)
	{
		$this->msgList = $msgList;
		$this->apiParas["msg_list"] = $msgList;
	}

	public function getMsgList()
	{
		return $this->msgList;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setXcHotelId($xcHotelId)
	{
		$this->xcHotelId = $xcHotelId;
		$this->apiParas["xc_hotel_id"] = $xcHotelId;
	}

	public function getXcHotelId()
	{
		return $this->xcHotelId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbhotelprice.msg";
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

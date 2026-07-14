<?php
/**
 * TOP API: taobao.xhotel.bnb.radar.callback request
 * 
 * @author auto create
 * @since 1.0, 2026.06.30
 */
class XhotelBnbRadarCallbackRequest
{
	/** 
	 * 业务参数
	 **/
	private $extraMap;
	
	/** 
	 * 酒店ID
	 **/
	private $hotelId;
	
	/** 
	 * 回调参数URL
	 **/
	private $ossUrl;
	
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

	public function setHotelId($hotelId)
	{
		$this->hotelId = $hotelId;
		$this->apiParas["hotel_id"] = $hotelId;
	}

	public function getHotelId()
	{
		return $this->hotelId;
	}

	public function setOssUrl($ossUrl)
	{
		$this->ossUrl = $ossUrl;
		$this->apiParas["oss_url"] = $ossUrl;
	}

	public function getOssUrl()
	{
		return $this->ossUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnb.radar.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hotelId,"hotelId");
		RequestCheckUtil::checkNotNull($this->ossUrl,"ossUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

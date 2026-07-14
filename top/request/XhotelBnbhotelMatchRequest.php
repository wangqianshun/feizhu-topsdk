<?php
/**
 * TOP API: taobao.xhotel.bnbhotel.match request
 * 
 * @author auto create
 * @since 1.0, 2026.04.14
 */
class XhotelBnbhotelMatchRequest
{
	/** 
	 * 竞品酒店id
	 **/
	private $competitionHotelId;
	
	private $apiParas = array();
	
	public function setCompetitionHotelId($competitionHotelId)
	{
		$this->competitionHotelId = $competitionHotelId;
		$this->apiParas["competition_hotel_id"] = $competitionHotelId;
	}

	public function getCompetitionHotelId()
	{
		return $this->competitionHotelId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbhotel.match";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->competitionHotelId,"competitionHotelId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

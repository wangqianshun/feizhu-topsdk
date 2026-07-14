<?php
/**
 * TOP API: taobao.xhotel.bnbhotelprice.track request
 * 
 * @author auto create
 * @since 1.0, 2026.04.14
 */
class XhotelBnbhotelpriceTrackRequest
{
	/** 
	 * 竞品酒店名称
	 **/
	private $competitionHotelName;
	
	/** 
	 * 竞品酒店id
	 **/
	private $competitionRoomHid;
	
	/** 
	 * 竞品房型id
	 **/
	private $competitionRoomId;
	
	/** 
	 * 扩展字段
	 **/
	private $extraMap;
	
	/** 
	 * 创建房型参数
	 **/
	private $sroomInfoAuditParam;
	
	private $apiParas = array();
	
	public function setCompetitionHotelName($competitionHotelName)
	{
		$this->competitionHotelName = $competitionHotelName;
		$this->apiParas["competition_hotel_name"] = $competitionHotelName;
	}

	public function getCompetitionHotelName()
	{
		return $this->competitionHotelName;
	}

	public function setCompetitionRoomHid($competitionRoomHid)
	{
		$this->competitionRoomHid = $competitionRoomHid;
		$this->apiParas["competition_room_hid"] = $competitionRoomHid;
	}

	public function getCompetitionRoomHid()
	{
		return $this->competitionRoomHid;
	}

	public function setCompetitionRoomId($competitionRoomId)
	{
		$this->competitionRoomId = $competitionRoomId;
		$this->apiParas["competition_room_id"] = $competitionRoomId;
	}

	public function getCompetitionRoomId()
	{
		return $this->competitionRoomId;
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

	public function setSroomInfoAuditParam($sroomInfoAuditParam)
	{
		$this->sroomInfoAuditParam = $sroomInfoAuditParam;
		$this->apiParas["sroom_info_audit_param"] = $sroomInfoAuditParam;
	}

	public function getSroomInfoAuditParam()
	{
		return $this->sroomInfoAuditParam;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbhotelprice.track";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->extraMap,"extraMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

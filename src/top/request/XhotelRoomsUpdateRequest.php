<?php
/**
 * TOP API: taobao.xhotel.rooms.update request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRoomsUpdateRequest
{
	/** 
	 * 批量全量推送房型共享库存,一次最多修改30个房型。json encode。示例：[{"out_rid":"hotel1_roomtype22","vendor":"","allotment_start_Time":"","allotment_end_time":"","superbook_start_time":"","superbook_end_time":"","roomQuota":[{"date":2010-01-28,"quota":10,"al_quota":2,"sp_quota":3}]}] 其中al_quota为保留房库存，sp_quota为超预定库存，quota为物理库存。al_quota和sp_quota需要向运营申请权限才可维护。allotment_start_Time和allotment_end_time为保留房库存开始和截止时间；superbook_start_time和superbook_end_time为超预定库存开始和截止时间。
	 **/
	private $roomQuotaMap;
	
	private $apiParas = array();
	
	public function setRoomQuotaMap($roomQuotaMap)
	{
		$this->roomQuotaMap = $roomQuotaMap;
		$this->apiParas["room_quota_map"] = $roomQuotaMap;
	}

	public function getRoomQuotaMap()
	{
		return $this->roomQuotaMap;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rooms.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roomQuotaMap,"roomQuotaMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

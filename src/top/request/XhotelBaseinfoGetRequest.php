<?php
/**
 * TOP API: taobao.xhotel.baseinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelBaseinfoGetRequest
{
	/** 
	 * 淘宝酒店ID
	 **/
	private $hid;
	
	/** 
	 * 是否需要房价基本信息（false为不需要），默认为需要
	 **/
	private $isNeedRatePlan;
	
	/** 
	 * 是否需要房型基本信息（false为不需要），默认为需要
	 **/
	private $isNeedRoomType;
	
	/** 
	 * 在查询酒店房型可售详情 时的入参JSON , {@link com.taobao.trip.hpc.client.query.HotelSellerInvQuery}
	 **/
	private $jsonHotelSellerInvQuery;
	
	/** 
	 * 是否需要酒店房型可售详情
	 **/
	private $needHotelDynamicInfo;
	
	/** 
	 * 是否需要 根据 hid 查询 标准房型列表
	 **/
	private $needSRoomTypeList;
	
	/** 
	 * 推荐使用卖家系统中的酒店ID。
	 **/
	private $outHid;
	
	/** 
	 * 用于标示该酒店发布的渠道信息
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setIsNeedRatePlan($isNeedRatePlan)
	{
		$this->isNeedRatePlan = $isNeedRatePlan;
		$this->apiParas["is_need_rate_plan"] = $isNeedRatePlan;
	}

	public function getIsNeedRatePlan()
	{
		return $this->isNeedRatePlan;
	}

	public function setIsNeedRoomType($isNeedRoomType)
	{
		$this->isNeedRoomType = $isNeedRoomType;
		$this->apiParas["is_need_room_type"] = $isNeedRoomType;
	}

	public function getIsNeedRoomType()
	{
		return $this->isNeedRoomType;
	}

	public function setJsonHotelSellerInvQuery($jsonHotelSellerInvQuery)
	{
		$this->jsonHotelSellerInvQuery = $jsonHotelSellerInvQuery;
		$this->apiParas["json_hotel_seller_inv_query"] = $jsonHotelSellerInvQuery;
	}

	public function getJsonHotelSellerInvQuery()
	{
		return $this->jsonHotelSellerInvQuery;
	}

	public function setNeedHotelDynamicInfo($needHotelDynamicInfo)
	{
		$this->needHotelDynamicInfo = $needHotelDynamicInfo;
		$this->apiParas["need_hotel_dynamic_info"] = $needHotelDynamicInfo;
	}

	public function getNeedHotelDynamicInfo()
	{
		return $this->needHotelDynamicInfo;
	}

	public function setNeedSRoomTypeList($needSRoomTypeList)
	{
		$this->needSRoomTypeList = $needSRoomTypeList;
		$this->apiParas["need_s_room_type_list"] = $needSRoomTypeList;
	}

	public function getNeedSRoomTypeList()
	{
		return $this->needSRoomTypeList;
	}

	public function setOutHid($outHid)
	{
		$this->outHid = $outHid;
		$this->apiParas["out_hid"] = $outHid;
	}

	public function getOutHid()
	{
		return $this->outHid;
	}

	public function setVendor($vendor)
	{
		$this->vendor = $vendor;
		$this->apiParas["vendor"] = $vendor;
	}

	public function getVendor()
	{
		return $this->vendor;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.baseinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->outHid,64,"outHid");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

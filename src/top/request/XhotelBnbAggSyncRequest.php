<?php
/**
 * TOP API: taobao.xhotel.bnb.agg.sync request
 * 
 * @author auto create
 * @since 1.0, 2025.06.12
 */
class XhotelBnbAggSyncRequest
{
	/** 
	 * 聚合房源hid
	 **/
	private $aggHid;
	
	/** 
	 * 聚合房源rid
	 **/
	private $aggRid;
	
	/** 
	 * 聚合房源rpId
	 **/
	private $aggRpId;
	
	/** 
	 * 聚合房源shid
	 **/
	private $aggShid;
	
	/** 
	 * 聚合房源门店分销时间
	 **/
	private $aggShidCtime;
	
	/** 
	 * 聚合房源门店分销成功
	 **/
	private $aggShidResult;
	
	/** 
	 * 聚合房源srid
	 **/
	private $aggSrid;
	
	/** 
	 * 聚合房源房型分销时间
	 **/
	private $aggSridCtime;
	
	/** 
	 * 聚合房源房型分销结果
	 **/
	private $aggSridResult;
	
	/** 
	 * 聚合类型
	 **/
	private $aggType;
	
	/** 
	 * 民宿hid
	 **/
	private $bnbHid;
	
	/** 
	 * 民宿rid
	 **/
	private $bnbRid;
	
	/** 
	 * 民宿rpid
	 **/
	private $bnbRpId;
	
	/** 
	 * 民宿shid
	 **/
	private $bnbShid;
	
	/** 
	 * 民宿srid
	 **/
	private $bnbSrid;
	
	/** 
	 * 进酒房源hid
	 **/
	private $hotelHid;
	
	/** 
	 * 进酒房源rid
	 **/
	private $hotelRid;
	
	/** 
	 * 进酒房源rp
	 **/
	private $hotelRpId;
	
	/** 
	 * 进酒房源shid
	 **/
	private $hotelShid;
	
	/** 
	 * 进酒房源srid
	 **/
	private $hotelSrid;
	
	/** 
	 * luid
	 **/
	private $luid;
	
	/** 
	 * 小猪门店ID
	 **/
	private $xiaozhuHid;
	
	private $apiParas = array();
	
	public function setAggHid($aggHid)
	{
		$this->aggHid = $aggHid;
		$this->apiParas["agg_hid"] = $aggHid;
	}

	public function getAggHid()
	{
		return $this->aggHid;
	}

	public function setAggRid($aggRid)
	{
		$this->aggRid = $aggRid;
		$this->apiParas["agg_rid"] = $aggRid;
	}

	public function getAggRid()
	{
		return $this->aggRid;
	}

	public function setAggRpId($aggRpId)
	{
		$this->aggRpId = $aggRpId;
		$this->apiParas["agg_rp_id"] = $aggRpId;
	}

	public function getAggRpId()
	{
		return $this->aggRpId;
	}

	public function setAggShid($aggShid)
	{
		$this->aggShid = $aggShid;
		$this->apiParas["agg_shid"] = $aggShid;
	}

	public function getAggShid()
	{
		return $this->aggShid;
	}

	public function setAggShidCtime($aggShidCtime)
	{
		$this->aggShidCtime = $aggShidCtime;
		$this->apiParas["agg_shid_ctime"] = $aggShidCtime;
	}

	public function getAggShidCtime()
	{
		return $this->aggShidCtime;
	}

	public function setAggShidResult($aggShidResult)
	{
		$this->aggShidResult = $aggShidResult;
		$this->apiParas["agg_shid_result"] = $aggShidResult;
	}

	public function getAggShidResult()
	{
		return $this->aggShidResult;
	}

	public function setAggSrid($aggSrid)
	{
		$this->aggSrid = $aggSrid;
		$this->apiParas["agg_srid"] = $aggSrid;
	}

	public function getAggSrid()
	{
		return $this->aggSrid;
	}

	public function setAggSridCtime($aggSridCtime)
	{
		$this->aggSridCtime = $aggSridCtime;
		$this->apiParas["agg_srid_ctime"] = $aggSridCtime;
	}

	public function getAggSridCtime()
	{
		return $this->aggSridCtime;
	}

	public function setAggSridResult($aggSridResult)
	{
		$this->aggSridResult = $aggSridResult;
		$this->apiParas["agg_srid_result"] = $aggSridResult;
	}

	public function getAggSridResult()
	{
		return $this->aggSridResult;
	}

	public function setAggType($aggType)
	{
		$this->aggType = $aggType;
		$this->apiParas["agg_type"] = $aggType;
	}

	public function getAggType()
	{
		return $this->aggType;
	}

	public function setBnbHid($bnbHid)
	{
		$this->bnbHid = $bnbHid;
		$this->apiParas["bnb_hid"] = $bnbHid;
	}

	public function getBnbHid()
	{
		return $this->bnbHid;
	}

	public function setBnbRid($bnbRid)
	{
		$this->bnbRid = $bnbRid;
		$this->apiParas["bnb_rid"] = $bnbRid;
	}

	public function getBnbRid()
	{
		return $this->bnbRid;
	}

	public function setBnbRpId($bnbRpId)
	{
		$this->bnbRpId = $bnbRpId;
		$this->apiParas["bnb_rp_id"] = $bnbRpId;
	}

	public function getBnbRpId()
	{
		return $this->bnbRpId;
	}

	public function setBnbShid($bnbShid)
	{
		$this->bnbShid = $bnbShid;
		$this->apiParas["bnb_shid"] = $bnbShid;
	}

	public function getBnbShid()
	{
		return $this->bnbShid;
	}

	public function setBnbSrid($bnbSrid)
	{
		$this->bnbSrid = $bnbSrid;
		$this->apiParas["bnb_srid"] = $bnbSrid;
	}

	public function getBnbSrid()
	{
		return $this->bnbSrid;
	}

	public function setHotelHid($hotelHid)
	{
		$this->hotelHid = $hotelHid;
		$this->apiParas["hotel_hid"] = $hotelHid;
	}

	public function getHotelHid()
	{
		return $this->hotelHid;
	}

	public function setHotelRid($hotelRid)
	{
		$this->hotelRid = $hotelRid;
		$this->apiParas["hotel_rid"] = $hotelRid;
	}

	public function getHotelRid()
	{
		return $this->hotelRid;
	}

	public function setHotelRpId($hotelRpId)
	{
		$this->hotelRpId = $hotelRpId;
		$this->apiParas["hotel_rp_id"] = $hotelRpId;
	}

	public function getHotelRpId()
	{
		return $this->hotelRpId;
	}

	public function setHotelShid($hotelShid)
	{
		$this->hotelShid = $hotelShid;
		$this->apiParas["hotel_shid"] = $hotelShid;
	}

	public function getHotelShid()
	{
		return $this->hotelShid;
	}

	public function setHotelSrid($hotelSrid)
	{
		$this->hotelSrid = $hotelSrid;
		$this->apiParas["hotel_srid"] = $hotelSrid;
	}

	public function getHotelSrid()
	{
		return $this->hotelSrid;
	}

	public function setLuid($luid)
	{
		$this->luid = $luid;
		$this->apiParas["luid"] = $luid;
	}

	public function getLuid()
	{
		return $this->luid;
	}

	public function setXiaozhuHid($xiaozhuHid)
	{
		$this->xiaozhuHid = $xiaozhuHid;
		$this->apiParas["xiaozhu_hid"] = $xiaozhuHid;
	}

	public function getXiaozhuHid()
	{
		return $this->xiaozhuHid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnb.agg.sync";
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

<?php
/**
 * TOP API: taobao.xhotel.bnbhotel.data.sync request
 * 
 * @author auto create
 * @since 1.0, 2025.11.05
 */
class XhotelBnbhotelDataSyncRequest
{
	/** 
	 * 飞猪民宿hid
	 **/
	private $bnbHid;
	
	/** 
	 * 飞猪民宿名称
	 **/
	private $bnbName;
	
	/** 
	 * 飞猪民宿rid
	 **/
	private $bnbRid;
	
	/** 
	 * ctime
	 **/
	private $ctime;
	
	/** 
	 * 小猪分销平台ID
	 **/
	private $distributedId;
	
	/** 
	 * 飞猪酒店hid
	 **/
	private $hotelHid;
	
	/** 
	 * 房型分销结果
	 **/
	private $hotelResult;
	
	/** 
	 * 飞猪酒店rid
	 **/
	private $hotelRid;
	
	/** 
	 * KA渠道
	 **/
	private $kaChannel;
	
	/** 
	 * 飞猪luid
	 **/
	private $luid;
	
	/** 
	 * 飞猪酒店名称
	 **/
	private $name;
	
	/** 
	 * 分销结果
	 **/
	private $result;
	
	/** 
	 * 飞猪酒店shid
	 **/
	private $shid;
	
	/** 
	 * ctime
	 **/
	private $utime;
	
	/** 
	 * 小猪酒店ID
	 **/
	private $xiaozhuHid;
	
	private $apiParas = array();
	
	public function setBnbHid($bnbHid)
	{
		$this->bnbHid = $bnbHid;
		$this->apiParas["bnb_hid"] = $bnbHid;
	}

	public function getBnbHid()
	{
		return $this->bnbHid;
	}

	public function setBnbName($bnbName)
	{
		$this->bnbName = $bnbName;
		$this->apiParas["bnb_name"] = $bnbName;
	}

	public function getBnbName()
	{
		return $this->bnbName;
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

	public function setCtime($ctime)
	{
		$this->ctime = $ctime;
		$this->apiParas["ctime"] = $ctime;
	}

	public function getCtime()
	{
		return $this->ctime;
	}

	public function setDistributedId($distributedId)
	{
		$this->distributedId = $distributedId;
		$this->apiParas["distributed_id"] = $distributedId;
	}

	public function getDistributedId()
	{
		return $this->distributedId;
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

	public function setHotelResult($hotelResult)
	{
		$this->hotelResult = $hotelResult;
		$this->apiParas["hotel_result"] = $hotelResult;
	}

	public function getHotelResult()
	{
		return $this->hotelResult;
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

	public function setKaChannel($kaChannel)
	{
		$this->kaChannel = $kaChannel;
		$this->apiParas["ka_channel"] = $kaChannel;
	}

	public function getKaChannel()
	{
		return $this->kaChannel;
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

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function setShid($shid)
	{
		$this->shid = $shid;
		$this->apiParas["shid"] = $shid;
	}

	public function getShid()
	{
		return $this->shid;
	}

	public function setUtime($utime)
	{
		$this->utime = $utime;
		$this->apiParas["utime"] = $utime;
	}

	public function getUtime()
	{
		return $this->utime;
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
		return "taobao.xhotel.bnbhotel.data.sync";
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

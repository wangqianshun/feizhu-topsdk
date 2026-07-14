<?php
/**
 * TOP API: taobao.xhotel.room.update request
 * 
 * @author auto create
 * @since 1.0, 2025.06.29
 */
class XhotelRoomUpdateRequest
{
	/** 
	 * 保留房库存截止时间
	 **/
	private $allotmentEndTime;
	
	/** 
	 * 保留房库存截止时间
	 **/
	private $allotmentStartTime;
	
	/** 
	 * 废弃，宝贝描述展示在宝贝详情页面
	 **/
	private $desc;
	
	/** 
	 * 废弃，使用out_rid
	 **/
	private $gid;
	
	/** 
	 * 废弃，房型购买须知展示在PC购物路径
	 **/
	private $guide;
	
	/** 
	 * 废弃，房型是否提供发票
	 **/
	private $hasReceipt;
	
	/** 
	 * 房型共享库存日历。quota物理库存；al_quota保留房库存；sp_quota超预定库存。其中保留房库存和超预定库存需要向运营申请权限示例：[{"date":2011-01-28,"quota":10,"al_quota":2,"sp_quota":3}]
	 **/
	private $inventory;
	
	/** 
	 * 卖家房型ID
	 **/
	private $outRid;
	
	/** 
	 * 废弃，宝贝图片，没有默认使用标准酒店房型图片
	 **/
	private $pic;
	
	/** 
	 * 废弃，房型发票说明，不能超过100个字
	 **/
	private $receiptInfo;
	
	/** 
	 * 废弃，房型发票类型为其他时的发票描述,不能超过30个字
	 **/
	private $receiptOtherTypeDesc;
	
	/** 
	 * 废弃，房型发票类型。A,B。分别代表： A:酒店住宿发票,B:其他
	 **/
	private $receiptType;
	
	/** 
	 * 房型库存开关。 1，开；2，关
	 **/
	private $roomSwitchCal;
	
	/** 
	 * 宝贝状态,1上架。
	 **/
	private $status;
	
	/** 
	 * 超预定库存截止时间
	 **/
	private $superbookEndTime;
	
	/** 
	 * 超预定库存开始时间
	 **/
	private $superbookStartTime;
	
	/** 
	 * 废弃，宝贝名称展示在店铺里
	 **/
	private $title;
	
	/** 
	 * 系统商，一般不填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setAllotmentEndTime($allotmentEndTime)
	{
		$this->allotmentEndTime = $allotmentEndTime;
		$this->apiParas["allotment_end_time"] = $allotmentEndTime;
	}

	public function getAllotmentEndTime()
	{
		return $this->allotmentEndTime;
	}

	public function setAllotmentStartTime($allotmentStartTime)
	{
		$this->allotmentStartTime = $allotmentStartTime;
		$this->apiParas["allotment_start_time"] = $allotmentStartTime;
	}

	public function getAllotmentStartTime()
	{
		return $this->allotmentStartTime;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setGuide($guide)
	{
		$this->guide = $guide;
		$this->apiParas["guide"] = $guide;
	}

	public function getGuide()
	{
		return $this->guide;
	}

	public function setHasReceipt($hasReceipt)
	{
		$this->hasReceipt = $hasReceipt;
		$this->apiParas["has_receipt"] = $hasReceipt;
	}

	public function getHasReceipt()
	{
		return $this->hasReceipt;
	}

	public function setInventory($inventory)
	{
		$this->inventory = $inventory;
		$this->apiParas["inventory"] = $inventory;
	}

	public function getInventory()
	{
		return $this->inventory;
	}

	public function setOutRid($outRid)
	{
		$this->outRid = $outRid;
		$this->apiParas["out_rid"] = $outRid;
	}

	public function getOutRid()
	{
		return $this->outRid;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setReceiptInfo($receiptInfo)
	{
		$this->receiptInfo = $receiptInfo;
		$this->apiParas["receipt_info"] = $receiptInfo;
	}

	public function getReceiptInfo()
	{
		return $this->receiptInfo;
	}

	public function setReceiptOtherTypeDesc($receiptOtherTypeDesc)
	{
		$this->receiptOtherTypeDesc = $receiptOtherTypeDesc;
		$this->apiParas["receipt_other_type_desc"] = $receiptOtherTypeDesc;
	}

	public function getReceiptOtherTypeDesc()
	{
		return $this->receiptOtherTypeDesc;
	}

	public function setReceiptType($receiptType)
	{
		$this->receiptType = $receiptType;
		$this->apiParas["receipt_type"] = $receiptType;
	}

	public function getReceiptType()
	{
		return $this->receiptType;
	}

	public function setRoomSwitchCal($roomSwitchCal)
	{
		$this->roomSwitchCal = $roomSwitchCal;
		$this->apiParas["room_switch_cal"] = $roomSwitchCal;
	}

	public function getRoomSwitchCal()
	{
		return $this->roomSwitchCal;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSuperbookEndTime($superbookEndTime)
	{
		$this->superbookEndTime = $superbookEndTime;
		$this->apiParas["superbook_end_time"] = $superbookEndTime;
	}

	public function getSuperbookEndTime()
	{
		return $this->superbookEndTime;
	}

	public function setSuperbookStartTime($superbookStartTime)
	{
		$this->superbookStartTime = $superbookStartTime;
		$this->apiParas["superbook_start_time"] = $superbookStartTime;
	}

	public function getSuperbookStartTime()
	{
		return $this->superbookStartTime;
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
		return "taobao.xhotel.room.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->desc,50000,"desc");
		RequestCheckUtil::checkMaxLength($this->guide,600,"guide");
		RequestCheckUtil::checkMaxLength($this->outRid,50,"outRid");
		RequestCheckUtil::checkMaxLength($this->receiptInfo,100,"receiptInfo");
		RequestCheckUtil::checkMaxLength($this->receiptOtherTypeDesc,30,"receiptOtherTypeDesc");
		RequestCheckUtil::checkMaxLength($this->title,60,"title");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

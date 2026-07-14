<?php
/**
 * TOP API: taobao.xhotel.order.search request
 * 
 * @author auto create
 * @since 1.0, 2026.04.22
 */
class XhotelOrderSearchRequest
{
	/** 
	 * 入住时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于checkin_date_start或者间隔不能大于30
	 **/
	private $checkinDateEnd;
	
	/** 
	 * 入住时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
	 **/
	private $checkinDateStart;
	
	/** 
	 * 离店时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于checkout_date_start或者间隔不能大于30
	 **/
	private $checkoutDateEnd;
	
	/** 
	 * 离店时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
	 **/
	private $checkoutDateStart;
	
	/** 
	 * 订单创建时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于created_start或者间隔不能大于30
	 **/
	private $createdEnd;
	
	/** 
	 * 订单创建时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
	 **/
	private $createdStart;
	
	/** 
	 * 订单类型（true为直连，false为非直连）
	 **/
	private $direct;
	
	/** 
	 * 酒店订单oids列表，多个oid用英文逗号隔开，一次不超过20个。
	 **/
	private $orderIds;
	
	/** 
	 * 酒店订单tids列表，多个tid用英文逗号隔开，一次不超过20个。oids和tids都传的情况下默认使用tids
	 **/
	private $orderTids;
	
	/** 
	 * 外部订单号out_oids列表，多个oid用英文逗号隔开，一次不超过20个。
	 **/
	private $outOids;
	
	/** 
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
	 **/
	private $pageNo;
	
	/** 
	 * 订单状态（可发多个，逗号隔开）
	 **/
	private $tradeStatus;
	
	/** 
	 * 系统商标识
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setCheckinDateEnd($checkinDateEnd)
	{
		$this->checkinDateEnd = $checkinDateEnd;
		$this->apiParas["checkin_date_end"] = $checkinDateEnd;
	}

	public function getCheckinDateEnd()
	{
		return $this->checkinDateEnd;
	}

	public function setCheckinDateStart($checkinDateStart)
	{
		$this->checkinDateStart = $checkinDateStart;
		$this->apiParas["checkin_date_start"] = $checkinDateStart;
	}

	public function getCheckinDateStart()
	{
		return $this->checkinDateStart;
	}

	public function setCheckoutDateEnd($checkoutDateEnd)
	{
		$this->checkoutDateEnd = $checkoutDateEnd;
		$this->apiParas["checkout_date_end"] = $checkoutDateEnd;
	}

	public function getCheckoutDateEnd()
	{
		return $this->checkoutDateEnd;
	}

	public function setCheckoutDateStart($checkoutDateStart)
	{
		$this->checkoutDateStart = $checkoutDateStart;
		$this->apiParas["checkout_date_start"] = $checkoutDateStart;
	}

	public function getCheckoutDateStart()
	{
		return $this->checkoutDateStart;
	}

	public function setCreatedEnd($createdEnd)
	{
		$this->createdEnd = $createdEnd;
		$this->apiParas["created_end"] = $createdEnd;
	}

	public function getCreatedEnd()
	{
		return $this->createdEnd;
	}

	public function setCreatedStart($createdStart)
	{
		$this->createdStart = $createdStart;
		$this->apiParas["created_start"] = $createdStart;
	}

	public function getCreatedStart()
	{
		return $this->createdStart;
	}

	public function setDirect($direct)
	{
		$this->direct = $direct;
		$this->apiParas["direct"] = $direct;
	}

	public function getDirect()
	{
		return $this->direct;
	}

	public function setOrderIds($orderIds)
	{
		$this->orderIds = $orderIds;
		$this->apiParas["order_ids"] = $orderIds;
	}

	public function getOrderIds()
	{
		return $this->orderIds;
	}

	public function setOrderTids($orderTids)
	{
		$this->orderTids = $orderTids;
		$this->apiParas["order_tids"] = $orderTids;
	}

	public function getOrderTids()
	{
		return $this->orderTids;
	}

	public function setOutOids($outOids)
	{
		$this->outOids = $outOids;
		$this->apiParas["out_oids"] = $outOids;
	}

	public function getOutOids()
	{
		return $this->outOids;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setTradeStatus($tradeStatus)
	{
		$this->tradeStatus = $tradeStatus;
		$this->apiParas["trade_status"] = $tradeStatus;
	}

	public function getTradeStatus()
	{
		return $this->tradeStatus;
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
		return "taobao.xhotel.order.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->createdEnd,"createdEnd");
		RequestCheckUtil::checkNotNull($this->createdStart,"createdStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

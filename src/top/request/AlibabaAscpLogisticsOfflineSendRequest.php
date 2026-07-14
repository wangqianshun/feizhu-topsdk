<?php
/**
 * TOP API: alibaba.ascp.logistics.offline.send request
 * 
 * @author auto create
 * @since 1.0, 2026.07.14
 */
class AlibabaAscpLogisticsOfflineSendRequest
{
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。 如果为空，取的卖家的默认退货地址
	 **/
	private $cancelId;
	
	/** 
	 * 包裹信息
	 **/
	private $consignPkgs;
	
	/** 
	 * 子订单发货状态
	 **/
	private $consignStatus;
	
	/** 
	 * 发货类型 0：普通发货(老链路) 1: 普通发货（新链路，支持子订单部分发货、成分品发货以及ERP线下赠品发货） 2: 将发货状态从"部分发"修改为"全部发" 3：补发；默认为0
	 **/
	private $consignType;
	
	/** 
	 * feature参数格式 范例: identCode=tid1:识别码1,识别码2|tid2:识别码3;machineCode=tid3:3C机器号A,3C机器号B identCode为识别码的KEY,machineCode为3C的KEY,多个key之间用”;”分隔 “tid1:识别码1,识别码2|tid2:识别码3”为identCode对应的value。 "|"不同商品间的分隔符。 例1商品和2商品，之间就用"|"分开。 TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上) ":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。 "," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。 具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。 参数格式：identCode=TIDA:12345,67890。 TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。 当存在"|"时，就说明订单中存在多个商品，商品间用"|"分隔了开来。|"之后的内容含义同上。retailStoreId=12345，发货门店ID或仓信息。retailStoreType=STORE: 发货门店类别，STORE表示门店，WAREHOUSE表示电商仓。对于全渠道订单回传的商家，retailStoreId和retailStoreType字段为必填字段。instantMobilePhoneNumber表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"。
	 **/
	private $feature;
	
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。如果为空，取的卖家的默认取货地址
	 **/
	private $senderId;
	
	/** 
	 * 发货的子订单id列表（consign_type = 1、2、3 时不再使用次字段，使用新字段goods代替需要发货的子订单信息）
	 **/
	private $subTid;
	
	/** 
	 * 淘宝交易ID
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCancelId($cancelId)
	{
		$this->cancelId = $cancelId;
		$this->apiParas["cancel_id"] = $cancelId;
	}

	public function getCancelId()
	{
		return $this->cancelId;
	}

	public function setConsignPkgs($consignPkgs)
	{
		$this->consignPkgs = $consignPkgs;
		$this->apiParas["consign_pkgs"] = $consignPkgs;
	}

	public function getConsignPkgs()
	{
		return $this->consignPkgs;
	}

	public function setConsignStatus($consignStatus)
	{
		$this->consignStatus = $consignStatus;
		$this->apiParas["consign_status"] = $consignStatus;
	}

	public function getConsignStatus()
	{
		return $this->consignStatus;
	}

	public function setConsignType($consignType)
	{
		$this->consignType = $consignType;
		$this->apiParas["consign_type"] = $consignType;
	}

	public function getConsignType()
	{
		return $this->consignType;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setSenderId($senderId)
	{
		$this->senderId = $senderId;
		$this->apiParas["sender_id"] = $senderId;
	}

	public function getSenderId()
	{
		return $this->senderId;
	}

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.offline.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->subTid,1000,"subTid");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

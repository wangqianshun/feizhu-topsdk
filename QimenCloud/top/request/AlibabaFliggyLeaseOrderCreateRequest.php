<?php
/**
 * TOP API: qimen.alibaba.fliggy.lease.order.create request
 * 
 * @author auto create
 * @since 1.0, 2026.06.05
 */
class AlibabaFliggyLeaseOrderCreateRequest
{
	/** 
	 * 买家收货地址信息
	 **/
	private $buyerAddressInfo;
	
	/** 
	 * 创建时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	private $createTime;
	
	/** 
	 * 押金，单位分
	 **/
	private $depositAmount;
	
	/** 
	 * 飞猪商品ID
	 **/
	private $itemId;
	
	/** 
	 * 租赁天数
	 **/
	private $leaseDays;
	
	/** 
	 * 租赁期数，默认1
	 **/
	private $leasePeriods;
	
	/** 
	 * 用户id
	 **/
	private $openId;
	
	/** 
	 * 订单号
	 **/
	private $orderId;
	
	/** 
	 * 订单租赁日期，格式：yyyyMMdd-yyyyMMdd
	 **/
	private $orderLeaseDate;
	
	/** 
	 * 订单备注
	 **/
	private $orderRemark;
	
	/** 
	 * 实付金额，单位分
	 **/
	private $paidAmount;
	
	/** 
	 * 购买数量
	 **/
	private $quantity;
	
	/** 
	 * 实名信息对象
	 **/
	private $realNameInfo;
	
	/** 
	 * 租金，单位分
	 **/
	private $rentAmount;
	
	/** 
	 * 飞猪skuId
	 **/
	private $skuId;
	
	/** 
	 * 总金额，单位分
	 **/
	private $totalAmount;
	
	private $apiParas = array();
	
	public function setBuyerAddressInfo($buyerAddressInfo)
	{
		$this->buyerAddressInfo = $buyerAddressInfo;
		$this->apiParas["buyerAddressInfo"] = $buyerAddressInfo;
	}

	public function getBuyerAddressInfo()
	{
		return $this->buyerAddressInfo;
	}

	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setDepositAmount($depositAmount)
	{
		$this->depositAmount = $depositAmount;
		$this->apiParas["depositAmount"] = $depositAmount;
	}

	public function getDepositAmount()
	{
		return $this->depositAmount;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setLeaseDays($leaseDays)
	{
		$this->leaseDays = $leaseDays;
		$this->apiParas["leaseDays"] = $leaseDays;
	}

	public function getLeaseDays()
	{
		return $this->leaseDays;
	}

	public function setLeasePeriods($leasePeriods)
	{
		$this->leasePeriods = $leasePeriods;
		$this->apiParas["leasePeriods"] = $leasePeriods;
	}

	public function getLeasePeriods()
	{
		return $this->leasePeriods;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["openId"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderLeaseDate($orderLeaseDate)
	{
		$this->orderLeaseDate = $orderLeaseDate;
		$this->apiParas["orderLeaseDate"] = $orderLeaseDate;
	}

	public function getOrderLeaseDate()
	{
		return $this->orderLeaseDate;
	}

	public function setOrderRemark($orderRemark)
	{
		$this->orderRemark = $orderRemark;
		$this->apiParas["orderRemark"] = $orderRemark;
	}

	public function getOrderRemark()
	{
		return $this->orderRemark;
	}

	public function setPaidAmount($paidAmount)
	{
		$this->paidAmount = $paidAmount;
		$this->apiParas["paidAmount"] = $paidAmount;
	}

	public function getPaidAmount()
	{
		return $this->paidAmount;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setRealNameInfo($realNameInfo)
	{
		$this->realNameInfo = $realNameInfo;
		$this->apiParas["realNameInfo"] = $realNameInfo;
	}

	public function getRealNameInfo()
	{
		return $this->realNameInfo;
	}

	public function setRentAmount($rentAmount)
	{
		$this->rentAmount = $rentAmount;
		$this->apiParas["rentAmount"] = $rentAmount;
	}

	public function getRentAmount()
	{
		return $this->rentAmount;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setTotalAmount($totalAmount)
	{
		$this->totalAmount = $totalAmount;
		$this->apiParas["totalAmount"] = $totalAmount;
	}

	public function getTotalAmount()
	{
		return $this->totalAmount;
	}

	public function getApiMethodName()
	{
		return "qimen.alibaba.fliggy.lease.order.create";
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

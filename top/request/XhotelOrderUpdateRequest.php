<?php
/**
 * TOP API: taobao.xhotel.order.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelOrderUpdateRequest
{
	/** 
	 * 外部订单号（酒店确认号）
	 **/
	private $confirmCode;
	
	/** 
	 * 错误码
	 **/
	private $hotelReverseReasonCode;
	
	/** 
	 * 拒单原因描述
	 **/
	private $hotelReverseReasonDesc;
	
	/** 
	 * 补充细节
	 **/
	private $hotelReverseReasonDetail;
	
	/** 
	 * 开票金额
	 **/
	private $invoiceAmount;
	
	/** 
	 * 操作的类型：1.确认无房（取消预订，710发送短信提醒买家申请退款）2.确认预订 3.入住 4.离店 5.noshow 6.关单
	 **/
	private $optType;
	
	/** 
	 * 取消类型，6 代表的是用户取消，reasonType=7代表的是小二协商
	 **/
	private $reasonType;
	
	/** 
	 * 退款费用
	 **/
	private $refundFee;
	
	/** 
	 * 是否把代理直签的订单同步到酒店，Y为同步，N不同步
	 **/
	private $syncToHotel;
	
	/** 
	 * 订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setConfirmCode($confirmCode)
	{
		$this->confirmCode = $confirmCode;
		$this->apiParas["confirm_code"] = $confirmCode;
	}

	public function getConfirmCode()
	{
		return $this->confirmCode;
	}

	public function setHotelReverseReasonCode($hotelReverseReasonCode)
	{
		$this->hotelReverseReasonCode = $hotelReverseReasonCode;
		$this->apiParas["hotel_reverse_reason_code"] = $hotelReverseReasonCode;
	}

	public function getHotelReverseReasonCode()
	{
		return $this->hotelReverseReasonCode;
	}

	public function setHotelReverseReasonDesc($hotelReverseReasonDesc)
	{
		$this->hotelReverseReasonDesc = $hotelReverseReasonDesc;
		$this->apiParas["hotel_reverse_reason_desc"] = $hotelReverseReasonDesc;
	}

	public function getHotelReverseReasonDesc()
	{
		return $this->hotelReverseReasonDesc;
	}

	public function setHotelReverseReasonDetail($hotelReverseReasonDetail)
	{
		$this->hotelReverseReasonDetail = $hotelReverseReasonDetail;
		$this->apiParas["hotel_reverse_reason_detail"] = $hotelReverseReasonDetail;
	}

	public function getHotelReverseReasonDetail()
	{
		return $this->hotelReverseReasonDetail;
	}

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParas["invoice_amount"] = $invoiceAmount;
	}

	public function getInvoiceAmount()
	{
		return $this->invoiceAmount;
	}

	public function setOptType($optType)
	{
		$this->optType = $optType;
		$this->apiParas["opt_type"] = $optType;
	}

	public function getOptType()
	{
		return $this->optType;
	}

	public function setReasonType($reasonType)
	{
		$this->reasonType = $reasonType;
		$this->apiParas["reason_type"] = $reasonType;
	}

	public function getReasonType()
	{
		return $this->reasonType;
	}

	public function setRefundFee($refundFee)
	{
		$this->refundFee = $refundFee;
		$this->apiParas["refund_fee"] = $refundFee;
	}

	public function getRefundFee()
	{
		return $this->refundFee;
	}

	public function setSyncToHotel($syncToHotel)
	{
		$this->syncToHotel = $syncToHotel;
		$this->apiParas["sync_to_hotel"] = $syncToHotel;
	}

	public function getSyncToHotel()
	{
		return $this->syncToHotel;
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
		return "taobao.xhotel.order.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->optType,"optType");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

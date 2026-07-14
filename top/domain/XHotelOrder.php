<?php

/**
 * 订单信息
 * @author auto create
 */
class XHotelOrder
{
	
	/** 
	 * 支付宝交易号，28位字符
	 **/
	public $alipay_trade_no;
	
	/** 
	 * 买家最早到达时间
	 **/
	public $arrive_early;
	
	/** 
	 * 买家最晚到达时间
	 **/
	public $arrive_late;
	
	/** 
	 * 买家淘宝账号
	 **/
	public $buyer_nick;
	
	/** 
	 * 入住时间
	 **/
	public $checkin_date;
	
	/** 
	 * 离店时间
	 **/
	public $checkout_date;
	
	/** 
	 * 联系人姓名
	 **/
	public $contact_name;
	
	/** 
	 * 联系人电话
	 **/
	public $contact_phone;
	
	/** 
	 * 订单创建时间
	 **/
	public $created;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 商品id
	 **/
	public $gid;
	
	/** 
	 * 入住人信息
	 **/
	public $guests;
	
	/** 
	 * 酒店id
	 **/
	public $hid;
	
	/** 
	 * 预付订单使用，1未发货，2已发货，3已收货，4已经退货，8还未创建物流订单
	 **/
	public $logistics_status;
	
	/** 
	 * 买家留言
	 **/
	public $message;
	
	/** 
	 * 订单修改时间
	 **/
	public $modified;
	
	/** 
	 * 天数
	 **/
	public $nights;
	
	/** 
	 * 酒店订单id
	 **/
	public $oid;
	
	/** 
	 * 合作方订单号,最长250个字符
	 **/
	public $out_oid;
	
	/** 
	 * 付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 实付款（分）
	 **/
	public $payment;
	
	/** 
	 * 下单时每间夜的价格（分）
	 **/
	public $prices;
	
	/** 
	 * 预付订单使用，1买家已经申请退款，等待卖家同意，2卖家已经同意退款，等待买家退货，3买家已经退货，等待卖家确认收货，4退款关闭，5退款成功，6卖家拒绝退款，9没有申请退款
	 **/
	public $refund_status;
	
	/** 
	 * 房型id
	 **/
	public $rid;
	
	/** 
	 * 房间数
	 **/
	public $room_number;
	
	/** 
	 * RatePlan 中的 rpid
	 **/
	public $rpid;
	
	/** 
	 * 卖家淘宝账号
	 **/
	public $seller_nick;
	
	/** 
	 * tid
	 **/
	public $tid;
	
	/** 
	 * 总房价（分）
	 **/
	public $total_room_price;
	
	/** 
	 * 交易状态。 WAIT_BUYER_PAY:预订中/等待买家付款, WAIT_SELLER_SEND_GOODS:预订中/等待卖家发货(确认), TRADE_CLOSED:结束/预订失败/交易关闭, TRADE_FINISHED:结束/交易成功, TRADE_NO_CREATE_PAY:结束/预订失败/没有创建支付宝交易, TRADE_CLOSED_BY_TAOBAO:结束/预订失败/预订被卖家关闭, TRADE_SUCCESS:交易中/预订成功/卖家已确认, TRADE_CHECKIN:交易中/预定成功/买家入住, TRADE_CHECKOUT:交易中/预定成功/买家离店, TRADE_SETTLEING:交易中/预定成功/结账中, TRADE_SETTLE_SUCCESS:结束/预定成功/结账成功
	 **/
	public $trade_status;
	
	/** 
	 * 支付类型 可选值 1：预付 5：前台面付
	 **/
	public $type;	
}
?>
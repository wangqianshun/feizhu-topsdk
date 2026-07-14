<?php

/**
 * 响应结果
 * @author auto create
 */
class OrderQueryResponse
{
	
	/** 
	 * 实际租期结束日期，格式yyyyMMdd-yyyyMMdd
	 **/
	public $actual_lease_date;
	
	/** 
	 * 审核时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $audit_time;
	
	/** 
	 * 买家收货地址信息
	 **/
	public $buyer_address_info;
	
	/** 
	 * 订单关闭时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $close_order_time;
	
	/** 
	 * 订单关闭备注
	 **/
	public $close_remark;
	
	/** 
	 * 订单关闭类型 FACE_VERIFY_TIMEOUT：超时未人脸识别 USER_CANCEL：用户取消 SELLER_AUDIT_TIMEOUT：商家超时未审核 SELLER_AUDIT_FAILED：商家审核不通过 USER_PAY_TIMEOUT：用户超时未支付租金/押金 SELLER_CANCEL：商家取消 CREATE_ORDER_FAILED：下单失败
	 **/
	public $close_type;
	
	/** 
	 * 创建时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $create_time;
	
	/** 
	 * 订单凭证信息
	 **/
	public $credential_info;
	
	/** 
	 * 损坏赔偿费（单位：分）
	 **/
	public $damage_fee;
	
	/** 
	 * 损坏原因
	 **/
	public $damage_reason;
	
	/** 
	 * 损坏赔偿交易流水号
	 **/
	public $damage_transaction_id;
	
	/** 
	 * 押金金额（单位：分）
	 **/
	public $deposit_amount;
	
	/** 
	 * 押金退还金额（单位：分）
	 **/
	public $deposit_refund_amount;
	
	/** 
	 * 押金交易流水号
	 **/
	public $deposit_transaction_id;
	
	/** 
	 * 预估逾期租金，飞猪侧根据逾期天数和日租金计算生成（单位：分）
	 **/
	public $estimated_overdue_rent;
	
	/** 
	 * 续租到期日期，格式yyyyMMdd-yyyyMMdd
	 **/
	public $extended_lease_date;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品原始价格（单件），单位：分
	 **/
	public $item_original_price;
	
	/** 
	 * 租期天数
	 **/
	public $lease_days;
	
	/** 
	 * 租期周期，默认1
	 **/
	public $lease_periods;
	
	/** 
	 * 修正后租期结束日期（如因物流原因导致延后签收而变更租期，无变更则和订单租期一致），格式yyyyMMdd-yyyyMMdd
	 **/
	public $modified_lease_date;
	
	/** 
	 * 用户id
	 **/
	public $open_id;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 订单租期（用户下单时选择的租期），格式yyyyMMdd-yyyyMMdd
	 **/
	public $order_lease_date;
	
	/** 
	 * 订单备注
	 **/
	public $order_remark;
	
	/** 
	 * 订单类型，SHORT_TERM:短租 LONG_TERM:长租 RENEWAL:续租 BUYOUT:买断
	 **/
	public $order_type;
	
	/** 
	 * 逾期天数
	 **/
	public $overdue_days;
	
	/** 
	 * 逾期租金（单位：分）
	 **/
	public $overdue_rent;
	
	/** 
	 * 逾期租金交易流水号
	 **/
	public $overdue_rent_transaction_id;
	
	/** 
	 * 实付金额（实付租金+逾期租金+质损费用，单位：分）
	 **/
	public $paid_amount;
	
	/** 
	 * 支付时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $pay_time;
	
	/** 
	 * 商品数量
	 **/
	public $quantity;
	
	/** 
	 * 实名信息
	 **/
	public $real_name_info;
	
	/** 
	 * 租金金额（单位：分）
	 **/
	public $rent_amount;
	
	/** 
	 * 租金交易流水号
	 **/
	public $rent_transaction_id;
	
	/** 
	 * 归还物流单号
	 **/
	public $return_logistics_no;
	
	/** 
	 * 归还成功时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $return_success_time;
	
	/** 
	 * 卖家归还地址信息
	 **/
	public $seller_address_info;
	
	/** 
	 * 发货物流单号
	 **/
	public $ship_logistics_no;
	
	/** 
	 * 发货时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $ship_time;
	
	/** 
	 * 物流发货页面链接
	 **/
	public $shipping_url;
	
	/** 
	 * skuid
	 **/
	public $sku_id;
	
	/** 
	 * 订单状态，PENDING_USER_AUTH:待用户认证 CREDIT_REVIEWING:信用审核中 PENDING_PAYMENT:待支付 PREPARING:备货中 SHIPPED:已发货 RENTING:租用中 PENDING_RETURN:待归还 RETURNING:归还中 PENDING_QUALITY_INSPECTION:待质检 RETURN_PENDING_DEDUCT:已归还待扣款 RETURN_SUCCESS:归还成功 CLOSED:租赁关闭
	 **/
	public $status;
	
	/** 
	 * 订单状态变更记录
	 **/
	public $status_change_list;
	
	/** 
	 * 订单总金额（优惠前租金+逾期租金+质损费用，单位：分）
	 **/
	public $total_amount;
	
	/** 
	 * 用户归还时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $user_return_time;
	
	/** 
	 * 用户签收时间，格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $user_sign_time;	
}
?>
<?php

/**
 * 商家取消订单请求
 * @author auto create
 */
class CancelOrderRequest
{
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 取消原因（最多100字符）
	 **/
	public $reason;	
}
?>
<?php

/**
 * 审核请求
 * @author auto create
 */
class AuditRequest
{
	
	/** 
	 * 押金金额
	 **/
	public $deposit_amount;
	
	/** 
	 * 审核结果，可选值：true-通过，false-不通过
	 **/
	public $is_pass;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 审核原因
	 **/
	public $reason;	
}
?>
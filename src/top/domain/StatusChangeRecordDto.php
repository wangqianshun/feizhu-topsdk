<?php

/**
 * 订单状态变更记录
 * @author auto create
 */
class StatusChangeRecordDto
{
	
	/** 
	 * 原状态，参考订单状态枚举
	 **/
	public $from_status;
	
	/** 
	 * 状态变更原因
	 **/
	public $reason;
	
	/** 
	 * 变更时间
	 **/
	public $timestamp;
	
	/** 
	 * 目标状态，参考订单状态枚举
	 **/
	public $to_status;	
}
?>
<?php

/**
 * 早定优惠
 * @author auto create
 */
class EarlyBookingInfo
{
	
	/** 
	 * 固定折扣百分比
	 **/
	public $investment_number;
	
	/** 
	 * 连住天数
	 **/
	public $min_continuity_stay;
	
	/** 
	 * 提前预定天数,时间范围为1-60天
	 **/
	public $min_pre_booking_days;	
}
?>
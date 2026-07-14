<?php

/**
 * 天天特惠优惠
 * @author auto create
 */
class DailyBookingInfo
{
	
	/** 
	 * 入住开始
	 **/
	public $check_in_from;
	
	/** 
	 * 入住结束
	 **/
	public $check_in_to;
	
	/** 
	 * 失效时间
	 **/
	public $invalid_dates;
	
	/** 
	 * 固定折扣百分比
	 **/
	public $investment_number;
	
	/** 
	 * 一个星期内有效性约束
	 **/
	public $valid_weeks;	
}
?>
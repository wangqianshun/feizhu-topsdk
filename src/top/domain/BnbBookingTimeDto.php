<?php

/**
 * 入住要求&附加信息
 * @author auto create
 */
class BnbBookingTimeDto
{
	
	/** 
	 * 最早入住时间 hh:mm,24小时时间格式住时间,默认值: 14:00
	 **/
	public $earliest_check_in_time;
	
	/** 
	 * 结束接待时间 hh:mm,24小时时间格式
	 **/
	public $end_reception_time;
	
	/** 
	 * 最晚预定时间 hh:mm,24小时时间格式
	 **/
	public $latest_booking_time;
	
	/** 
	 * 最晚入住时间 hh:mm,24小时时间格式
	 **/
	public $latest_check_in_time;
	
	/** 
	 * 最晚离店时间 hh:mm,24小时时间格式,默认值: 12:00
	 **/
	public $latest_check_out_time;
	
	/** 
	 * 开始接待时间 hh:mm,24小时时间格式
	 **/
	public $start_reception_time;	
}
?>
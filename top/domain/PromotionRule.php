<?php

/**
 * 促销规则
 * @author auto create
 */
class PromotionRule
{
	
	/** 
	 * 预定日期
	 **/
	public $book_date;
	
	/** 
	 * 预定时间
	 **/
	public $book_time;
	
	/** 
	 * 1 Fixed:固定金额,单位分，1000;0Percentage: 折扣比例，20,表示优惠20%，比如100元，优惠20%后为 80元。
	 **/
	public $discount_value;
	
	/** 
	 * 连住天数
	 **/
	public $length_of_stay;
	
	/** 
	 * 提前预订天数
	 **/
	public $min_advance_day;
	
	/** 
	 * 尾房生效时间，只针对当日库存生效
	 **/
	public $over_night_time;
	
	/** 
	 * 促销限制的入住时间范围
	 **/
	public $stay_date;
	
	/** 
	 * 入住时间的适用星期
	 **/
	public $stay_weekdays;
	
	/** 
	 * 不生效日期
	 **/
	public $un_stay_date;	
}
?>
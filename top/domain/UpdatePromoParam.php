<?php

/**
 * 更新营销活动的入参
 * @author auto create
 */
class UpdatePromoParam
{
	
	/** 
	 * 外部营销活动的code，最长40个字符
	 **/
	public $outer_activity_code;
	
	/** 
	 * 营销活动的具体参数对象，在每次添加更新的时候，long_order_info、early_booking_info、daily_booking_info 只能填1种类型，其他2种类型为空
	 **/
	public $promo_info;
	
	/** 
	 * 营销活动关联的价格计划和房型
	 **/
	public $rate_infos;	
}
?>
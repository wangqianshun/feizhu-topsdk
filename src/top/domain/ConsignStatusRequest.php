<?php

/**
 * 子订单发货状态
 * @author auto create
 */
class ConsignStatusRequest
{
	
	/** 
	 * 子订单是否部分发货，true：部分发货；false：全部发货；周期购、分销订单不支持部分发货
	 **/
	public $is_part_consign;
	
	/** 
	 * 子订单id（组合品不需要传系统会自动计算）
	 **/
	public $sub_tid;	
}
?>
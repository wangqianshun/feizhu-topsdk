<?php

/**
 * 活动
 * @author auto create
 */
class String
{
	
	/** 
	 * 活动有效期截止时间
	 **/
	public $end;
	
	/** 
	 * 支持通过接口方式开通的活动对应ID；由平台定义，用来识别活动
	 **/
	public $promotion_code;
	
	/** 
	 * 活动名称
	 **/
	public $promotion_name;
	
	/** 
	 * 根据报名方式不同和入参不同，区分不同的活动类型，营销平台定义
	 **/
	public $promotion_type;
	
	/** 
	 * 活动有效期开始时间
	 **/
	public $start;
	
	/** 
	 * 子活动列表
	 **/
	public $sub_promotion_items;	
}
?>
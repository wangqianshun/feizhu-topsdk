<?php

/**
 * 子活动列表
 * @author auto create
 */
class SubPromotionItem
{
	
	/** 
	 * 折扣类型，1 折扣，2 立减
	 **/
	public $discount_type;
	
	/** 
	 * 当查询到的类型为四或五时，营销平台返回对应的折扣。
	 **/
	public $discount_value;
	
	/** 
	 * 当查询到的类型为四或五时，营销平台返回对应的子活动code
	 **/
	public $sub_promotion_code;	
}
?>
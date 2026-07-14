<?php

/**
 * 直连营销
 * @author auto create
 */
class DirectPromotion
{
	
	/** 
	 * 活动类型为三时，需要传对应等级的折扣。模版：xxx,最高立减50%，每个等级间差距不能高于X%。
	 **/
	public $discount_list;
	
	/** 
	 * 促销金额计算方式, 0 Percentage | 1 Fixed; 暂时支持固定金额 Fixed:固定金额 Percentage: 折扣比例｜3 代表优住会折扣
	 **/
	public $discount_type;
	
	/** 
	 * 动态营销，飞猪会根据市场情况动态调整折扣，折扣不会高于酒店设置的。
	 **/
	public $dynamic_discount_value;
	
	/** 
	 * 促销类别代码
	 **/
	public $promotion_code;
	
	/** 
	 * 促销规则Id
	 **/
	public $promotion_rule_id;
	
	/** 
	 * 促销规则
	 **/
	public $promotion_rules;
	
	/** 
	 * 活动绑定资源
	 **/
	public $resources;
	
	/** 
	 * 当查询到的类型为四或五时，营销平台返回对应的子活动code
	 **/
	public $sub_promotion_code;	
}
?>
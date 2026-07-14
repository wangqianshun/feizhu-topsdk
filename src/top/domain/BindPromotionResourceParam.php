<?php

/**
 * 资源绑定请求
 * @author auto create
 */
class BindPromotionResourceParam
{
	
	/** 
	 * 供应商酒店code
	 **/
	public $hotel_code;
	
	/** 
	 * 促销规则Id
	 **/
	public $promotion_rule_id;
	
	/** 
	 * 根据报名方式不同和入参不同，区分不同的活动类型，营销平台定义  类型一：商家可自定义折扣、活动生效时间、产品，绑定实体hotel_code+rate_plan_codes+room_code  类型二：商家可自定义折扣、活动生效时间&规则生效场景、产品，绑定实体hotel_code+rate_plan_codes+room_code  类型三：商家可自定义折扣，无法自定义时间，hid下全房型报名，绑定实体hotel_code  类型四：商家只能查询可报名折扣，无法自定义时间，可自定义房型报名，绑定实体hotel_code+room_code 类型五：商家只能查询可报名折扣，无法自定义时间，无法自定义房型，绑定实体hotel_code
	 **/
	public $promotion_type;
	
	/** 
	 * 活动绑定资源，最多绑定200个 rate_plan_code + room_code 组合；
	 **/
	public $rooms;
	
	/** 
	 * 有申请系统商的，需要传系统商代码，没有申请的，传空值
	 **/
	public $vendor;	
}
?>
<?php

/**
 * 促销活动对象
 * @author auto create
 */
class CreatePromotionParam
{
	
	/** 
	 * 活动类型为三时，需要传对应等级的折扣，最高立减50%。discount_type为1-4，表示飞猪的会员级别。模版：[     {       "discount_value": 35,       "discount_type": 1     },{       "discount_value": 35,       "discount_type": 2     },{       "discount_value": 40,       "discount_type": 3     },{       "discount_value": 50,       "discount_type": 4     }   ]
	 **/
	public $discount_list;
	
	/** 
	 * 折扣类型，1 代表折扣（包括优住会），2 代表立减，创建后不支持修改
	 **/
	public $discount_type;
	
	/** 
	 * 动态营销，飞猪会根据市场情况动态调整折扣，折扣不会高于酒店设置的。
	 **/
	public $dynamic_discount_value;
	
	/** 
	 * 促销类别代码  类型一：[天天特惠 4151] 类型二：[早订优惠 4154]， [连住优惠 4153]， [限时特惠 4152]， [今夜甩卖 4367]， [门店新客 4155]， [出行特惠 4322] 活动创建成功后，不可修改活动类型。 类型三：[优住会 4501] 类型四：暂无 类型五：[分人群活动 4601]
	 **/
	public $promotion_code;
	
	/** 
	 * 促销规则Id,传值代表修改，不传代表新建
	 **/
	public $promotion_rule_id;
	
	/** 
	 * 当前一个活动ID只可传1条规则
	 **/
	public $promotion_rules;
	
	/** 
	 * 根据报名方式不同和入参不同，区分不同的活动类型，营销平台定义 类型一：商家可自定义折扣、活动生效时间、产品 类型二：商家可自定义折扣、活动生效时间&规则生效场景、产品 类型三：商家可自定义折扣，无法自定义时间，hid下全房型报名 类型四：商家只能查询可报名折扣，无法自定义时间，可自定义房型报名 类型五：商家只能查询可报名折扣，无法自定义时间，无法自定义房型
	 **/
	public $promotion_type;
	
	/** 
	 * 当查询到的类型为四或五时，营销平台返回对应的子活动code
	 **/
	public $sub_promotion_code;
	
	/** 
	 * 有申请系统商的，需要传系统商代码，没有申请的，传空值
	 **/
	public $vendor;	
}
?>
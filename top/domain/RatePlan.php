<?php

/**
 * rateplan
 * @author auto create
 */
class RatePlan
{
	
	/** 
	 * 活动类型: 1通兑,2秒杀,3尾房,4超级房券
	 **/
	public $activity_type;
	
	/** 
	 * 是否是协议价。1代表是
	 **/
	public $agreement;
	
	/** 
	 * 协议保留房提前确认时间
	 **/
	public $allotment_release_time;
	
	/** 
	 * 酒+X特色
	 **/
	public $benefits;
	
	/** 
	 * 是否底价加价，1是底价加价,0 非底价加价rp
	 **/
	public $bottom_price_flag;
	
	/** 
	 * 早餐数量
	 **/
	public $breakfast_count;
	
	/** 
	 * calBreakfastStr
	 **/
	public $cal_breakfast_str;
	
	/** 
	 * calChangeRuleStr
	 **/
	public $cal_change_rule_str;
	
	/** 
	 * calGuaranteeStr
	 **/
	public $cal_guarantee_str;
	
	/** 
	 * 可入住的最晚时间（小时房相关字段）
	 **/
	public $can_checkin_end;
	
	/** 
	 * 可入住的最早时间（小时房相关字段）
	 **/
	public $can_checkin_start;
	
	/** 
	 * 可离店的最晚时间（小时房相关字段）
	 **/
	public $can_checkout_end;
	
	/** 
	 * 退订政策
	 **/
	public $cancel_policy;
	
	/** 
	 * 销售渠道。如需开通，需要申请权限。目前支持的渠道有 H:飞猪全渠道（选择H，可实现飞猪、高德、支付宝、手淘均可售卖） O:钉钉商旅 。如果有多个用","分开，比如H,O。如果需要投放其他渠道，请联系飞猪运营或者技术支持。
	 **/
	public $channel;
	
	/** 
	 * 儿童价格政策 年龄区间必须连续且有一个从0开始 max：年龄区间上限 min：年龄区间下限 t：加价类型，1-百分比金额加价，2-固定金额加价 v：加价因子，固定加价单位为分，百分比加价单位为百分比
	 **/
	public $children_price_policy;
	
	/** 
	 * 普通保留房提前确认时间
	 **/
	public $common_allot_release_time;
	
	/** 
	 * companyAssist
	 **/
	public $company_assist;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * rateplan生效截止时间
	 **/
	public $deadline_time;
	
	/** 
	 * rateplan生效开始时间
	 **/
	public $effective_time;
	
	/** 
	 * 每日结束时间默认24:00:00。生效时间＜结束时间
	 **/
	public $end_time;
	
	/** 
	 * 每日生效结束时间（仅时分秒有效）
	 **/
	public $end_time_daily;
	
	/** 
	 * 英文名称
	 **/
	public $english_name;
	
	/** 
	 * extend
	 **/
	public $extend;
	
	/** 
	 * 额外服务的扩展，是一段JSON
	 **/
	public $extend_fee;
	
	/** 
	 * 扩展字段1
	 **/
	public $extend_info1;
	
	/** 
	 * 扩展字段2
	 **/
	public $extend_info2;
	
	/** 
	 * 扩展字段3
	 **/
	public $extend_info3;
	
	/** 
	 * 另加早餐金额
	 **/
	public $fee_breakfast_amount;
	
	/** 
	 * 另加早餐数量
	 **/
	public $fee_breakfast_count;
	
	/** 
	 * 额外服务-政府税-金额（1-9999）
	 **/
	public $fee_gov_tax_amount;
	
	/** 
	 * 额外服务-政府税-百分比（0%-99%）
	 **/
	public $fee_gov_tax_percent;
	
	/** 
	 * 额外服务-服务费-金额（0-9999）
	 **/
	public $fee_service_amount;
	
	/** 
	 * 额外服务-服务费-百分比（0%-99%）
	 **/
	public $fee_service_percent;
	
	/** 
	 * 是否是首住优惠rp。1代表是
	 **/
	public $first_stay;
	
	/** 
	 * 0支付宝担保 1PCI担保
	 **/
	public $guarantee_mode;
	
	/** 
	 * 每日开始担保时间
	 **/
	public $guarantee_start_time;
	
	/** 
	 * 担保类型，只支持： 0 无担保 1 峰时首晚担保 2峰时全额担保 3全天首晚担保 4全天全额担保
	 **/
	public $guarantee_type;
	
	/** 
	 * hotelCompanyMappingDOS
	 **/
	public $hotel_company_mapping_d_o_s;
	
	/** 
	 * 入住的开始跨度（小时房相关字段）
	 **/
	public $hourage;
	
	/** 
	 * rp维度的发票信息,type:1.酒店提供发票；2.卖家提供发票,desc:发票描叙，比如：卖家包邮提供发票,格式为：{"type":1;"desc":""}
	 **/
	public $invoice_content;
	
	/** 
	 * 是否为学生价
	 **/
	public $is_student;
	
	/** 
	 * 最大提前预订小时按入住时间的23:59:59(一般认为24点)来计算
	 **/
	public $max_adv_hours;
	
	/** 
	 * 最大入住天数（1-365）
	 **/
	public $max_days;
	
	/** 
	 * 会员价支持标识,1表示支持会员价规则
	 **/
	public $mem_disc_flag;
	
	/** 
	 * 会员价加价规则。c:表示折扣百分比,例子8,意为会员价优惠8%,s:标识起始日期,e:表示截止日期，t:表示加价类型，0:代表折扣。会员价=售价*(1-c%)
	 **/
	public $member_discount_cal;
	
	/** 
	 * 会员等级。支持多个等级","分隔
	 **/
	public $member_level;
	
	/** 
	 * 最小提前预订小时按入住时间的23:59:59(一般认为24点)来计算
	 **/
	public $min_adv_hours;
	
	/** 
	 * 首日入住房间数（1-99）【废弃】
	 **/
	public $min_amount;
	
	/** 
	 * 最小入住天数（1-365）
	 **/
	public $min_days;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * RP名称
	 **/
	public $name;
	
	/** 
	 * 入住人数
	 **/
	public $occupancy;
	
	/** 
	 * 是否包房RP 1包房RP,0 非包房rp
	 **/
	public $pack_room_flag;
	
	/** 
	 * 父rpid
	 **/
	public $parent_rpid;
	
	/** 
	 * 支付类型 可选值 1：预付 5：前台面付
	 **/
	public $payment_type;
	
	/** 
	 * 卖家自己系统的Code，简称RateCode
	 **/
	public $rateplan_code;
	
	/** 
	 * rateplan类型 1为小时房
	 **/
	public $rp_type;
	
	/** 
	 * rateplan_id
	 **/
	public $rpid;
	
	/** 
	 * sell 端特殊RP 对应的 gid
	 **/
	public $sell_gid;
	
	/** 
	 * 来源
	 **/
	public $source;
	
	/** 
	 * 每日生效时间默认00:00:00。生效时间＜结束时间
	 **/
	public $start_time;
	
	/** 
	 * 每日生效开始时间（仅时分秒有效）
	 **/
	public $start_time_daily;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * key的含义:    non-direct-RP 表示非直连RP,      super-could-price-change-RP 表示rp的super标，打上这个tag，表明这个rateplan下单的时候支持变价，商家系统直接放开价格校验。      base-could-derived-RP 表示base rateplan标签，打上了这个tag，表明这是一个base的rateplan，基于该rateplan可以衍生出子rateplan  .        ebk-tail-room-RP 表示 ebk尾房rate plan级别标
	 **/
	public $tag_json;	
}
?>
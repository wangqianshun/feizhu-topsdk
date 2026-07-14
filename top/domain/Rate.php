<?php

/**
 * rate
 * @author auto create
 */
class Rate
{
	
	/** 
	 * 额外服务-是否可以加床，1：不可以，2：可以
	 **/
	public $add_bed;
	
	/** 
	 * 额外服务-加床价格
	 **/
	public $add_bed_price;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 币种（仅支持CNY）
	 **/
	public $currency_code;
	
	/** 
	 * 酒店商品id
	 **/
	public $gid;
	
	/** 
	 * 结构化的库存和开关,   	 date 日期 	 price 价格 int 类型, 取值范围1-99999999 单位为分  	 quota 普通库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开)  	 alQuota 协议保留房库存  int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) 	 genAlQuota 普通保留房库存, int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) 	 rateSwitch  date日期的价格开关, 值为true时,表示当天价格开, false表示价格关
	 **/
	public $inv_price_with_switch;
	
	/** 
	 * 价格和库存信息。
A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。
B:date  日期必须为 T---T+90 日内的日期（T为当天），且不能重复
C:price 价格 int类型 取值范围1-99999999 单位为分
D:quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)
	 **/
	public $inventory_price;
	
	/** 
	 * 即时确认状态，表示此rate预订后是否可以直接发货。可取范围：0,1。可以为空
	 **/
	public $jishiqueren_tag;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 名称
	 **/
	public $name;
	
	/** 
	 * 酒店RPID
	 **/
	public $rpid;
	
	/** 
	 * 实价有房标签（RP支付类型为全额支付）
	 **/
	public $shijia_tag;
	
	/** 
	 * rate 维度下特殊标签含义 json: {"ebk-tail-room-Rate":1}, key:ebk-tail-room-Rate 表示rate维度ebk尾房标
	 **/
	public $tag_json;
	
	/** 
	 * 是否使用RoomInventory库存   仅当Rate上使用时有意义
	 **/
	public $use_room_inventory;	
}
?>
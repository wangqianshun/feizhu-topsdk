<?php

/**
 * 复杂房价信息实体类
 * @author auto create
 */
class MultipleRate
{
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 币种
	 **/
	public $currency_code;
	
	/** 
	 * 酒店商品id
	 **/
	public $gid;
	
	/** 
	 * 价格和库存信息,包括加床价，加人价等信息。date  日期必须为 T---T+90 日内的日期（T为当天），且不能重复price 价格 int类型 取值范围1-99999999 单位为分quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)addPerson 加人价addBed 加床价
	 **/
	public $inventory_price;
	
	/** 
	 * 连住天数
	 **/
	public $lengthofstay;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 名称
	 **/
	public $name;
	
	/** 
	 * 入住人数
	 **/
	public $occupancy;
	
	/** 
	 * 房价id
	 **/
	public $rpid;	
}
?>
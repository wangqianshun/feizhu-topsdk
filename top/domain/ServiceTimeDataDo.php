<?php

/**
 * firstResult
 * @author auto create
 */
class ServiceTimeDataDo
{
	
	/** 
	 * 业务id
	 **/
	public $business_id;
	
	/** 
	 * 业务类型：1卖家；2supplier;3酒店
	 **/
	public $business_type;
	
	/** 
	 * 是否在非工作时间显示商品 1:显示, 2:不显示
	 **/
	public $display_item_in_nonworking_time;
	
	/** 
	 * 周五服务时间（当地时间）
	 **/
	public $friday_confirm_local_time;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 最后修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * id
	 **/
	public $id;
	
	/** 
	 * 周一服务时间（当地时间）
	 **/
	public $monday_confirm_local_time;
	
	/** 
	 * operator
	 **/
	public $operator;
	
	/** 
	 * 1: 当日订单, 2:次日及以后订单
	 **/
	public $order_confirm_type;
	
	/** 
	 * 周六服务时间（当地时间）
	 **/
	public $saturday_confirm_local_time;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 卖家nick
	 **/
	public $seller_nick;
	
	/** 
	 * 周日服务时间（当地时间）
	 **/
	public $sunday_confirm_local_time;
	
	/** 
	 * supplier
	 **/
	public $supplier;
	
	/** 
	 * 周四服务时间（当地时间）
	 **/
	public $thursday_confirm_local_time;
	
	/** 
	 * timeZoneName
	 **/
	public $time_zone_name;
	
	/** 
	 * 周二服务时间（当地时间）
	 **/
	public $tuesday_confirm_local_time;
	
	/** 
	 * 周三服务时间（当地时间）
	 **/
	public $wednesday_confirm_local_time;	
}
?>
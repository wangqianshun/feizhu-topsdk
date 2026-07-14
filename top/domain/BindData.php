<?php

/**
 * 绑定详情
 * @author auto create
 */
class BindData
{
	
	/** 
	 * 绑定失败结果，部分成功的时候有值
	 **/
	public $failed_rooms;
	
	/** 
	 * 供应商酒店code
	 **/
	public $hotel_code;
	
	/** 
	 * 促销规则Id
	 **/
	public $promotion_rule_id;
	
	/** 
	 * 绑定成功结果，部分成功的时候有值
	 **/
	public $success_rooms;	
}
?>
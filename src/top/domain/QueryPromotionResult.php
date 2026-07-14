<?php

/**
 * 查询结果
 * @author auto create
 */
class QueryPromotionResult
{
	
	/** 
	 * 直连营销
	 **/
	public $direct_promotions;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误描述
	 **/
	public $error_msg;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 请求传promotion_rule_id，total_count 指酒店code总量；请求传hotel_code，total_count是指promotion_rule_id总量；请求传promotion_rule_id + hotel_code，total_count = 1。
	 **/
	public $total_count;
	
	/** 
	 * 日志id
	 **/
	public $trace_id;	
}
?>
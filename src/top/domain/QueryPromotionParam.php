<?php

/**
 * 查询活动请求
 * @author auto create
 */
class QueryPromotionParam
{
	
	/** 
	 * 酒店code
	 **/
	public $hotel_code;
	
	/** 
	 * 页码
	 **/
	public $page_no;
	
	/** 
	 * 每页大小，最大50
	 **/
	public $page_size;
	
	/** 
	 * 促销规则Id
	 **/
	public $promotion_rule_id;
	
	/** 
	 * 有申请系统商的，需要传系统商代码，没有申请的，传空值
	 **/
	public $vendor;	
}
?>
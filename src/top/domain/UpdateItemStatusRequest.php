<?php

/**
 * 商品上下架请求
 * @author auto create
 */
class UpdateItemStatusRequest
{
	
	/** 
	 * 操作类型，上架：1，下架：0
	 **/
	public $action_type;
	
	/** 
	 * 飞猪商品id列表
	 **/
	public $item_ids;	
}
?>
<?php

/**
 * 商品库存修改请求
 * @author auto create
 */
class UpdateInventoryRequest
{
	
	/** 
	 * 飞猪商品id
	 **/
	public $item_id;
	
	/** 
	 * SKU库存列表
	 **/
	public $sku_inventory_list;	
}
?>
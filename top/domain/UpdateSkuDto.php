<?php

/**
 * SKU更新列表
 * @author auto create
 */
class UpdateSkuDto
{
	
	/** 
	 * 操作类型：新增addSku,修改modifySku 新增sku场景飞猪skuId传0
	 **/
	public $action_type;
	
	/** 
	 * 押金，单位分
	 **/
	public $deposit;
	
	/** 
	 * 数量（新增sku的时候需要）
	 **/
	public $inventory;
	
	/** 
	 * 租赁方案：到期归还、到期归还/续租、到期归还/续租/买断（暂时只支持到期归还）
	 **/
	public $lease_plan;
	
	/** 
	 * 租期
	 **/
	public $lease_term;
	
	/** 
	 * 原始商品价值
	 **/
	public $origin_price;
	
	/** 
	 * 外部厂商skuId（修改的时候需要传）
	 **/
	public $out_sku_id;
	
	/** 
	 * 发货方式：邮寄/自提/闪送（暂时只支持邮寄）
	 **/
	public $shipping_type;
	
	/** 
	 * 飞猪skuId
	 **/
	public $sku_id;
	
	/** 
	 * SKU图片
	 **/
	public $sku_image;
	
	/** 
	 * SKU名称，最多40个字符
	 **/
	public $sku_name;
	
	/** 
	 * SKU价格，单位分（日租金）
	 **/
	public $sku_price;
	
	/** 
	 * 规格列表，格式[{"key":"","value":""}]
	 **/
	public $sku_property;	
}
?>
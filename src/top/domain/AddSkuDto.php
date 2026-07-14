<?php

/**
 * SKU信息列表
 * @author auto create
 */
class AddSkuDto
{
	
	/** 
	 * 押金，单位分
	 **/
	public $deposit;
	
	/** 
	 * 库存数量
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
	 * 商品价值，单位分
	 **/
	public $origin_price;
	
	/** 
	 * 外部厂商skuId
	 **/
	public $out_sku_id;
	
	/** 
	 * 发货方式：邮寄/自提/闪送（暂时只支持邮寄）
	 **/
	public $shipping_type;
	
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
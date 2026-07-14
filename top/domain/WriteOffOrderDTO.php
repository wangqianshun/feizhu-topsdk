<?php

/**
 * 返回核销订单列表
 * @author auto create
 */
class WriteOffOrderDTO
{
	
	/** 
	 * 交易单所包含的商品列表
	 **/
	public $goods_list;
	
	/** 
	 * 核销订单Id
	 **/
	public $lp_order_id;
	
	/** 
	 * 淘宝交易Id
	 **/
	public $trade_id;	
}
?>
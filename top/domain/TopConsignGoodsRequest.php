<?php

/**
 * 原包裹中的商品信息
 * @author auto create
 */
class TopConsignGoodsRequest
{
	
	/** 
	 * 成分品itemId
	 **/
	public $comp_item_id;
	
	/** 
	 * 成分品skuId
	 **/
	public $comp_sku_id;
	
	/** 
	 * 商品类型 0：普通品 1:赠品 2:成分品，默认0
	 **/
	public $item_type;
	
	/** 
	 * 子订单id
	 **/
	public $sub_tid;	
}
?>
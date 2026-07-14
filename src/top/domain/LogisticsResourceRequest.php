<?php

/**
 * 请求体
 * @author auto create
 */
class LogisticsResourceRequest
{
	
	/** 
	 * 可选值:offline(自己联系发货),online(在线下单),all(自己联系+在线下单)instant(同城配送). 
	 **/
	public $order_mode;	
}
?>
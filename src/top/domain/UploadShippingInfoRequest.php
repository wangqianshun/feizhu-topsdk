<?php

/**
 * 发货信息
 * @author auto create
 */
class UploadShippingInfoRequest
{
	
	/** 
	 * 协议信息
	 **/
	public $agreement_info;
	
	/** 
	 * 凭证信息，最多8张
	 **/
	public $credential_info;
	
	/** 
	 * 订单号
	 **/
	public $order_id;
	
	/** 
	 * 商家地址
	 **/
	public $seller_address_info;	
}
?>
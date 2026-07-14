<?php

/**
 * 签收请求
 * @author auto create
 */
class ConfirmSignRequest
{
	
	/** 
	 * 签收类型，可选值：SHIP_SIGN-发货签收，RETURN_SIGN-归还签收
	 **/
	public $action_type;
	
	/** 
	 * 凭证信息，最多8张
	 **/
	public $credential_info;
	
	/** 
	 * 订单id
	 **/
	public $order_id;	
}
?>
<?php

/**
 * 质检结果回传请求
 * @author auto create
 */
class FeedbackQualityRequest
{
	
	/** 
	 * 凭证信息，最多8张
	 **/
	public $credential_info;
	
	/** 
	 * 定损金额;单位分;定损金额不得超过商品价值;如果isPass是false定损金额必须大于0
	 **/
	public $damage_fee;
	
	/** 
	 * 质检结果，可选值：通过-true，不通过-false
	 **/
	public $is_pass;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 逾期租金;单位分;无法归还必须填入0;不可高于默认计算的逾期金额
	 **/
	public $overdue_rent;
	
	/** 
	 * 定损原因;最多100字符
	 **/
	public $reason;	
}
?>
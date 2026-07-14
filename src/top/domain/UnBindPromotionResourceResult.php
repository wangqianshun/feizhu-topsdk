<?php

/**
 * 解绑结果
 * @author auto create
 */
class UnBindPromotionResourceResult
{
	
	/** 
	 * 解绑详情，部分成功的时候有值
	 **/
	public $data;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误描述
	 **/
	public $error_msg;
	
	/** 
	 * 是否成功，True or False，全部失败返回失败，部分/全部成功返回成功
	 **/
	public $success;
	
	/** 
	 * 日志id
	 **/
	public $trace_id;	
}
?>
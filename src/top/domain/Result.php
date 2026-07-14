<?php

/**
 * 接口返回model
 * @author auto create
 */
class Result
{
	
	/** 
	 * 状态码
	 **/
	public $http_status_code;
	
	/** 
	 * 模型
	 **/
	public $model;
	
	/** 
	 * msgCode
	 **/
	public $msg_code;
	
	/** 
	 * msgInfo
	 **/
	public $msg_info;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>
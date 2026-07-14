<?php

/**
 * 查询结果集
 * @author auto create
 */
class ResultSet
{
	
	/** 
	 * errorCode
	 **/
	public $error_code;
	
	/** 
	 * errorMsg
	 **/
	public $error_msg;
	
	/** 
	 * 是否还有下一页
	 **/
	public $has_next;
	
	/** 
	 * 结果集
	 **/
	public $results;
	
	/** 
	 * 总数
	 **/
	public $total_results;
	
	/** 
	 * 警告信息
	 **/
	public $warn_message;	
}
?>
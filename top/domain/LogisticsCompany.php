<?php

/**
 * 物流公司信息。返回的LogisticCompany包含的具体信息为入参fields请求的字段信息。
 * @author auto create
 */
class LogisticsCompany
{
	
	/** 
	 * 物流公司代码
	 **/
	public $code;
	
	/** 
	 * 物流公司标识
	 **/
	public $id;
	
	/** 
	 * 物流公司简称
	 **/
	public $name;
	
	/** 
	 * 运单号验证正则表达式
	 **/
	public $reg_mail_no;	
}
?>
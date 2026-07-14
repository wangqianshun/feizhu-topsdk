<?php

/**
 * 识别码列表
 * @author auto create
 */
class TopIdentCodeDTO
{
	
	/** 
	 * 是否可用
	 **/
	public $available;
	
	/** 
	 * 品牌ID
	 **/
	public $brand_id;
	
	/** 
	 * 识别码
	 **/
	public $ident_code;
	
	/** 
	 * 识别码类型，SN/IMEI
	 **/
	public $ident_type;
	
	/** 
	 * 根类目ID
	 **/
	public $root_cat_id;
	
	/** 
	 * 不可用原因
	 **/
	public $un_available_reason;	
}
?>
<?php

/**
 * rate更新列表
 * @author auto create
 */
class UpdateRateDo
{
	
	/** 
	 * 成人数
	 **/
	public $adults;
	
	/** 
	 * 儿童年龄，多个儿童年龄用竖线分割：4|5，默认儿童年龄为5岁
	 **/
	public $ages;
	
	/** 
	 * 入离日期
	 **/
	public $check_date_d_o_list;
	
	/** 
	 * 儿童数
	 **/
	public $children;
	
	/** 
	 * 酒店id
	 **/
	public $out_hid;	
}
?>
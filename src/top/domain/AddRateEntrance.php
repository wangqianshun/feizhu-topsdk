<?php

/**
 * 写点评页跳转信息
 * @author auto create
 */
class AddRateEntrance
{
	
	/** 
	 * 是否可以发表评价,0:不可以发表评价,1:可以发表评价.
	 **/
	public $available;
	
	/** 
	 * 写点评的跳转链接
	 **/
	public $jump_info;
	
	/** 
	 * 名称
	 **/
	public $name;
	
	/** 
	 * 是否展示入口 0:不展示,1:展示
	 **/
	public $show_status;	
}
?>
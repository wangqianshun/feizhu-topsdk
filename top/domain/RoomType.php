<?php

/**
 * 房型基础信息
 * @author auto create
 */
class RoomType
{
	
	/** 
	 * 房型名称
	 **/
	public $name;
	
	/** 
	 * 商家房型ID
	 **/
	public $outer_id;
	
	/** 
	 * 阿里房型id
	 **/
	public $rid;
	
	/** 
	 * 房型状态。0:正常，-1:删除，-2:停售
	 **/
	public $status;
	
	/** 
	 * 系统商，一般不填写，使用须申请
	 **/
	public $vendor;	
}
?>
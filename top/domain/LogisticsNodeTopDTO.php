<?php

/**
 * 物流节点
 * @author auto create
 */
class LogisticsNodeTopDTO
{
	
	/** 
	 * ACCEPT(已揽收),TRANSPORT(运输中),DELIVERING(派送中),SIGN(已签收),CANCEL(已取消),FAILED(物流异常)
	 **/
	public $action;
	
	/** 
	 * 配送员信息
	 **/
	public $delivery;
	
	/** 
	 * 货物所在的当前位置
	 **/
	public $location;
	
	/** 
	 * 操作时间戳，精确到毫秒（ms）
	 **/
	public $operate_time;	
}
?>
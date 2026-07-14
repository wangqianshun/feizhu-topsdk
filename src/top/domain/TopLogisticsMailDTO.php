<?php

/**
 * 运单列表
 * @author auto create
 */
class TopLogisticsMailDTO
{
	
	/** 
	 * 物流公司
	 **/
	public $company_name;
	
	/** 
	 * 运单号
	 **/
	public $out_sid;
	
	/** 
	 * 当前最新节点
	 **/
	public $status;
	
	/** 
	 * 交易单号
	 **/
	public $tid;
	
	/** 
	 * 物流节点列表
	 **/
	public $trace_list;	
}
?>
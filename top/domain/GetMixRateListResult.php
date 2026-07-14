<?php

/**
 * 模型
 * @author auto create
 */
class GetMixRateListResult
{
	
	/** 
	 * 页面布局信息
	 **/
	public $config_info;
	
	/** 
	 * 错误代码
	 **/
	public $err_code;
	
	/** 
	 * 错误详细描述
	 **/
	public $err_msg;
	
	/** 
	 * 是否可以向下翻页，0不可以，1可以
	 **/
	public $has_next_page;
	
	/** 
	 * 统计信息
	 **/
	public $item_statistic;
	
	/** 
	 * 商品评论列表
	 **/
	public $mix_rates;
	
	/** 
	 * 写点评页跳转信息
	 **/
	public $rate_entrance;
	
	/** 
	 * 成功
	 **/
	public $success;
	
	/** 
	 * 总数
	 **/
	public $total_num;	
}
?>
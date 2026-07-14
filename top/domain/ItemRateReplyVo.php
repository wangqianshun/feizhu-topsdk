<?php

/**
 * 所有商品评论回复
 * @author auto create
 */
class ItemRateReplyVo
{
	
	/** 
	 * 业务类型
	 **/
	public $biz_type;
	
	/** 
	 * 内容
	 **/
	public $content;
	
	/** 
	 * 创建日期
	 **/
	public $gmt_create;
	
	/** 
	 * 与主评间隔天数
	 **/
	public $interval_day;
	
	/** 
	 * 图片信息
	 **/
	public $media_info;
	
	/** 
	 * 当前用户的评价 0:不是, 1:是
	 **/
	public $owner;
	
	/** 
	 * 回复的是那一条，如果是回复主评为0，否则为追评id，组成树形结构
	 **/
	public $parent_id;
	
	/** 
	 * 被回复人的冗余信息
	 **/
	public $parent_info;
	
	/** 
	 * 该条回复的id
	 **/
	public $reply_id;
	
	/** 
	 * 回复类型 0买家追评 1卖家回复
	 **/
	public $reply_type;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * 酒店类目是标准酒店ID ，用来分库
	 **/
	public $travel_item_id;
	
	/** 
	 * 用户名称,已脱敏
	 **/
	public $user_nick;	
}
?>
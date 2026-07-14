<?php

/**
 * 统计信息
 * @author auto create
 */
class ItemStatisticVo
{
	
	/** 
	 * 最佳得分项
	 **/
	public $best_item;
	
	/** 
	 * 五分制标记, 1为五分制， 0为十分制
	 **/
	public $is_five_grade;
	
	/** 
	 * 评论总数
	 **/
	public $rate_cnt;
	
	/** 
	 * 有图的评论总数
	 **/
	public $rate_pic_cnt;
	
	/** 
	 * 推荐率
	 **/
	public $recommend_str;
	
	/** 
	 * 回复总数
	 **/
	public $reply_cnt;
	
	/** 
	 * tab信息
	 **/
	public $room_tab_infos;
	
	/** 
	 * 评分描述： 非常好
	 **/
	public $score_desc;
	
	/** 
	 * 评分详情，json格式
	 **/
	public $score_detail;
	
	/** 
	 * 不同分数的数量
	 **/
	public $score_infos;
	
	/** 
	 * 评分星级
	 **/
	public $score_level;
	
	/** 
	 * source来源 0自采 1共享 21agoda 22艺龙 23tripAdvisor
	 **/
	public $source;
	
	/** 
	 * tab信息
	 **/
	public $sub_item_infos;
	
	/** 
	 * tab信息
	 **/
	public $tab_info_s;
	
	/** 
	 * 热词显示的行数
	 **/
	public $tab_show_lines;
	
	/** 
	 * 总评分
	 **/
	public $total_score;
	
	/** 
	 * 酒店类目是标准酒店ID
	 **/
	public $travel_item_id;
	
	/** 
	 * 旅游商品信息
	 **/
	public $travel_item_info;
	
	/** 
	 * tripAdv评论数
	 **/
	public $trip_advate_cnt;	
}
?>
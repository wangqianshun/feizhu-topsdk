<?php

/**
 * 点赞数据
 * @author auto create
 */
class LikeTargetCount
{
	
	/** 
	 * 目标对象的赞数量或者踩数量
	 **/
	public $count;
	
	/** 
	 * 目标对象的ID
	 **/
	public $target_id;
	
	/** 
	 * 针对当前targetId,是否点赞过或踩过
	 **/
	public $voted;	
}
?>
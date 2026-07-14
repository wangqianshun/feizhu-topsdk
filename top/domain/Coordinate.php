<?php

/**
 * 经纬度计算结果列表
 * @author auto create
 */
class Coordinate
{
	
	/** 
	 * 批次号
	 **/
	public $batch_id;
	
	/** 
	 * 飞猪城市编码
	 **/
	public $city;
	
	/** 
	 * 飞猪城市中文名称
	 **/
	public $city_cn_name;
	
	/** 
	 * 飞猪城市英文名称
	 **/
	public $city_en_name;
	
	/** 
	 * 飞猪国家编码
	 **/
	public $country;
	
	/** 
	 * 外部经纬度标识id，可以是酒店或城市的id
	 **/
	public $outer_id;	
}
?>
<?php

/**
 * 货物所在的当前位置
 * @author auto create
 */
class LocationTopDTO
{
	
	/** 
	 * 地级市
	 **/
	public $city;
	
	/** 
	 * 区/县
	 **/
	public $district;
	
	/** 
	 * 纬度，高德地图
	 **/
	public $lat;
	
	/** 
	 * 经度，高德地图
	 **/
	public $lng;
	
	/** 
	 * 省/直辖市
	 **/
	public $province;
	
	/** 
	 * 乡/镇/街道
	 **/
	public $town;	
}
?>
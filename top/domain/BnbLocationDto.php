<?php

/**
 * 位置信息
 * @author auto create
 */
class BnbLocationDto
{
	
	/** 
	 * 门店地址
	 **/
	public $address;
	
	/** 
	 * 商圈
	 **/
	public $business;
	
	/** 
	 * 城市编码。参见：http://hotel.alitrip.com/area.htm，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（更新时为可选）
	 **/
	public $city;
	
	/** 
	 * 城市名称，优先取city字段，city字段如果为空会校验cityName
	 **/
	public $city_name;
	
	/** 
	 * domestic为0时，固定China； domestic为1时，必须传定义的海外国家编码值。参见：http://hotel.alitrip.com/area.htm
	 **/
	public $country;
	
	/** 
	 * 区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm
	 **/
	public $district;
	
	/** 
	 * 国别 0:国内;1:国外。默认是国内
	 **/
	public $domestic;
	
	/** 
	 * 门牌号
	 **/
	public $doorplate;
	
	/** 
	 * 门店英文地址
	 **/
	public $en_address;
	
	/** 
	 * 纬度
	 **/
	public $latitude;
	
	/** 
	 * 经度
	 **/
	public $longitude;
	
	/** 
	 * 坐标类型，现在支持：G – Google; B – 百度; A – 高德; M – Mapbar; L – 灵图
	 **/
	public $position_type;
	
	/** 
	 * 省份编码http://hotel.alitrip.com/area.htm
	 **/
	public $province;
	
	/** 
	 * 接待地址
	 **/
	public $reception_address;
	
	/** 
	 * 时区0到+11或者0到-11
	 **/
	public $timezone;	
}
?>
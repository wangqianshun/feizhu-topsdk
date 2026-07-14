<?php

/**
 * 酒店信息
 * @author auto create
 */
class XHotel
{
	
	/** 
	 * 酒店地址
	 **/
	public $address;
	
	/** 
	 * 商圈信息
	 **/
	public $business;
	
	/** 
	 * 城市编码
	 **/
	public $city;
	
	/** 
	 * 国家编码
	 **/
	public $country;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
	 **/
	public $credit_card_types;
	
	/** 
	 * 地区编码
	 **/
	public $district;
	
	/** 
	 * 0:国内;1:国外
	 **/
	public $domestic;
	
	/** 
	 * 未通过时的拒绝原因等。
	 **/
	public $error_info;
	
	/** 
	 * 扩展信息
	 **/
	public $extend;
	
	/** 
	 * 酒店ID
	 **/
	public $hid;
	
	/** 
	 * 0:酒店；1:客栈
	 **/
	public $hotel_type;
	
	/** 
	 * 纬度
	 **/
	public $latitude;
	
	/** 
	 * 经度
	 **/
	public $longitude;
	
	/** 
	 * 此字段已废弃
	 **/
	public $match_status;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 酒店名称
	 **/
	public $name;
	
	/** 
	 * 卖家酒店英文名称
	 **/
	public $name_e;
	
	/** 
	 * 卖家自己系统的id
	 **/
	public $outer_id;
	
	/** 
	 * 坐标类型
	 **/
	public $position_type;
	
	/** 
	 * 省份编码
	 **/
	public $province;
	
	/** 
	 * 淘宝标准酒店信息
	 **/
	public $s_hotel;
	
	/** 
	 * 0:可以接待外宾；1:仅内宾
	 **/
	public $service_type;
	
	/** 
	 * 酒店状态：0: 正常;-2:停售；-1：删除
	 **/
	public $status;
	
	/** 
	 * 酒店电话
	 **/
	public $tel;
	
	/** 
	 * 曾用名
	 **/
	public $used_name;	
}
?>
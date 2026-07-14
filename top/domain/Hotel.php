<?php

/**
 * 卖家酒店对象
 * @author auto create
 */
class Hotel
{
	
	/** 
	 * 酒店地址
	 **/
	public $address;
	
	/** 
	 * 酒店支付结算类型
	 **/
	public $billing_process_type;
	
	/** 
	 * 预订须知
	 **/
	public $booking_notice;
	
	/** 
	 * 品牌
	 **/
	public $brand;
	
	/** 
	 * 商圈
	 **/
	public $business;
	
	/** 
	 * 城市编码
	 **/
	public $city;
	
	/** 
	 * domestic=0时，固定China； domestic=1时，是海外国家编码值
	 **/
	public $country;
	
	/** 
	 * 货币类型（编码,字母编码）
	 **/
	public $currency_code_name;
	
	/** 
	 * 匹配是否人工确认
	 **/
	public $data_confirm;
	
	/** 
	 * 装修时间
	 **/
	public $decorate_time;
	
	/** 
	 * 酒店中文描述
	 **/
	public $description;
	
	/** 
	 * 地区编码
	 **/
	public $district;
	
	/** 
	 * 是否国外。
	 **/
	public $domestic;
	
	/** 
	 * 酒店下架类型
	 **/
	public $down_shelf_type;
	
	/** 
	 * 酒店英文地址
	 **/
	public $en_addr;
	
	/** 
	 * 酒店英文描述
	 **/
	public $en_desc;
	
	/** 
	 * 扩展信息
	 **/
	public $ext;
	
	/** 
	 * 扩展信息
	 **/
	public $extend;
	
	/** 
	 * 楼层信息
	 **/
	public $floors;
	
	/** 
	 * 酒店创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 酒店修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 酒店ID
	 **/
	public $hid;
	
	/** 
	 * 酒店设施。json格式
	 **/
	public $hotel_facilities;
	
	/** 
	 * 酒店入住政策
	 **/
	public $hotel_policies;
	
	/** 
	 * 判断该酒店是不是对应的卖家直营
	 **/
	public $kzzy_tag;
	
	/** 
	 * 纬度
	 **/
	public $latitude;
	
	/** 
	 * 经度
	 **/
	public $longitude;
	
	/** 
	 * 匹配状态
	 **/
	public $match_status;
	
	/** 
	 * 酒店名
	 **/
	public $name;
	
	/** 
	 * 酒店名称(英文)
	 **/
	public $name_e;
	
	/** 
	 * 开业时间
	 **/
	public $opening_time;
	
	/** 
	 * 操作人信息
	 **/
	public $oper_xiaoer_name;
	
	/** 
	 * 酒店外部ID
	 **/
	public $outer_id;
	
	/** 
	 * 酒店图片信息
	 **/
	public $pics;
	
	/** 
	 * 坐标类型，现在支持：G : Google:B : 百度;A : 高德;M : Mapbar;L : 灵图
	 **/
	public $position_type;
	
	/** 
	 * 邮编
	 **/
	public $postal_code;
	
	/** 
	 * 省份编码
	 **/
	public $province;
	
	/** 
	 * 酒店修改备注
	 **/
	public $remark;
	
	/** 
	 * 房间设施
	 **/
	public $room_facilities;
	
	/** 
	 * 房间数
	 **/
	public $rooms;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 卖家名称
	 **/
	public $seller_nick;
	
	/** 
	 * 酒店服务
	 **/
	public $service;
	
	/** 
	 * 标准酒店ID
	 **/
	public $shid;
	
	/** 
	 * 来源
	 **/
	public $source;
	
	/** 
	 * 酒店星级
	 **/
	public $star;
	
	/** 
	 * 酒店状态
	 **/
	public $status;
	
	/** 
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	public $tel;
	
	/** 
	 * 酒店类型
	 **/
	public $type;
	
	/** 
	 * 酒店曾用名
	 **/
	public $used_name;
	
	/** 
	 * 酒店的销售渠道
	 **/
	public $vendor;	
}
?>
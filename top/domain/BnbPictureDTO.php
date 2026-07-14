<?php

/**
 * 民宿门店添加
 * @author auto create
 */
class BnbPictureDTO
{
	
	/** 
	 * 图片属性 取值范围只能是：[普通图, 平面图, 全景图]
	 **/
	public $attribute;
	
	/** 
	 * 图片描述
	 **/
	public $des;
	
	/** 
	 * 是否主图  主图只能有一个，如果有多个或者没有，则会报错
	 **/
	public $ismain;
	
	/** 
	 * type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 健身房, 其他, 会议室, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂, 泳池]
	 **/
	public $type;
	
	/** 
	 * 图片地址
	 **/
	public $url;	
}
?>
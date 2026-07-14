<?php

/**
 * 查询到的 x 元素
 * @author auto create
 */
class HotelXitemDO
{
	
	/** 
	 * 审核拒绝原因
	 **/
	public $audit_reject_reason;
	
	/** 
	 *  审核状态-1：拒绝，0：审核中，1：审核通过
	 **/
	public $audit_status;
	
	/** 
	 * 附加产品使用维度   1:每间房维度 2:每间夜维度
	 **/
	public $dimension_type;
	
	/** 
	 * 详细信息json字符串
	 **/
	public $feature_detail;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品使用说明
	 **/
	public $item_desc;
	
	/** 
	 * 外部酒店code
	 **/
	public $out_hid;
	
	/** 
	 * 外部code
	 **/
	public $out_x_code;
	
	/** 
	 * 酒+X 图片格式化信息
	 **/
	public $pictures;
	
	/** 
	 * 元素类型简写
	 **/
	public $short_name;
	
	/** 
	 * 状态是否生效0 失效, 1生效
	 **/
	public $status;
	
	/** 
	 * 子类型code
	 **/
	public $sub_type_code;
	
	/** 
	 * 服务时间段
	 **/
	public $time;
	
	/** 
	 * 商品价值
	 **/
	public $value;	
}
?>
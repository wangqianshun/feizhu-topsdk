<?php

/**
 * 标准房型信息
 * @author auto create
 */
class SRoomType
{
	
	/** 
	 * 面积
	 **/
	public $area;
	
	/** 
	 * 床型。json格式：[{"bedType":"大床","bedSize":"1.5m"},{"bedType":"双床","bedSize":"1.2m"}]
	 **/
	public $bed;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 扩展字段
	 **/
	public $extend;
	
	/** 
	 * facility
	 **/
	public $facility;
	
	/** 
	 * 楼层
	 **/
	public $floor;
	
	/** 
	 * 宽带服务
"0","有线上网(免费),
"1","有线上网(无)",
"2","有线上网(收费)",
"3","有线上网(部分有且免费)",
"4","有线上网(部分有且收费)"
	 **/
	public $internet;
	
	/** 
	 * 最大入住人数
	 **/
	public $max_occupancy;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 房型名
	 **/
	public $name;
	
	/** 
	 * pic_url
	 **/
	public $pic_url;
	
	/** 
	 * shid
	 **/
	public $shid;
	
	/** 
	 * 匹配的标准房型
	 **/
	public $srid;
	
	/** 
	 * 状态。0:正常;-1:删除
	 **/
	public $status;
	
	/** 
	 * 窗型，枚举类型
0, 无窗,
1, 有窗;
	 **/
	public $window_type;	
}
?>
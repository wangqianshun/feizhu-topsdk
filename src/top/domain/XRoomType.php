<?php

/**
 * 查询得到的RoomType
 * @author auto create
 */
class XRoomType
{
	
	/** 
	 * 可选值：A,B,C,D。分别代表： A：15平米以下，B：16－30平米，C：31－50平米，D：50平米以上 2）也可以自己定义，比如：40平方米
	 **/
	public $area;
	
	/** 
	 * 床宽。
	 **/
	public $bed_size;
	
	/** 
	 * 床型。按自己定义存储，比如：高低床、上下床
	 **/
	public $bed_type;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 酒店数据状态：匹配成功；待匹配；待审核；审核失败；疑似错误；请注意：只有状态为&ldquo;匹配成功&rdquo;才是正常状态。其他状态都不会上架商品。
	 **/
	public $data_confirm_str;
	
	/** 
	 * 出错原因,没有匹配上标准房型时，小二拒绝的理由
	 **/
	public $error_info;
	
	/** 
	 * 扩展信息的JSON。 注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	public $extend;
	
	/** 
	 * 客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
	 **/
	public $floor;
	
	/** 
	 * hid
	 **/
	public $hid;
	
	/** 
	 * 宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
	 **/
	public $internet;
	
	/** 
	 * 此字段已废弃
	 **/
	public $match_status;
	
	/** 
	 * 最大入住人数
	 **/
	public $max_occupancy;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 房型名称
	 **/
	public $name;
	
	/** 
	 * 卖家房型英文名称
	 **/
	public $name_e;
	
	/** 
	 * 卖家系统id
	 **/
	public $outer_id;
	
	/** 
	 * rid
	 **/
	public $rid;
	
	/** 
	 * 标准房型信息
	 **/
	public $s_roomtype;
	
	/** 
	 * 设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {&quot;bar&quot;:false,&quot;catv&quot;:false,&quot;ddd&quot;:false,&quot;idd&quot;:false,&quot;pubtoilet&quot;:false,&quot;toilet&quot;:false}
	 **/
	public $service;
	
	/** 
	 * 房型状态。0:正常，-1:删除，-2:停售
	 **/
	public $status;
	
	/** 
	 * 房型维度下特殊标签含义 json: {"non-direct-roomType":1} , key:non-direct-roomType 表示非直连房型
	 **/
	public $tag_json;
	
	/** 
	 * 窗型,0：无窗/1：有窗
	 **/
	public $window_type;	
}
?>
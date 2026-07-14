<?php

/**
 * 结果集
 * @author auto create
 */
class RoomTypeCheckResultDO
{
	
	/** 
	 * 结构化床型
	 **/
	public $bed_type;
	
	/** 
	 * 床型检查信息
	 **/
	public $bedtypecheckmsg;
	
	/** 
	 * 床型数据检查结果，false代表有冲突
	 **/
	public $bedtypecheckresult;
	
	/** 
	 * 床型描叙
	 **/
	public $bedtypedesc;
	
	/** 
	 * 床型英文描叙
	 **/
	public $ennamebedtypedesc;
	
	/** 
	 * 冲突数据创建时间（供商家参考，如果时间是过去三天以外的，那么可以不用关注）
	 **/
	public $gmt_create;
	
	/** 
	 * 酒店名称
	 **/
	public $hotelname;
	
	/** 
	 * 床型描叙
	 **/
	public $namebedtypedesc;
	
	/** 
	 * 原始床型
	 **/
	public $origin_bed_type;
	
	/** 
	 * 酒店编码
	 **/
	public $outer_hotel_id;
	
	/** 
	 * 房型编码
	 **/
	public $outer_room_type_id;
	
	/** 
	 * 房型英文名称
	 **/
	public $roomtypeenname;
	
	/** 
	 * 房型名称
	 **/
	public $roomtypename;	
}
?>
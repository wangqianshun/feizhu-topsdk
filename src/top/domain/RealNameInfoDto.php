<?php

/**
 * 实名信息
 * @author auto create
 */
class RealNameInfoDto
{
	
	/** 
	 * e签宝flowId
	 **/
	public $e_sign_flow_id;
	
	/** 
	 * 人脸照片URL，e签宝链接64位图片格式，需要自行进行转化
	 **/
	public $face_img;
	
	/** 
	 * 实名身份证号
	 **/
	public $user_id_card;
	
	/** 
	 * 实名手机号
	 **/
	public $user_mobile;
	
	/** 
	 * 实名姓名
	 **/
	public $user_name;	
}
?>
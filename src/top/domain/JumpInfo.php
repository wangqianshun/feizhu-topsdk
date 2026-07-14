<?php

/**
 * 写点评的跳转链接
 * @author auto create
 */
class JumpInfo
{
	
	/** 
	 * h5地址
	 **/
	public $jump_h5_url;
	
	/** 
	 * 是否跳转native
	 **/
	public $jump_native;
	
	/** 
	 * native地址
	 **/
	public $jump_native_url;
	
	/** 
	 * 要往native跳转的客户端版本,当该字段存在时，只有大于该版本才会走native跳转
	 **/
	public $native_version;
	
	/** 
	 * native页面信息
	 **/
	public $page_name;	
}
?>
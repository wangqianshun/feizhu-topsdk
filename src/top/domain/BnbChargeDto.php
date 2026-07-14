<?php

/**
 * 加人收费信息
 * @author auto create
 */
class BnbChargeDto
{
	
	/** 
	 * 是否允许加人 0不允许 1允许
	 **/
	public $add_people;
	
	/** 
	 * 加人费用金额
	 **/
	public $fee;
	
	/** 
	 * 最小收费年龄
	 **/
	public $min_charging_age;
	
	/** 
	 * 允许加人数
	 **/
	public $num;	
}
?>
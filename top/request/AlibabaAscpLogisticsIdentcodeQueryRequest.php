<?php
/**
 * TOP API: alibaba.ascp.logistics.identcode.query request
 * 
 * @author auto create
 * @since 1.0, 2023.11.01
 */
class AlibabaAscpLogisticsIdentcodeQueryRequest
{
	/** 
	 * 是否可用
	 **/
	private $available;
	
	/** 
	 * 品牌ID，"11119": "Lenovo/联想",   "11656": "Asus/华硕",   "11813": "Huawei/华为",   "21660": "Hasee/神舟",   "21999": "MSI/微星",   "26683": "Dell/戴尔",   "26691": "Acer/宏碁",   "28247": "OPPO",   "30111": "Apple/苹果",   "31140": "HP/惠普",   "91621": "vivo",   "3506680": "MIUI/小米",   "184048021": "ThinkPad",   "590022244": "honor/荣耀",   "600184882": "OnePlus/一加",   "616784001": "MACHENIKE",   "639188075": "THUNDEROBOT",   "775486237": "MECHREVO/机械革命",   "1880225553": "ROG/玩家国度",   "7051840193": "iQOO(数码)"
	 **/
	private $brandId;
	
	/** 
	 * 识别码列表
	 **/
	private $identCodeList;
	
	/** 
	 * 识别码类型，SN，IMEI
	 **/
	private $identType;
	
	/** 
	 * 根类目ID，"1101": "笔记本电脑",   "1512": "手机类目",   "50019780": "平板电脑"
	 **/
	private $rootCatId;
	
	private $apiParas = array();
	
	public function setAvailable($available)
	{
		$this->available = $available;
		$this->apiParas["available"] = $available;
	}

	public function getAvailable()
	{
		return $this->available;
	}

	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setIdentCodeList($identCodeList)
	{
		$this->identCodeList = $identCodeList;
		$this->apiParas["ident_code_list"] = $identCodeList;
	}

	public function getIdentCodeList()
	{
		return $this->identCodeList;
	}

	public function setIdentType($identType)
	{
		$this->identType = $identType;
		$this->apiParas["ident_type"] = $identType;
	}

	public function getIdentType()
	{
		return $this->identType;
	}

	public function setRootCatId($rootCatId)
	{
		$this->rootCatId = $rootCatId;
		$this->apiParas["root_cat_id"] = $rootCatId;
	}

	public function getRootCatId()
	{
		return $this->rootCatId;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.identcode.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->brandId,"brandId");
		RequestCheckUtil::checkNotNull($this->identCodeList,"identCodeList");
		RequestCheckUtil::checkNotNull($this->identType,"identType");
		RequestCheckUtil::checkNotNull($this->rootCatId,"rootCatId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

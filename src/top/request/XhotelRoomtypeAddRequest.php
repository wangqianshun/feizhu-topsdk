<?php
/**
 * TOP API: taobao.xhotel.roomtype.add request
 * 
 * @author auto create
 * @since 1.0, 2025.06.29
 */
class XhotelRoomtypeAddRequest
{
	/** 
	 * 房型加床政策。 费用(fee) 说明(desc)
	 **/
	private $addBed;
	
	/** 
	 * 具体面积大小，请按照正确格式填写。两种格式，例如：40或者 10-20
	 **/
	private $area;
	
	/** 
	 * main_bed_type母床型,sub_bed_type子床型。详情参见文档： https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.yN2mES&docType=1&articleId=118712&previewCode=1DABB73EA935608455E203BA06CF3566
	 **/
	private $bedInfo;
	
	/** 
	 * 床宽。按自己定义存储，比如：2.1米
	 **/
	private $bedSize;
	
	/** 
	 * （已废弃）床型请使用bed_info字段
	 **/
	private $bedType;
	
	/** 
	 * 儿童政策
	 **/
	private $childrenPolicy;
	
	/** 
	 * 属性值为1: 含义是非直连房型
	 **/
	private $connectionType;
	
	/** 
	 * 不要使用
	 **/
	private $extend;
	
	/** 
	 * 客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
	 **/
	private $floor;
	
	/** 
	 * （已废弃）请使用outHid
	 **/
	private $hid;
	
	/** 
	 * 宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
	 **/
	private $internet;
	
	/** 
	 * 最大入住人数，默认2（1-99）
	 **/
	private $maxOccupancy;
	
	/** 
	 * 房型名称。不能超过200个字符
	 **/
	private $name;
	
	/** 
	 * 卖家房型英文名称
	 **/
	private $nameE;
	
	/** 
	 * 操作人信息
	 **/
	private $operator;
	
	/** 
	 * （必传）商家酒店ID，指明该房型属于哪家酒店
	 **/
	private $outHid;
	
	/** 
	 * 卖家房型ID，不能重复建议格式是:酒店code_房型code
	 **/
	private $outerId;
	
	/** 
	 * 房型图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。
	 **/
	private $pics;
	
	/** 
	 * 设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
	 **/
	private $service;
	
	/** 
	 * 该字段只有确定的时候，才允许填入。用于标示和淘宝房型的匹配关系。目前尚未启动该字段。
	 **/
	private $srid;
	
	/** 
	 * 酒店房型设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
	 **/
	private $standardRoomFacilities;
	
	/** 
	 * 系统商，无申请不可使用
	 **/
	private $vendor;
	
	/** 
	 * 窗型，窗型（windowType）： 0=无窗 1=有窗 2=部分有窗  窗型缺陷（windowTypeDefect）： 0=窗户不可打开通风 1=窗外有遮挡 2=窗外为酒店内景观  特殊窗（windowTypeSpecial）： 0=落地窗 1=飘窗 2=天窗 3=小窗。  当为有窗或部分有窗时，窗型缺陷可多选，特殊窗型需单选
	 **/
	private $windowDesc;
	
	/** 
	 * 0:无窗/1:有窗/2:部分有窗/3:暗窗/4:部分暗窗
	 **/
	private $windowType;
	
	private $apiParas = array();
	
	public function setAddBed($addBed)
	{
		$this->addBed = $addBed;
		$this->apiParas["add_bed"] = $addBed;
	}

	public function getAddBed()
	{
		return $this->addBed;
	}

	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBedInfo($bedInfo)
	{
		$this->bedInfo = $bedInfo;
		$this->apiParas["bed_info"] = $bedInfo;
	}

	public function getBedInfo()
	{
		return $this->bedInfo;
	}

	public function setBedSize($bedSize)
	{
		$this->bedSize = $bedSize;
		$this->apiParas["bed_size"] = $bedSize;
	}

	public function getBedSize()
	{
		return $this->bedSize;
	}

	public function setBedType($bedType)
	{
		$this->bedType = $bedType;
		$this->apiParas["bed_type"] = $bedType;
	}

	public function getBedType()
	{
		return $this->bedType;
	}

	public function setChildrenPolicy($childrenPolicy)
	{
		$this->childrenPolicy = $childrenPolicy;
		$this->apiParas["children_policy"] = $childrenPolicy;
	}

	public function getChildrenPolicy()
	{
		return $this->childrenPolicy;
	}

	public function setConnectionType($connectionType)
	{
		$this->connectionType = $connectionType;
		$this->apiParas["connection_type"] = $connectionType;
	}

	public function getConnectionType()
	{
		return $this->connectionType;
	}

	public function setExtend($extend)
	{
		$this->extend = $extend;
		$this->apiParas["extend"] = $extend;
	}

	public function getExtend()
	{
		return $this->extend;
	}

	public function setFloor($floor)
	{
		$this->floor = $floor;
		$this->apiParas["floor"] = $floor;
	}

	public function getFloor()
	{
		return $this->floor;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setInternet($internet)
	{
		$this->internet = $internet;
		$this->apiParas["internet"] = $internet;
	}

	public function getInternet()
	{
		return $this->internet;
	}

	public function setMaxOccupancy($maxOccupancy)
	{
		$this->maxOccupancy = $maxOccupancy;
		$this->apiParas["max_occupancy"] = $maxOccupancy;
	}

	public function getMaxOccupancy()
	{
		return $this->maxOccupancy;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNameE($nameE)
	{
		$this->nameE = $nameE;
		$this->apiParas["name_e"] = $nameE;
	}

	public function getNameE()
	{
		return $this->nameE;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOutHid($outHid)
	{
		$this->outHid = $outHid;
		$this->apiParas["out_hid"] = $outHid;
	}

	public function getOutHid()
	{
		return $this->outHid;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPics($pics)
	{
		$this->pics = $pics;
		$this->apiParas["pics"] = $pics;
	}

	public function getPics()
	{
		return $this->pics;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setSrid($srid)
	{
		$this->srid = $srid;
		$this->apiParas["srid"] = $srid;
	}

	public function getSrid()
	{
		return $this->srid;
	}

	public function setStandardRoomFacilities($standardRoomFacilities)
	{
		$this->standardRoomFacilities = $standardRoomFacilities;
		$this->apiParas["standard_room_facilities"] = $standardRoomFacilities;
	}

	public function getStandardRoomFacilities()
	{
		return $this->standardRoomFacilities;
	}

	public function setVendor($vendor)
	{
		$this->vendor = $vendor;
		$this->apiParas["vendor"] = $vendor;
	}

	public function getVendor()
	{
		return $this->vendor;
	}

	public function setWindowDesc($windowDesc)
	{
		$this->windowDesc = $windowDesc;
		$this->apiParas["window_desc"] = $windowDesc;
	}

	public function getWindowDesc()
	{
		return $this->windowDesc;
	}

	public function setWindowType($windowType)
	{
		$this->windowType = $windowType;
		$this->apiParas["window_type"] = $windowType;
	}

	public function getWindowType()
	{
		return $this->windowType;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.roomtype.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->area,30,"area");
		RequestCheckUtil::checkMaxLength($this->bedSize,30,"bedSize");
		RequestCheckUtil::checkNotNull($this->bedType,"bedType");
		RequestCheckUtil::checkMaxLength($this->bedType,100,"bedType");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->floor,30,"floor");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,200,"name");
		RequestCheckUtil::checkMaxLength($this->nameE,200,"nameE");
		RequestCheckUtil::checkMaxLength($this->outHid,50,"outHid");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
		RequestCheckUtil::checkMaxLength($this->service,1024,"service");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

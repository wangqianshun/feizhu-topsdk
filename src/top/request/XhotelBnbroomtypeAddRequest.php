<?php
/**
 * TOP API: taobao.xhotel.bnbroomtype.add request
 * 
 * @author auto create
 * @since 1.0, 2023.03.08
 */
class XhotelBnbroomtypeAddRequest
{
	/** 
	 * 详见“允许活动”：https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1  ，最多500字符
	 **/
	private $activitiesAllowed;
	
	/** 
	 * 床信息: bedType:床型, desc: 床型名, width:床宽, length：床长, bedNum: 床数。床型取值见链接https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.4zBOVn&docType=1&articleId=108347
	 **/
	private $bedInfo;
	
	/** 
	 * 民宿入住要求&附加信息
	 **/
	private $bnbBookingTime;
	
	/** 
	 * 民宿扩展信息
	 **/
	private $bnbExtend;
	
	/** 
	 * 民宿名称，默认取bnbName
	 **/
	private $bnbName;
	
	/** 
	 * 品牌名称，最多100字符
	 **/
	private $brand;
	
	/** 
	 * 亮点描述，最多1000字符
	 **/
	private $brightspot;
	
	/** 
	 * 加人收费信息
	 **/
	private $charge;
	
	/** 
	 * 入住须知，最多2000字符
	 **/
	private $checkInNotes;
	
	/** 
	 * 清洁费是否收取 0：否 1：是
	 **/
	private $cleaningCharge;
	
	/** 
	 * “打扫类型1(1客1扫/换),2(1天1扫/换),https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
	 **/
	private $cleaningFrequency;
	
	/** 
	 * 清洁费类型 0.线下；1.线上
	 **/
	private $cleaningType;
	
	/** 
	 * 装修等级 1 精装；2普通；3简装
	 **/
	private $decorateLevel;
	
	/** 
	 * 装修风格https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
	 **/
	private $decorateStyle;
	
	/** 
	 * 装修时间，格式为2015-01-01装修时间
	 **/
	private $decorateTime;
	
	/** 
	 * 押金金额
	 **/
	private $depositAmount;
	
	/** 
	 * 押金类型0.线下；1.线上
	 **/
	private $depositType;
	
	/** 
	 * 加床费,分为单位
	 **/
	private $extraBedsFee;
	
	/** 
	 * 0-n；若不可加床，值为0
	 **/
	private $extraBedsNum;
	
	/** 
	 * 清洁费金额；整数[1，9999999]
	 **/
	private $extraCleaningCharge;
	
	/** 
	 * 额外收费
	 **/
	private $extraFee;
	
	/** 
	 * 客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
	 **/
	private $floor;
	
	/** 
	 * 是否接待儿童、老人；成年人必接待，详见“可接待客人”https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
	 **/
	private $guestAge;
	
	/** 
	 * 0：不限制，1：只限男性，2：只限女性'
	 **/
	private $guestGender;
	
	/** 
	 * 是否有前台 0没有 1有
	 **/
	private $hasFrontDesk;
	
	/** 
	 * 是否与房东同住 0 不同住 1同住
	 **/
	private $hasLandlord;
	
	/** 
	 * 有无资质执照 0 没有 1有
	 **/
	private $hasLicense;
	
	/** 
	 * 房屋户型， bedroom: 室, bathroom: 卫, livingroom: 厅, study: 书房, balcony: 阳台,kitchen: 厨房,bedroom和livingroom不能为空
	 **/
	private $houseModel;
	
	/** 
	 * 单间面积，单位平方米
	 **/
	private $houseSize;
	
	/** 
	 * 房源介绍,最多2000字符
	 **/
	private $introduction;
	
	/** 
	 * 发票，0：卖家提供发票，1：房东提供发票
	 **/
	private $invoice;
	
	/** 
	 * 可提供发票类型，1.专票 2.纸质普票 3.电子普票
	 **/
	private $invoiceType;
	
	/** 
	 * 是否使用实拍图片 0不使用 1使用
	 **/
	private $isUseShootImage;
	
	/** 
	 * 位置描述
	 **/
	private $localInfo;
	
	/** 
	 * 民宿房源位置信息
	 **/
	private $location;
	
	/** 
	 * 最大入住人数 1-99
	 **/
	private $maxOccupancy;
	
	/** 
	 * 房源名
	 **/
	private $name;
	
	/** 
	 * 房源英文名
	 **/
	private $nameE;
	
	/** 
	 * 如果要变更商品房源编码请使用该字段。
	 **/
	private $newOuterId;
	
	/** 
	 * 开业时间，格式为2015-01-01
	 **/
	private $openingTime;
	
	/** 
	 * 外部门店id
	 **/
	private $outHid;
	
	/** 
	 * 房源id, 这是卖家自己系统中的ID
	 **/
	private $outerId;
	
	/** 
	 * 房源外部标签 标签信息，逗号(,)分隔，最多1000字符
	 **/
	private $outerTags;
	
	/** 
	 * 房源图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。
	 **/
	private $pics;
	
	/** 
	 * 房源类型,见https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
	 **/
	private $productType;
	
	/** 
	 * 是否开启闪订 0不开启 1开启
	 **/
	private $quickOrder;
	
	/** 
	 * 真实联系方式
	 **/
	private $realTel;
	
	/** 
	 * 是否可接待外宾 0：否 1：是；默认值: 0
	 **/
	private $receiveForeigners;
	
	/** 
	 * 单间面积，单位平方米
	 **/
	private $rentSize;
	
	/** 
	 * 出租类型，1整租；2分租。3床位 默认整租，该字段不能更新
	 **/
	private $rentType;
	
	/** 
	 * 风景类型(枚举)https://fliggy.open.taobao.com/doc.htm?docId=120148&docType=1
	 **/
	private $scenicFeature;
	
	/** 
	 * 设施服务。json格式示例值：{"24152":true,"24149":true,"24150":true}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=40的分类
	 **/
	private $service;
	
	/** 
	 * 结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
	 **/
	private $settlementCurrency;
	
	/** 
	 * 添加标准房源匹配
	 **/
	private $srid;
	
	/** 
	 * 标准酒店服务,参考文档https://fliggy.open.taobao.com/doc.htm?docId=120362&docType=1
	 **/
	private $standardRoomFacilities;
	
	/** 
	 * 状态 0：在线 -1：不在线 -2:停售
	 **/
	private $status;
	
	/** 
	 * 是否支持IM聊天 0不支持 1支持
	 **/
	private $supportIm;
	
	/** 
	 * 是否信用免押金0：否 1：是
	 **/
	private $supportcredit;
	
	/** 
	 * 周边描述
	 **/
	private $surroundInfo;
	
	/** 
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;
	
	/** 
	 * 销售渠道,默认taobao
	 **/
	private $vendor;
	
	/** 
	 * 视频地址，最多1000字符
	 **/
	private $videoUrl;
	
	/** 
	 * 0-无窗  1-有窗  2-部分有窗 3-暗窗 4-部分暗窗  5-落地窗
	 **/
	private $windowType;
	
	private $apiParas = array();
	
	public function setActivitiesAllowed($activitiesAllowed)
	{
		$this->activitiesAllowed = $activitiesAllowed;
		$this->apiParas["activities_allowed"] = $activitiesAllowed;
	}

	public function getActivitiesAllowed()
	{
		return $this->activitiesAllowed;
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

	public function setBnbBookingTime($bnbBookingTime)
	{
		$this->bnbBookingTime = $bnbBookingTime;
		$this->apiParas["bnb_booking_time"] = $bnbBookingTime;
	}

	public function getBnbBookingTime()
	{
		return $this->bnbBookingTime;
	}

	public function setBnbExtend($bnbExtend)
	{
		$this->bnbExtend = $bnbExtend;
		$this->apiParas["bnb_extend"] = $bnbExtend;
	}

	public function getBnbExtend()
	{
		return $this->bnbExtend;
	}

	public function setBnbName($bnbName)
	{
		$this->bnbName = $bnbName;
		$this->apiParas["bnb_name"] = $bnbName;
	}

	public function getBnbName()
	{
		return $this->bnbName;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setBrightspot($brightspot)
	{
		$this->brightspot = $brightspot;
		$this->apiParas["brightspot"] = $brightspot;
	}

	public function getBrightspot()
	{
		return $this->brightspot;
	}

	public function setCharge($charge)
	{
		$this->charge = $charge;
		$this->apiParas["charge"] = $charge;
	}

	public function getCharge()
	{
		return $this->charge;
	}

	public function setCheckInNotes($checkInNotes)
	{
		$this->checkInNotes = $checkInNotes;
		$this->apiParas["check_in_notes"] = $checkInNotes;
	}

	public function getCheckInNotes()
	{
		return $this->checkInNotes;
	}

	public function setCleaningCharge($cleaningCharge)
	{
		$this->cleaningCharge = $cleaningCharge;
		$this->apiParas["cleaning_charge"] = $cleaningCharge;
	}

	public function getCleaningCharge()
	{
		return $this->cleaningCharge;
	}

	public function setCleaningFrequency($cleaningFrequency)
	{
		$this->cleaningFrequency = $cleaningFrequency;
		$this->apiParas["cleaning_frequency"] = $cleaningFrequency;
	}

	public function getCleaningFrequency()
	{
		return $this->cleaningFrequency;
	}

	public function setCleaningType($cleaningType)
	{
		$this->cleaningType = $cleaningType;
		$this->apiParas["cleaning_type"] = $cleaningType;
	}

	public function getCleaningType()
	{
		return $this->cleaningType;
	}

	public function setDecorateLevel($decorateLevel)
	{
		$this->decorateLevel = $decorateLevel;
		$this->apiParas["decorate_level"] = $decorateLevel;
	}

	public function getDecorateLevel()
	{
		return $this->decorateLevel;
	}

	public function setDecorateStyle($decorateStyle)
	{
		$this->decorateStyle = $decorateStyle;
		$this->apiParas["decorate_style"] = $decorateStyle;
	}

	public function getDecorateStyle()
	{
		return $this->decorateStyle;
	}

	public function setDecorateTime($decorateTime)
	{
		$this->decorateTime = $decorateTime;
		$this->apiParas["decorate_time"] = $decorateTime;
	}

	public function getDecorateTime()
	{
		return $this->decorateTime;
	}

	public function setDepositAmount($depositAmount)
	{
		$this->depositAmount = $depositAmount;
		$this->apiParas["deposit_amount"] = $depositAmount;
	}

	public function getDepositAmount()
	{
		return $this->depositAmount;
	}

	public function setDepositType($depositType)
	{
		$this->depositType = $depositType;
		$this->apiParas["deposit_type"] = $depositType;
	}

	public function getDepositType()
	{
		return $this->depositType;
	}

	public function setExtraBedsFee($extraBedsFee)
	{
		$this->extraBedsFee = $extraBedsFee;
		$this->apiParas["extra_beds_fee"] = $extraBedsFee;
	}

	public function getExtraBedsFee()
	{
		return $this->extraBedsFee;
	}

	public function setExtraBedsNum($extraBedsNum)
	{
		$this->extraBedsNum = $extraBedsNum;
		$this->apiParas["extra_beds_num"] = $extraBedsNum;
	}

	public function getExtraBedsNum()
	{
		return $this->extraBedsNum;
	}

	public function setExtraCleaningCharge($extraCleaningCharge)
	{
		$this->extraCleaningCharge = $extraCleaningCharge;
		$this->apiParas["extra_cleaning_charge"] = $extraCleaningCharge;
	}

	public function getExtraCleaningCharge()
	{
		return $this->extraCleaningCharge;
	}

	public function setExtraFee($extraFee)
	{
		$this->extraFee = $extraFee;
		$this->apiParas["extra_fee"] = $extraFee;
	}

	public function getExtraFee()
	{
		return $this->extraFee;
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

	public function setGuestAge($guestAge)
	{
		$this->guestAge = $guestAge;
		$this->apiParas["guest_age"] = $guestAge;
	}

	public function getGuestAge()
	{
		return $this->guestAge;
	}

	public function setGuestGender($guestGender)
	{
		$this->guestGender = $guestGender;
		$this->apiParas["guest_gender"] = $guestGender;
	}

	public function getGuestGender()
	{
		return $this->guestGender;
	}

	public function setHasFrontDesk($hasFrontDesk)
	{
		$this->hasFrontDesk = $hasFrontDesk;
		$this->apiParas["has_front_desk"] = $hasFrontDesk;
	}

	public function getHasFrontDesk()
	{
		return $this->hasFrontDesk;
	}

	public function setHasLandlord($hasLandlord)
	{
		$this->hasLandlord = $hasLandlord;
		$this->apiParas["has_landlord"] = $hasLandlord;
	}

	public function getHasLandlord()
	{
		return $this->hasLandlord;
	}

	public function setHasLicense($hasLicense)
	{
		$this->hasLicense = $hasLicense;
		$this->apiParas["has_license"] = $hasLicense;
	}

	public function getHasLicense()
	{
		return $this->hasLicense;
	}

	public function setHouseModel($houseModel)
	{
		$this->houseModel = $houseModel;
		$this->apiParas["house_model"] = $houseModel;
	}

	public function getHouseModel()
	{
		return $this->houseModel;
	}

	public function setHouseSize($houseSize)
	{
		$this->houseSize = $houseSize;
		$this->apiParas["house_size"] = $houseSize;
	}

	public function getHouseSize()
	{
		return $this->houseSize;
	}

	public function setIntroduction($introduction)
	{
		$this->introduction = $introduction;
		$this->apiParas["introduction"] = $introduction;
	}

	public function getIntroduction()
	{
		return $this->introduction;
	}

	public function setInvoice($invoice)
	{
		$this->invoice = $invoice;
		$this->apiParas["invoice"] = $invoice;
	}

	public function getInvoice()
	{
		return $this->invoice;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setIsUseShootImage($isUseShootImage)
	{
		$this->isUseShootImage = $isUseShootImage;
		$this->apiParas["is_use_shoot_image"] = $isUseShootImage;
	}

	public function getIsUseShootImage()
	{
		return $this->isUseShootImage;
	}

	public function setLocalInfo($localInfo)
	{
		$this->localInfo = $localInfo;
		$this->apiParas["local_info"] = $localInfo;
	}

	public function getLocalInfo()
	{
		return $this->localInfo;
	}

	public function setLocation($location)
	{
		$this->location = $location;
		$this->apiParas["location"] = $location;
	}

	public function getLocation()
	{
		return $this->location;
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

	public function setNewOuterId($newOuterId)
	{
		$this->newOuterId = $newOuterId;
		$this->apiParas["new_outer_id"] = $newOuterId;
	}

	public function getNewOuterId()
	{
		return $this->newOuterId;
	}

	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
		$this->apiParas["opening_time"] = $openingTime;
	}

	public function getOpeningTime()
	{
		return $this->openingTime;
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

	public function setOuterTags($outerTags)
	{
		$this->outerTags = $outerTags;
		$this->apiParas["outer_tags"] = $outerTags;
	}

	public function getOuterTags()
	{
		return $this->outerTags;
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

	public function setProductType($productType)
	{
		$this->productType = $productType;
		$this->apiParas["product_type"] = $productType;
	}

	public function getProductType()
	{
		return $this->productType;
	}

	public function setQuickOrder($quickOrder)
	{
		$this->quickOrder = $quickOrder;
		$this->apiParas["quick_order"] = $quickOrder;
	}

	public function getQuickOrder()
	{
		return $this->quickOrder;
	}

	public function setRealTel($realTel)
	{
		$this->realTel = $realTel;
		$this->apiParas["real_tel"] = $realTel;
	}

	public function getRealTel()
	{
		return $this->realTel;
	}

	public function setReceiveForeigners($receiveForeigners)
	{
		$this->receiveForeigners = $receiveForeigners;
		$this->apiParas["receive_foreigners"] = $receiveForeigners;
	}

	public function getReceiveForeigners()
	{
		return $this->receiveForeigners;
	}

	public function setRentSize($rentSize)
	{
		$this->rentSize = $rentSize;
		$this->apiParas["rent_size"] = $rentSize;
	}

	public function getRentSize()
	{
		return $this->rentSize;
	}

	public function setRentType($rentType)
	{
		$this->rentType = $rentType;
		$this->apiParas["rent_type"] = $rentType;
	}

	public function getRentType()
	{
		return $this->rentType;
	}

	public function setScenicFeature($scenicFeature)
	{
		$this->scenicFeature = $scenicFeature;
		$this->apiParas["scenic_feature"] = $scenicFeature;
	}

	public function getScenicFeature()
	{
		return $this->scenicFeature;
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

	public function setSettlementCurrency($settlementCurrency)
	{
		$this->settlementCurrency = $settlementCurrency;
		$this->apiParas["settlement_currency"] = $settlementCurrency;
	}

	public function getSettlementCurrency()
	{
		return $this->settlementCurrency;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSupportIm($supportIm)
	{
		$this->supportIm = $supportIm;
		$this->apiParas["support_im"] = $supportIm;
	}

	public function getSupportIm()
	{
		return $this->supportIm;
	}

	public function setSupportcredit($supportcredit)
	{
		$this->supportcredit = $supportcredit;
		$this->apiParas["supportcredit"] = $supportcredit;
	}

	public function getSupportcredit()
	{
		return $this->supportcredit;
	}

	public function setSurroundInfo($surroundInfo)
	{
		$this->surroundInfo = $surroundInfo;
		$this->apiParas["surround_info"] = $surroundInfo;
	}

	public function getSurroundInfo()
	{
		return $this->surroundInfo;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
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

	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
		$this->apiParas["video_url"] = $videoUrl;
	}

	public function getVideoUrl()
	{
		return $this->videoUrl;
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
		return "taobao.xhotel.bnbroomtype.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->activitiesAllowed,500,"activitiesAllowed");
		RequestCheckUtil::checkNotNull($this->bedInfo,"bedInfo");
		RequestCheckUtil::checkMaxListSize($this->bnbName,60,"bnbName");
		RequestCheckUtil::checkMaxLength($this->bnbName,60,"bnbName");
		RequestCheckUtil::checkMaxLength($this->brand,100,"brand");
		RequestCheckUtil::checkMaxLength($this->brightspot,1000,"brightspot");
		RequestCheckUtil::checkMaxLength($this->checkInNotes,2000,"checkInNotes");
		RequestCheckUtil::checkMaxLength($this->extraFee,2000,"extraFee");
		RequestCheckUtil::checkNotNull($this->hasLicense,"hasLicense");
		RequestCheckUtil::checkNotNull($this->houseModel,"houseModel");
		RequestCheckUtil::checkNotNull($this->houseSize,"houseSize");
		RequestCheckUtil::checkMaxLength($this->introduction,2000,"introduction");
		RequestCheckUtil::checkNotNull($this->invoice,"invoice");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkMaxLength($this->localInfo,1000,"localInfo");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxListSize($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->nameE,128,"nameE");
		RequestCheckUtil::checkNotNull($this->outHid,"outHid");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerTags,1000,"outerTags");
		RequestCheckUtil::checkNotNull($this->realTel,"realTel");
		RequestCheckUtil::checkNotNull($this->rentType,"rentType");
		RequestCheckUtil::checkNotNull($this->standardRoomFacilities,"standardRoomFacilities");
		RequestCheckUtil::checkMaxLength($this->surroundInfo,1000,"surroundInfo");
		RequestCheckUtil::checkNotNull($this->tel,"tel");
		RequestCheckUtil::checkMaxLength($this->videoUrl,1000,"videoUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

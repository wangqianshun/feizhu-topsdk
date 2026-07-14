<?php
/**
 * TOP API: taobao.xhotel.bnbhouse.add request
 * 
 * @author auto create
 * @since 1.0, 2026.05.08
 */
class XhotelBnbhouseAddRequest
{
	/** 
	 * 详见“允许活动”list 12,32,33,
	 **/
	private $activitiesAllowed;
	
	/** 
	 * 门店属性 1 个人房源 2 城市公寓 3 乡村民宿等
	 **/
	private $attributes;
	
	/** 
	 * 入住要求&附加信息
	 **/
	private $bnbBookingTime;
	
	/** 
	 * 品牌名称
	 **/
	private $brand;
	
	/** 
	 * 加人收费信息
	 **/
	private $charge;
	
	/** 
	 * 入住须知
	 **/
	private $checkInNotes;
	
	/** 
	 * 作为菲住门店签约的佣金比率,范围为10-50
	 **/
	private $commissionRate;
	
	/** 
	 * 装修等级 1 精装 2普通 3简装
	 **/
	private $decorateLevel;
	
	/** 
	 * 装修风格，详见装修风格枚举表
	 **/
	private $decorateStyle;
	
	/** 
	 * 装修时间，格式为2015-01-01
	 **/
	private $decorateTime;
	
	/** 
	 * 门店简介
	 **/
	private $description;
	
	/** 
	 * KA渠道
	 **/
	private $extend;
	
	/** 
	 * 可加床数
	 **/
	private $extraBedsNum;
	
	/** 
	 * 酒店设施。json格式示例值：{"24152":true,"24149":true,"24150":true}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=20的分类
	 **/
	private $facilities;
	
	/** 
	 * 楼层
	 **/
	private $floors;
	
	/** 
	 * 可接待客人年龄情况：是否接待儿童、老人；成年人必接待，详见“可接待客人”list
	 **/
	private $guestAge;
	
	/** 
	 * 可接待客人性别 0：不限制，1：只限男性，2：只限女性'
	 **/
	private $guestGender;
	
	/** 
	 * 是否有前台 0没有 1有
	 **/
	private $hasFrontDesk;
	
	/** 
	 * 有无资质执照 0 无资质 1有资质
	 **/
	private $hasLicense;
	
	/** 
	 * 面积大小
	 **/
	private $houseSize;
	
	/** 
	 * 传入是或者否，是表明为菲住合作模式，hid打标；“否”表示为正常合作模式，hid去标；不传保持原有的合作模式不变
	 **/
	private $isFeizhuHotel;
	
	/** 
	 * 是否使用实拍图片 0不使用 1使用
	 **/
	private $isUseShootImage;
	
	/** 
	 * 位置信息
	 **/
	private $location;
	
	/** 
	 * 门店名称
	 **/
	private $name;
	
	/** 
	 * 门店英文名称
	 **/
	private $nameE;
	
	/** 
	 * 开业时间，格式为2015-01-01
	 **/
	private $openingTime;
	
	/** 
	 * 外部房东id
	 **/
	private $outOwnerId;
	
	/** 
	 * 供应商渠道门店ID
	 **/
	private $outerId;
	
	/** 
	 * 民宿门店添加
	 **/
	private $pictures;
	
	/** 
	 * 门店类型，详见“房源类型list
	 **/
	private $productType;
	
	/** 
	 * 真实联系方式
	 **/
	private $realTel;
	
	/** 
	 * 是否可接待外宾 0不接待 1接待,默认值: 0
	 **/
	private $receiveForeigners;
	
	/** 
	 * 风景类型，详见风景类型枚举表
	 **/
	private $scenicFeature;
	
	/** 
	 * 结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
	 **/
	private $settlementCurrency;
	
	/** 
	 * 匹配的标准门店
	 **/
	private $shid;
	
	/** 
	 * 预定须知
	 **/
	private $standardBookingNotice;
	
	/** 
	 * 标准酒店服务,参考文档https://fliggy.open.taobao.com/doc.htm?docId=120362&docType=1
	 **/
	private $standardHotelFacilities;
	
	/** 
	 * 服务
	 **/
	private $standardHotelService;
	
	/** 
	 * 房型状态。0:正常，-1:删除，-2:停售
	 **/
	private $status;
	
	/** 
	 * 门店标签 标签信息，逗号(,)分隔
	 **/
	private $tags;
	
	/** 
	 * 联系方式。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;
	
	/** 
	 * 对接系统商名称：可为空不要乱填，需要申请后使用
	 **/
	private $vendor;
	
	/** 
	 * 视频地址
	 **/
	private $videoUrl;
	
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

	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
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

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
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

	public function setCommissionRate($commissionRate)
	{
		$this->commissionRate = $commissionRate;
		$this->apiParas["commission_rate"] = $commissionRate;
	}

	public function getCommissionRate()
	{
		return $this->commissionRate;
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
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

	public function setExtraBedsNum($extraBedsNum)
	{
		$this->extraBedsNum = $extraBedsNum;
		$this->apiParas["extra_beds_num"] = $extraBedsNum;
	}

	public function getExtraBedsNum()
	{
		return $this->extraBedsNum;
	}

	public function setFacilities($facilities)
	{
		$this->facilities = $facilities;
		$this->apiParas["facilities"] = $facilities;
	}

	public function getFacilities()
	{
		return $this->facilities;
	}

	public function setFloors($floors)
	{
		$this->floors = $floors;
		$this->apiParas["floors"] = $floors;
	}

	public function getFloors()
	{
		return $this->floors;
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

	public function setHasLicense($hasLicense)
	{
		$this->hasLicense = $hasLicense;
		$this->apiParas["has_license"] = $hasLicense;
	}

	public function getHasLicense()
	{
		return $this->hasLicense;
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

	public function setIsFeizhuHotel($isFeizhuHotel)
	{
		$this->isFeizhuHotel = $isFeizhuHotel;
		$this->apiParas["is_feizhu_hotel"] = $isFeizhuHotel;
	}

	public function getIsFeizhuHotel()
	{
		return $this->isFeizhuHotel;
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

	public function setLocation($location)
	{
		$this->location = $location;
		$this->apiParas["location"] = $location;
	}

	public function getLocation()
	{
		return $this->location;
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

	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
		$this->apiParas["opening_time"] = $openingTime;
	}

	public function getOpeningTime()
	{
		return $this->openingTime;
	}

	public function setOutOwnerId($outOwnerId)
	{
		$this->outOwnerId = $outOwnerId;
		$this->apiParas["out_owner_id"] = $outOwnerId;
	}

	public function getOutOwnerId()
	{
		return $this->outOwnerId;
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

	public function setPictures($pictures)
	{
		$this->pictures = $pictures;
		$this->apiParas["pictures"] = $pictures;
	}

	public function getPictures()
	{
		return $this->pictures;
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

	public function setScenicFeature($scenicFeature)
	{
		$this->scenicFeature = $scenicFeature;
		$this->apiParas["scenic_feature"] = $scenicFeature;
	}

	public function getScenicFeature()
	{
		return $this->scenicFeature;
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

	public function setShid($shid)
	{
		$this->shid = $shid;
		$this->apiParas["shid"] = $shid;
	}

	public function getShid()
	{
		return $this->shid;
	}

	public function setStandardBookingNotice($standardBookingNotice)
	{
		$this->standardBookingNotice = $standardBookingNotice;
		$this->apiParas["standard_booking_notice"] = $standardBookingNotice;
	}

	public function getStandardBookingNotice()
	{
		return $this->standardBookingNotice;
	}

	public function setStandardHotelFacilities($standardHotelFacilities)
	{
		$this->standardHotelFacilities = $standardHotelFacilities;
		$this->apiParas["standard_hotel_facilities"] = $standardHotelFacilities;
	}

	public function getStandardHotelFacilities()
	{
		return $this->standardHotelFacilities;
	}

	public function setStandardHotelService($standardHotelService)
	{
		$this->standardHotelService = $standardHotelService;
		$this->apiParas["standard_hotel_service"] = $standardHotelService;
	}

	public function getStandardHotelService()
	{
		return $this->standardHotelService;
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

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbhouse.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->attributes,"attributes");
		RequestCheckUtil::checkNotNull($this->hasLicense,"hasLicense");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->outOwnerId,"outOwnerId");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->productType,"productType");
		RequestCheckUtil::checkNotNull($this->realTel,"realTel");
		RequestCheckUtil::checkNotNull($this->standardHotelFacilities,"standardHotelFacilities");
		RequestCheckUtil::checkNotNull($this->tel,"tel");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

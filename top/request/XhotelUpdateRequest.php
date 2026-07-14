<?php
/**
 * TOP API: taobao.xhotel.update request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelUpdateRequest
{
	/** 
	 * 酒店地址。长度不能超过255
	 **/
	private $address;
	
	/** 
	 * 酒店英文地址
	 **/
	private $addressEn;
	
	/** 
	 * 旺旺昵称
	 **/
	private $aliNick;
	
	/** 
	 * 预订须知。json字段描述：hotelInMountaintop 酒店位于山顶 1在山顶、0不在；needBoat 酒店需要坐船前往 1需要、0不需要；酒店位于景区内 1在景区、0不在；extraBed 加床收费；extraCharge 额外收费；arrivalTime 到店时间；extend 其他补充项
	 **/
	private $bookingNotice;
	
	/** 
	 * 酒店品牌。取值为数字。枚举见链接：https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.S16vXH&docType=1&articleId=120180
	 **/
	private $brand;
	
	/** 
	 * 商业区（圈）长度不超过20字
	 **/
	private $business;
	
	/** 
	 * 城市编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（新增酒店时为必须）当domestic为0时，该字段为必填项，当domestic为1时，该字段可不填；而当domestic=1时，经纬度必须传给我们，否则推送会失败。
	 **/
	private $city;
	
	/** 
	 * 标识坐标系类型。WGS84，表示地球坐标系 ；GCJ02，表示火星坐标系
	 **/
	private $coordinateSystem;
	
	/** 
	 * domestic为true时，固定China； domestic为false时，必须传定义的海外国家编码值。参见：http://kezhan.trip.taobao.com/countrys.html
	 **/
	private $country;
	
	/** 
	 * 逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
	 **/
	private $creditCardTypes;
	
	/** 
	 * 装修时间，格式为2015-10-01
	 **/
	private $decorateTime;
	
	/** 
	 * 酒店描述
	 **/
	private $description;
	
	/** 
	 * 酒店英文描述
	 **/
	private $descriptionEn;
	
	/** 
	 * 区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3
	 **/
	private $district;
	
	/** 
	 * 是否国内酒店。0:国内;1:国外；注意，domestic=0代表国内酒店，必须传入城市；domestic=1代表国际酒店，可以不传入城市，但必须传入经纬度，否则推送失败。
	 **/
	private $domestic;
	
	/** 
	 * 不要使用
	 **/
	private $extend;
	
	/** 
	 * 楼层信息
	 **/
	private $floors;
	
	/** 
	 * （已废弃）请使用outer_id来标识要修改的酒店
	 **/
	private $hid;
	
	/** 
	 * 酒店设施。json格式示例值：{"free Wi-Fi in all rooms":"true","massage":"true","meetingRoom":"true"}目前支持维护的设施枚举有：free Wi-Fi in all rooms 所有房间设有免费无线网络;meetingRoom 会议室;massage  按摩室;fitnessClub 健身房;bar 酒吧;cafe 咖啡厅;frontDeskSafe 前台贵重物品保险柜wifi 无线上网公共区域;casino 娱乐场/棋牌室;restaurant 餐厅;smoking area 吸烟区;Business Facilities 商务设施
	 **/
	private $hotelFacilities;
	
	/** 
	 * 酒店入住政策(针对国际酒店，儿童及加床信息)格式：{"children_age_from":"2","children_age_to":"3","children_stay_free":"True","infant_age":"1","min_guest_age":"4"}
	 **/
	private $hotelPolicies;
	
	/** 
	 * 0:酒店；1:客栈
	 **/
	private $hotelType;
	
	/** 
	 * 纬度
	 **/
	private $latitude;
	
	/** 
	 * 经度
	 **/
	private $longitude;
	
	/** 
	 * 酒店名称；（新增酒店时为必须）,国内酒店请传中文名称
	 **/
	private $name;
	
	/** 
	 * 卖家酒店英文名称
	 **/
	private $nameE;
	
	/** 
	 * 开业时间，格式为2015-01-01
	 **/
	private $openingTime;
	
	/** 
	 * 扩展信息的JSON。 orbitTrack 业务字段是指从飞猪到酒店说经过平台名以及方式的一个数组，按顺序，从飞猪，再经过若干平台，最后到酒店， platform是指定当前平台名，ways 是指通过哪种方式到该平台 其中，飞猪到下一个平台里, ways 字段只能是【直连】、【人工】两个方式之一； 从最后一个平台到酒店的ways字段只能是【电话】、【传真】、【人工】、【系统】之一； 第一个 飞猪平台 和 最后具体酒店是至少得填的
	 **/
	private $orbitTrack;
	
	/** 
	 * 必传，酒店标识，商家酒店ID
	 **/
	private $outerId;
	
	/** 
	 * 酒店图片只支持远程图片，格式如下：[{"url":"http://123.jpg","ismain":"false","type":"大堂","attribute":"普通图"},{"url":"http://456.jpg","ismain":"true","type":"公共区域","attribute":"全景图"},{"url":"http://789.jpg","ismain":"false","type":"大堂","attribute":"普通图"}] 其中url是远程图片的访问地址，main是否为主图（主图只能有一个）,attribute表示图片属性，取值范围只能是：[普通图, 平面图, 全景图] ,type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 其他, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂]，图片数量最多10张。要求：无logo、水印、边框、人物，不模糊、重复、歪斜，房间图清晰，图片尺寸不小于300*225，不小于5M
	 **/
	private $pics;
	
	/** 
	 * 坐标类型，现在支持：G – GoogleB – 百度A – 高德M – MapbarL – 灵图
	 **/
	private $positionType;
	
	/** 
	 * 邮编
	 **/
	private $postalCode;
	
	/** 
	 * 省份编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3，domestic为false时默认为0
	 **/
	private $province;
	
	/** 
	 * 房间的基础设施。json格式示例值：{"bathtub":"true","bathPub":"true"}目前支持维护的设施枚举有：bathtub 独立卫浴;bathPub 公共卫浴
	 **/
	private $roomFacilities;
	
	/** 
	 * 房间数 0~9999之内的数字
	 **/
	private $rooms;
	
	/** 
	 * 酒店基础服务。json格式示例值：{"receiveForeignGuests":"true","morningCall":"true","breakfast":"true"}目前支持维护的设施枚举有：receiveForeignGuests 接待外宾;morningCall 叫醒服务; breakfast  早餐服务; airportShuttle 接机服务; luggageClaim 行李寄存; rentCar 租车; HourRoomService24 24小时客房服务; airportTransfer 酒店/机场接送; dryCleaning 干洗; expressCheckInCheckOut 快速入住/退房登记; custodyServices 保管服务
	 **/
	private $service;
	
	/** 
	 * 0:可以接待外宾；1:仅内宾
	 **/
	private $serviceType;
	
	/** 
	 * 结算流程中的结算币种，如需对接请联系飞猪技术支持，请谨慎使用
	 **/
	private $settlementCurrency;
	
	/** 
	 * 该字段只有确定的时候，才允许填入。用于标示和淘宝酒店的匹配关系。目前尚未启动该字段。
	 **/
	private $shid;
	
	/** 
	 * （新模型）资源方娱乐设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
	 **/
	private $standardAmuseFacilities;
	
	/** 
	 * （新模型）资源方酒店预订须知,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
	 **/
	private $standardBookingNotice;
	
	/** 
	 * （新模型）资源方酒店设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
	 **/
	private $standardHotelFacilities;
	
	/** 
	 * （新模型）资源方酒店服务,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
	 **/
	private $standardHotelService;
	
	/** 
	 * 已废弃(房型设施信息请在房型上推送)
	 **/
	private $standardRoomFacilities;
	
	/** 
	 * 酒店档次，星级。取值范围为1,1.5,2,2.5,3,3.5,4,4.5,5
	 **/
	private $star;
	
	/** 
	 * 酒店状态 0:正常，-1:下架，-2:停售
	 **/
	private $status;
	
	/** 
	 * 供应商标识，如果确实需要修改原来的供应商标识才需要填写，否则不需要填写，请谨慎使用。
	 **/
	private $supplier;
	
	/** 
	 * 打标去标使用的 tagJson 字段
	 **/
	private $tagJson;
	
	/** 
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;
	
	/** 
	 * 酒店曾用名
	 **/
	private $usedName;
	
	/** 
	 * 系统商，一般情况不用，需申请使用
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddressEn($addressEn)
	{
		$this->addressEn = $addressEn;
		$this->apiParas["address_en"] = $addressEn;
	}

	public function getAddressEn()
	{
		return $this->addressEn;
	}

	public function setAliNick($aliNick)
	{
		$this->aliNick = $aliNick;
		$this->apiParas["ali_nick"] = $aliNick;
	}

	public function getAliNick()
	{
		return $this->aliNick;
	}

	public function setBookingNotice($bookingNotice)
	{
		$this->bookingNotice = $bookingNotice;
		$this->apiParas["booking_notice"] = $bookingNotice;
	}

	public function getBookingNotice()
	{
		return $this->bookingNotice;
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

	public function setBusiness($business)
	{
		$this->business = $business;
		$this->apiParas["business"] = $business;
	}

	public function getBusiness()
	{
		return $this->business;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCoordinateSystem($coordinateSystem)
	{
		$this->coordinateSystem = $coordinateSystem;
		$this->apiParas["coordinate_system"] = $coordinateSystem;
	}

	public function getCoordinateSystem()
	{
		return $this->coordinateSystem;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setCreditCardTypes($creditCardTypes)
	{
		$this->creditCardTypes = $creditCardTypes;
		$this->apiParas["credit_card_types"] = $creditCardTypes;
	}

	public function getCreditCardTypes()
	{
		return $this->creditCardTypes;
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

	public function setDescriptionEn($descriptionEn)
	{
		$this->descriptionEn = $descriptionEn;
		$this->apiParas["description_en"] = $descriptionEn;
	}

	public function getDescriptionEn()
	{
		return $this->descriptionEn;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDomestic($domestic)
	{
		$this->domestic = $domestic;
		$this->apiParas["domestic"] = $domestic;
	}

	public function getDomestic()
	{
		return $this->domestic;
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

	public function setFloors($floors)
	{
		$this->floors = $floors;
		$this->apiParas["floors"] = $floors;
	}

	public function getFloors()
	{
		return $this->floors;
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

	public function setHotelFacilities($hotelFacilities)
	{
		$this->hotelFacilities = $hotelFacilities;
		$this->apiParas["hotel_facilities"] = $hotelFacilities;
	}

	public function getHotelFacilities()
	{
		return $this->hotelFacilities;
	}

	public function setHotelPolicies($hotelPolicies)
	{
		$this->hotelPolicies = $hotelPolicies;
		$this->apiParas["hotel_policies"] = $hotelPolicies;
	}

	public function getHotelPolicies()
	{
		return $this->hotelPolicies;
	}

	public function setHotelType($hotelType)
	{
		$this->hotelType = $hotelType;
		$this->apiParas["hotel_type"] = $hotelType;
	}

	public function getHotelType()
	{
		return $this->hotelType;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
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

	public function setOrbitTrack($orbitTrack)
	{
		$this->orbitTrack = $orbitTrack;
		$this->apiParas["orbit_track"] = $orbitTrack;
	}

	public function getOrbitTrack()
	{
		return $this->orbitTrack;
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

	public function setPositionType($positionType)
	{
		$this->positionType = $positionType;
		$this->apiParas["position_type"] = $positionType;
	}

	public function getPositionType()
	{
		return $this->positionType;
	}

	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
		$this->apiParas["postal_code"] = $postalCode;
	}

	public function getPostalCode()
	{
		return $this->postalCode;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRoomFacilities($roomFacilities)
	{
		$this->roomFacilities = $roomFacilities;
		$this->apiParas["room_facilities"] = $roomFacilities;
	}

	public function getRoomFacilities()
	{
		return $this->roomFacilities;
	}

	public function setRooms($rooms)
	{
		$this->rooms = $rooms;
		$this->apiParas["rooms"] = $rooms;
	}

	public function getRooms()
	{
		return $this->rooms;
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

	public function setServiceType($serviceType)
	{
		$this->serviceType = $serviceType;
		$this->apiParas["service_type"] = $serviceType;
	}

	public function getServiceType()
	{
		return $this->serviceType;
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

	public function setStandardAmuseFacilities($standardAmuseFacilities)
	{
		$this->standardAmuseFacilities = $standardAmuseFacilities;
		$this->apiParas["standard_amuse_facilities"] = $standardAmuseFacilities;
	}

	public function getStandardAmuseFacilities()
	{
		return $this->standardAmuseFacilities;
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

	public function setStandardRoomFacilities($standardRoomFacilities)
	{
		$this->standardRoomFacilities = $standardRoomFacilities;
		$this->apiParas["standard_room_facilities"] = $standardRoomFacilities;
	}

	public function getStandardRoomFacilities()
	{
		return $this->standardRoomFacilities;
	}

	public function setStar($star)
	{
		$this->star = $star;
		$this->apiParas["star"] = $star;
	}

	public function getStar()
	{
		return $this->star;
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

	public function setSupplier($supplier)
	{
		$this->supplier = $supplier;
		$this->apiParas["supplier"] = $supplier;
	}

	public function getSupplier()
	{
		return $this->supplier;
	}

	public function setTagJson($tagJson)
	{
		$this->tagJson = $tagJson;
		$this->apiParas["tag_json"] = $tagJson;
	}

	public function getTagJson()
	{
		return $this->tagJson;
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

	public function setUsedName($usedName)
	{
		$this->usedName = $usedName;
		$this->apiParas["used_name"] = $usedName;
	}

	public function getUsedName()
	{
		return $this->usedName;
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkMaxLength($this->address,255,"address");
		RequestCheckUtil::checkMaxLength($this->bookingNotice,2000,"bookingNotice");
		RequestCheckUtil::checkMaxLength($this->business,20,"business");
		RequestCheckUtil::checkMaxLength($this->country,30,"country");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->latitude,10,"latitude");
		RequestCheckUtil::checkMaxLength($this->longitude,10,"longitude");
		RequestCheckUtil::checkMaxLength($this->name,128,"name");
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
		RequestCheckUtil::checkMaxLength($this->postalCode,20,"postalCode");
		RequestCheckUtil::checkMaxLength($this->star,3,"star");
		RequestCheckUtil::checkNotNull($this->tel,"tel");
		RequestCheckUtil::checkMaxLength($this->tel,30,"tel");
		RequestCheckUtil::checkMaxLength($this->usedName,60,"usedName");
		RequestCheckUtil::checkMaxLength($this->vendor,64,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

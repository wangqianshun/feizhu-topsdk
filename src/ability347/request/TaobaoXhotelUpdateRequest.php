<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelUpdateRequest {

    /**
        （已废弃）请使用outer_id来标识要修改的酒店
     **/
    private $hid;

    /**
        酒店名称；（新增酒店时为必须）,国内酒店请传中文名称
     **/
    private $name;

    /**
        酒店曾用名
     **/
    private $usedName;

    /**
        是否国内酒店。0:国内;1:国外；注意，domestic=0代表国内酒店，必须传入城市；domestic=1代表国际酒店，可以不传入城市，但必须传入经纬度，否则推送失败。
     **/
    private $domestic;

    /**
        domestic为true时，固定China； domestic为false时，必须传定义的海外国家编码值。参见：http://kezhan.trip.taobao.com/countrys.html
     **/
    private $country;

    /**
        省份编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3，domestic为false时默认为0
     **/
    private $province;

    /**
        城市编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（新增酒店时为必须）当domestic为0时，该字段为必填项，当domestic为1时，该字段可不填；而当domestic=1时，经纬度必须传给我们，否则推送会失败。
     **/
    private $city;

    /**
        区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm?tbpm=3
     **/
    private $district;

    /**
        商业区（圈）长度不超过20字
     **/
    private $business;

    /**
        酒店地址。长度不能超过255
     **/
    private $address;

    /**
        经度
     **/
    private $longitude;

    /**
        纬度
     **/
    private $latitude;

    /**
        坐标类型，现在支持：G – GoogleB – 百度A – 高德M – MapbarL – 灵图
     **/
    private $positionType;

    /**
        酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
     **/
    private $tel;

    /**
        不要使用
     **/
    private $extend;

    /**
        必传，酒店标识，商家酒店ID
     **/
    private $outerId;

    /**
        系统商，一般情况不用，需申请使用
     **/
    private $vendor;

    /**
        该字段只有确定的时候，才允许填入。用于标示和淘宝酒店的匹配关系。目前尚未启动该字段。
     **/
    private $shid;

    /**
        酒店档次，星级。取值范围为1,1.5,2,2.5,3,3.5,4,4.5,5
     **/
    private $star;

    /**
        开业时间，格式为2015-01-01
     **/
    private $openingTime;

    /**
        装修时间，格式为2015-10-01
     **/
    private $decorateTime;

    /**
        楼层信息
     **/
    private $floors;

    /**
        房间数 0~9999之内的数字
     **/
    private $rooms;

    /**
        酒店描述
     **/
    private $description;

    /**
        酒店设施。json格式示例值：{"free Wi-Fi in all rooms":"true","massage":"true","meetingRoom":"true"}目前支持维护的设施枚举有：free Wi-Fi in all rooms 所有房间设有免费无线网络;meetingRoom 会议室;massage  按摩室;fitnessClub 健身房;bar 酒吧;cafe 咖啡厅;frontDeskSafe 前台贵重物品保险柜wifi 无线上网公共区域;casino 娱乐场/棋牌室;restaurant 餐厅;smoking area 吸烟区;Business Facilities 商务设施
     **/
    private $hotelFacilities;

    /**
        酒店基础服务。json格式示例值：{"receiveForeignGuests":"true","morningCall":"true","breakfast":"true"}目前支持维护的设施枚举有：receiveForeignGuests 接待外宾;morningCall 叫醒服务; breakfast  早餐服务; airportShuttle 接机服务; luggageClaim 行李寄存; rentCar 租车; HourRoomService24 24小时客房服务; airportTransfer 酒店/机场接送; dryCleaning 干洗; expressCheckInCheckOut 快速入住/退房登记; custodyServices 保管服务
     **/
    private $service;

    /**
        房间的基础设施。json格式示例值：{"bathtub":"true","bathPub":"true"}目前支持维护的设施枚举有：bathtub 独立卫浴;bathPub 公共卫浴
     **/
    private $roomFacilities;

    /**
        酒店图片只支持远程图片，格式如下：[{"url":"http://123.jpg","ismain":"false","type":"大堂","attribute":"普通图"},{"url":"http://456.jpg","ismain":"true","type":"公共区域","attribute":"全景图"},{"url":"http://789.jpg","ismain":"false","type":"大堂","attribute":"普通图"}] 其中url是远程图片的访问地址，main是否为主图（主图只能有一个）,attribute表示图片属性，取值范围只能是：[普通图, 平面图, 全景图] ,type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 其他, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂]，图片数量最多10张。要求：无logo、水印、边框、人物，不模糊、重复、歪斜，房间图清晰，图片尺寸不小于300*225，不小于5M
     **/
    private $pics;

    /**
        酒店品牌。取值为数字。枚举见链接：https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.S16vXH&docType=1&articleId=120180
     **/
    private $brand;

    /**
        邮编
     **/
    private $postalCode;

    /**
        酒店入住政策(针对国际酒店，儿童及加床信息)格式：{"children_age_from":"2","children_age_to":"3","children_stay_free":"True","infant_age":"1","min_guest_age":"4"}
     **/
    private $hotelPolicies;

    /**
        预订须知。json字段描述：hotelInMountaintop 酒店位于山顶 1在山顶、0不在；needBoat 酒店需要坐船前往 1需要、0不需要；酒店位于景区内 1在景区、0不在；extraBed 加床收费；extraCharge 额外收费；arrivalTime 到店时间；extend 其他补充项
     **/
    private $bookingNotice;

    /**
        酒店状态 0:正常，-1:下架，-2:停售
     **/
    private $status;

    /**
        逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
     **/
    private $creditCardTypes;

    /**
        扩展信息的JSON。 orbitTrack 业务字段是指从飞猪到酒店说经过平台名以及方式的一个数组，按顺序，从飞猪，再经过若干平台，最后到酒店， platform是指定当前平台名，ways 是指通过哪种方式到该平台 其中，飞猪到下一个平台里, ways 字段只能是【直连】、【人工】两个方式之一； 从最后一个平台到酒店的ways字段只能是【电话】、【传真】、【人工】、【系统】之一； 第一个 飞猪平台 和 最后具体酒店是至少得填的
     **/
    private $orbitTrack;

    /**
        卖家酒店英文名称
     **/
    private $nameE;

    /**
        打标去标使用的 tagJson 字段
     **/
    private $tagJson;

    /**
        旺旺昵称
     **/
    private $aliNick;

    /**
        供应商标识，如果确实需要修改原来的供应商标识才需要填写，否则不需要填写，请谨慎使用。
     **/
    private $supplier;

    /**
        结算流程中的结算币种，如需对接请联系飞猪技术支持，请谨慎使用
     **/
    private $settlementCurrency;

    /**
        （新模型）资源方酒店预订须知,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardBookingNotice;

    /**
        （新模型）资源方酒店设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardHotelFacilities;

    /**
        （新模型）资源方酒店服务,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardHotelService;

    /**
        已废弃(房型设施信息请在房型上推送)
     **/
    private $standardRoomFacilities;

    /**
        （新模型）资源方娱乐设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardAmuseFacilities;

    /**
        0:酒店；1:客栈
     **/
    private $hotelType;

    /**
        0:可以接待外宾；1:仅内宾
     **/
    private $serviceType;

    /**
        标识坐标系类型。WGS84，表示地球坐标系 ；GCJ02，表示火星坐标系
     **/
    private $coordinateSystem;

    /**
        酒店英文地址
     **/
    private $addressEn;

    /**
        酒店英文描述
     **/
    private $descriptionEn;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getUsedName() : string{
        return $this->usedName;
    }

    public function setUsedName(string $usedName){
        $this->usedName = $usedName;
    }

    public function getDomestic() : int{
        return $this->domestic;
    }

    public function setDomestic(int $domestic){
        $this->domestic = $domestic;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getDistrict() : int{
        return $this->district;
    }

    public function setDistrict(int $district){
        $this->district = $district;
    }

    public function getBusiness() : string{
        return $this->business;
    }

    public function setBusiness(string $business){
        $this->business = $business;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getPositionType() : string{
        return $this->positionType;
    }

    public function setPositionType(string $positionType){
        $this->positionType = $positionType;
    }

    public function getTel() : string{
        return $this->tel;
    }

    public function setTel(string $tel){
        $this->tel = $tel;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getStar() : string{
        return $this->star;
    }

    public function setStar(string $star){
        $this->star = $star;
    }

    public function getOpeningTime() : string{
        return $this->openingTime;
    }

    public function setOpeningTime(string $openingTime){
        $this->openingTime = $openingTime;
    }

    public function getDecorateTime() : string{
        return $this->decorateTime;
    }

    public function setDecorateTime(string $decorateTime){
        $this->decorateTime = $decorateTime;
    }

    public function getFloors() : string{
        return $this->floors;
    }

    public function setFloors(string $floors){
        $this->floors = $floors;
    }

    public function getRooms() : int{
        return $this->rooms;
    }

    public function setRooms(int $rooms){
        $this->rooms = $rooms;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getHotelFacilities() : string{
        return $this->hotelFacilities;
    }

    public function setHotelFacilities(string $hotelFacilities){
        $this->hotelFacilities = $hotelFacilities;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getRoomFacilities() : string{
        return $this->roomFacilities;
    }

    public function setRoomFacilities(string $roomFacilities){
        $this->roomFacilities = $roomFacilities;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getBrand() : string{
        return $this->brand;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getPostalCode() : string{
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode){
        $this->postalCode = $postalCode;
    }

    public function getHotelPolicies() : string{
        return $this->hotelPolicies;
    }

    public function setHotelPolicies(string $hotelPolicies){
        $this->hotelPolicies = $hotelPolicies;
    }

    public function getBookingNotice() : string{
        return $this->bookingNotice;
    }

    public function setBookingNotice(string $bookingNotice){
        $this->bookingNotice = $bookingNotice;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getCreditCardTypes() : string{
        return $this->creditCardTypes;
    }

    public function setCreditCardTypes(string $creditCardTypes){
        $this->creditCardTypes = $creditCardTypes;
    }

    public function getOrbitTrack() : string{
        return $this->orbitTrack;
    }

    public function setOrbitTrack(string $orbitTrack){
        $this->orbitTrack = $orbitTrack;
    }

    public function getNameE() : string{
        return $this->nameE;
    }

    public function setNameE(string $nameE){
        $this->nameE = $nameE;
    }

    public function getTagJson() : string{
        return $this->tagJson;
    }

    public function setTagJson(string $tagJson){
        $this->tagJson = $tagJson;
    }

    public function getAliNick() : string{
        return $this->aliNick;
    }

    public function setAliNick(string $aliNick){
        $this->aliNick = $aliNick;
    }

    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }

    public function getSettlementCurrency() : string{
        return $this->settlementCurrency;
    }

    public function setSettlementCurrency(string $settlementCurrency){
        $this->settlementCurrency = $settlementCurrency;
    }

    public function getStandardBookingNotice() : string{
        return $this->standardBookingNotice;
    }

    public function setStandardBookingNotice(string $standardBookingNotice){
        $this->standardBookingNotice = $standardBookingNotice;
    }

    public function getStandardHotelFacilities() : string{
        return $this->standardHotelFacilities;
    }

    public function setStandardHotelFacilities(string $standardHotelFacilities){
        $this->standardHotelFacilities = $standardHotelFacilities;
    }

    public function getStandardHotelService() : string{
        return $this->standardHotelService;
    }

    public function setStandardHotelService(string $standardHotelService){
        $this->standardHotelService = $standardHotelService;
    }

    public function getStandardRoomFacilities() : string{
        return $this->standardRoomFacilities;
    }

    public function setStandardRoomFacilities(string $standardRoomFacilities){
        $this->standardRoomFacilities = $standardRoomFacilities;
    }

    public function getStandardAmuseFacilities() : string{
        return $this->standardAmuseFacilities;
    }

    public function setStandardAmuseFacilities(string $standardAmuseFacilities){
        $this->standardAmuseFacilities = $standardAmuseFacilities;
    }

    public function getHotelType() : int{
        return $this->hotelType;
    }

    public function setHotelType(int $hotelType){
        $this->hotelType = $hotelType;
    }

    public function getServiceType() : int{
        return $this->serviceType;
    }

    public function setServiceType(int $serviceType){
        $this->serviceType = $serviceType;
    }

    public function getCoordinateSystem() : string{
        return $this->coordinateSystem;
    }

    public function setCoordinateSystem(string $coordinateSystem){
        $this->coordinateSystem = $coordinateSystem;
    }

    public function getAddressEn() : string{
        return $this->addressEn;
    }

    public function setAddressEn(string $addressEn){
        $this->addressEn = $addressEn;
    }

    public function getDescriptionEn() : string{
        return $this->descriptionEn;
    }

    public function setDescriptionEn(string $descriptionEn){
        $this->descriptionEn = $descriptionEn;
    }


    public function getApiName() : string {
        return "taobao.xhotel.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->usedName)) {
            $requestParam["used_name"] = TopUtil::convertBasic($this->usedName);
        }

        if (!TopUtil::checkEmpty($this->domestic)) {
            $requestParam["domestic"] = TopUtil::convertBasic($this->domestic);
        }

        if (!TopUtil::checkEmpty($this->country)) {
            $requestParam["country"] = TopUtil::convertBasic($this->country);
        }

        if (!TopUtil::checkEmpty($this->province)) {
            $requestParam["province"] = TopUtil::convertBasic($this->province);
        }

        if (!TopUtil::checkEmpty($this->city)) {
            $requestParam["city"] = TopUtil::convertBasic($this->city);
        }

        if (!TopUtil::checkEmpty($this->district)) {
            $requestParam["district"] = TopUtil::convertBasic($this->district);
        }

        if (!TopUtil::checkEmpty($this->business)) {
            $requestParam["business"] = TopUtil::convertBasic($this->business);
        }

        if (!TopUtil::checkEmpty($this->address)) {
            $requestParam["address"] = TopUtil::convertBasic($this->address);
        }

        if (!TopUtil::checkEmpty($this->longitude)) {
            $requestParam["longitude"] = TopUtil::convertBasic($this->longitude);
        }

        if (!TopUtil::checkEmpty($this->latitude)) {
            $requestParam["latitude"] = TopUtil::convertBasic($this->latitude);
        }

        if (!TopUtil::checkEmpty($this->positionType)) {
            $requestParam["position_type"] = TopUtil::convertBasic($this->positionType);
        }

        if (!TopUtil::checkEmpty($this->tel)) {
            $requestParam["tel"] = TopUtil::convertBasic($this->tel);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->shid)) {
            $requestParam["shid"] = TopUtil::convertBasic($this->shid);
        }

        if (!TopUtil::checkEmpty($this->star)) {
            $requestParam["star"] = TopUtil::convertBasic($this->star);
        }

        if (!TopUtil::checkEmpty($this->openingTime)) {
            $requestParam["opening_time"] = TopUtil::convertBasic($this->openingTime);
        }

        if (!TopUtil::checkEmpty($this->decorateTime)) {
            $requestParam["decorate_time"] = TopUtil::convertBasic($this->decorateTime);
        }

        if (!TopUtil::checkEmpty($this->floors)) {
            $requestParam["floors"] = TopUtil::convertBasic($this->floors);
        }

        if (!TopUtil::checkEmpty($this->rooms)) {
            $requestParam["rooms"] = TopUtil::convertBasic($this->rooms);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        if (!TopUtil::checkEmpty($this->hotelFacilities)) {
            $requestParam["hotel_facilities"] = TopUtil::convertBasic($this->hotelFacilities);
        }

        if (!TopUtil::checkEmpty($this->service)) {
            $requestParam["service"] = TopUtil::convertBasic($this->service);
        }

        if (!TopUtil::checkEmpty($this->roomFacilities)) {
            $requestParam["room_facilities"] = TopUtil::convertBasic($this->roomFacilities);
        }

        if (!TopUtil::checkEmpty($this->pics)) {
            $requestParam["pics"] = TopUtil::convertBasic($this->pics);
        }

        if (!TopUtil::checkEmpty($this->brand)) {
            $requestParam["brand"] = TopUtil::convertBasic($this->brand);
        }

        if (!TopUtil::checkEmpty($this->postalCode)) {
            $requestParam["postal_code"] = TopUtil::convertBasic($this->postalCode);
        }

        if (!TopUtil::checkEmpty($this->hotelPolicies)) {
            $requestParam["hotel_policies"] = TopUtil::convertBasic($this->hotelPolicies);
        }

        if (!TopUtil::checkEmpty($this->bookingNotice)) {
            $requestParam["booking_notice"] = TopUtil::convertBasic($this->bookingNotice);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->creditCardTypes)) {
            $requestParam["credit_card_types"] = TopUtil::convertBasic($this->creditCardTypes);
        }

        if (!TopUtil::checkEmpty($this->orbitTrack)) {
            $requestParam["orbit_track"] = TopUtil::convertBasic($this->orbitTrack);
        }

        if (!TopUtil::checkEmpty($this->nameE)) {
            $requestParam["name_e"] = TopUtil::convertBasic($this->nameE);
        }

        if (!TopUtil::checkEmpty($this->tagJson)) {
            $requestParam["tag_json"] = TopUtil::convertBasic($this->tagJson);
        }

        if (!TopUtil::checkEmpty($this->aliNick)) {
            $requestParam["ali_nick"] = TopUtil::convertBasic($this->aliNick);
        }

        if (!TopUtil::checkEmpty($this->supplier)) {
            $requestParam["supplier"] = TopUtil::convertBasic($this->supplier);
        }

        if (!TopUtil::checkEmpty($this->settlementCurrency)) {
            $requestParam["settlement_currency"] = TopUtil::convertBasic($this->settlementCurrency);
        }

        if (!TopUtil::checkEmpty($this->standardBookingNotice)) {
            $requestParam["standard_booking_notice"] = TopUtil::convertBasic($this->standardBookingNotice);
        }

        if (!TopUtil::checkEmpty($this->standardHotelFacilities)) {
            $requestParam["standard_hotel_facilities"] = TopUtil::convertBasic($this->standardHotelFacilities);
        }

        if (!TopUtil::checkEmpty($this->standardHotelService)) {
            $requestParam["standard_hotel_service"] = TopUtil::convertBasic($this->standardHotelService);
        }

        if (!TopUtil::checkEmpty($this->standardRoomFacilities)) {
            $requestParam["standard_room_facilities"] = TopUtil::convertBasic($this->standardRoomFacilities);
        }

        if (!TopUtil::checkEmpty($this->standardAmuseFacilities)) {
            $requestParam["standard_amuse_facilities"] = TopUtil::convertBasic($this->standardAmuseFacilities);
        }

        if (!TopUtil::checkEmpty($this->hotelType)) {
            $requestParam["hotel_type"] = TopUtil::convertBasic($this->hotelType);
        }

        if (!TopUtil::checkEmpty($this->serviceType)) {
            $requestParam["service_type"] = TopUtil::convertBasic($this->serviceType);
        }

        if (!TopUtil::checkEmpty($this->coordinateSystem)) {
            $requestParam["coordinate_system"] = TopUtil::convertBasic($this->coordinateSystem);
        }

        if (!TopUtil::checkEmpty($this->addressEn)) {
            $requestParam["address_en"] = TopUtil::convertBasic($this->addressEn);
        }

        if (!TopUtil::checkEmpty($this->descriptionEn)) {
            $requestParam["description_en"] = TopUtil::convertBasic($this->descriptionEn);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


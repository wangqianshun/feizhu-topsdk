<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelAddRequest {

    /**
        外部酒店ID, 这是卖家自己系统中的ID
     **/
    private $outerId;

    /**
        酒店名称,国内酒店请传中文名称
     **/
    private $name;

    /**
        酒店曾用名
     **/
    private $usedName;

    /**
        是否国内酒店。0:国内;1:国外。默认是国内
     **/
    private $domestic;

    /**
        domestic为0时，固定China； domestic为1时，必须传定义的海外国家编码值。参见：http://hotel.alitrip.com/area.htm
     **/
    private $country;

    /**
        省份编码。选填，不填入的时候已city字段为准.参见：http://hotel.alitrip.com/area.htm，domestic为false时默认为0
     **/
    private $province;

    /**
        城市编码。参见：http://hotel.alitrip.com/area.htm，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（更新酒店时为可选）
     **/
    private $city;

    /**
        区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm
     **/
    private $district;

    /**
        商业区（圈）长度不超过20字
     **/
    private $business;

    /**
        酒店地址。长度不能超过255。不填入会导致不能自动匹配。
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
        扩展信息的JSON。注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
     **/
    private $extend;

    /**
        该字段只有确定的时候，才允许填入。用于标示和淘宝酒店的匹配关系。目前尚未启动该字段。
     **/
    private $shid;

    /**
        对接系统商名称：可为空不要乱填，需要申请后使用
     **/
    private $vendor;

    /**
        酒店档次，星级。取值范围为1,1.5,2,2.5,3,3.5,4,4.5,5
     **/
    private $star;

    /**
        开业时间，格式为2015-01-01
     **/
    private $openingTime;

    /**
        装修时间，格式为2015-01-01装修时间
     **/
    private $decorateTime;

    /**
        楼层信息。
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
        酒店图片只支持远程图片，格式如下：[{"url":"http://123.jpg","ismain":"false","type":"大堂","attribute":"普通图"},{"url":"http://456.jpg","ismain":"true","type":"公共区域","attribute":"全景图"},{"url":"http://789.jpg","ismain":"false","type":"大堂","attribute":"普通图"}] 其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图（主图只能有一个，如果有多个或者没有，则会报错）,attribute表示图片属性，取值范围只能是：[普通图, 平面图, 全景图] ,type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 其他,餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂]，图片数量最多是能是10张。
     **/
    private $pics;

    /**
        酒店品牌。取值为数字。枚举见链接：https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.S16vXH&docType=1&articleId=120180
     **/
    private $brand;

    /**
        邮政编码。
     **/
    private $postalCode;

    /**
        预订须知。json字段描述：hotelInMountaintop 酒店位于山顶 1在山顶、0不在；needBoat 酒店需要坐船前往 1需要、0不需要；酒店位于景区内 1在景区、0不在；extraBed 加床收费；extraCharge 额外收费；arrivalTime 到店时间；extend 其他补充项
     **/
    private $bookingNotice;

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
        供应商标识，需要提前开通权限，如果需要对接请联系技术支持，请谨慎使用。注：如商家申请的应用类型为“飞猪-新业务”，此项则必填。
     **/
    private $supplier;

    /**
        结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
     **/
    private $settlementCurrency;

    /**
        标准娱乐设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardAmuseFacilities;

    /**
        已废弃(房型设施信息请在房型上推送)
     **/
    private $standardRoomFacilities;

    /**
        标准酒店服务,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardHotelService;

    /**
        标准酒店设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardHotelFacilities;

    /**
        标准预订须知,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardBookingNotice;

    /**
        0:可以接待外宾；1:仅内宾
     **/
    private $serviceType;

    /**
        0:酒店；1:客栈
     **/
    private $hotelType;

    /**
        标识坐标系类型。WGS84，表示地球坐标系 ；GCJ02，表示火星坐标系
     **/
    private $coordinateSystem;

    /**
        废弃
     **/
    private $roomFacilities;

    /**
        废弃
     **/
    private $service;

    /**
        废弃
     **/
    private $hotelFacilities;

    /**
        废弃
     **/
    private $hotelPolicies;


    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
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

    public function getShid() : int{
        return $this->shid;
    }

    public function setShid(int $shid){
        $this->shid = $shid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
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

    public function getBookingNotice() : string{
        return $this->bookingNotice;
    }

    public function setBookingNotice(string $bookingNotice){
        $this->bookingNotice = $bookingNotice;
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

    public function getStandardAmuseFacilities() : string{
        return $this->standardAmuseFacilities;
    }

    public function setStandardAmuseFacilities(string $standardAmuseFacilities){
        $this->standardAmuseFacilities = $standardAmuseFacilities;
    }

    public function getStandardRoomFacilities() : string{
        return $this->standardRoomFacilities;
    }

    public function setStandardRoomFacilities(string $standardRoomFacilities){
        $this->standardRoomFacilities = $standardRoomFacilities;
    }

    public function getStandardHotelService() : string{
        return $this->standardHotelService;
    }

    public function setStandardHotelService(string $standardHotelService){
        $this->standardHotelService = $standardHotelService;
    }

    public function getStandardHotelFacilities() : string{
        return $this->standardHotelFacilities;
    }

    public function setStandardHotelFacilities(string $standardHotelFacilities){
        $this->standardHotelFacilities = $standardHotelFacilities;
    }

    public function getStandardBookingNotice() : string{
        return $this->standardBookingNotice;
    }

    public function setStandardBookingNotice(string $standardBookingNotice){
        $this->standardBookingNotice = $standardBookingNotice;
    }

    public function getServiceType() : int{
        return $this->serviceType;
    }

    public function setServiceType(int $serviceType){
        $this->serviceType = $serviceType;
    }

    public function getHotelType() : int{
        return $this->hotelType;
    }

    public function setHotelType(int $hotelType){
        $this->hotelType = $hotelType;
    }

    public function getCoordinateSystem() : string{
        return $this->coordinateSystem;
    }

    public function setCoordinateSystem(string $coordinateSystem){
        $this->coordinateSystem = $coordinateSystem;
    }

    public function getRoomFacilities() : string{
        return $this->roomFacilities;
    }

    public function setRoomFacilities(string $roomFacilities){
        $this->roomFacilities = $roomFacilities;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getHotelFacilities() : string{
        return $this->hotelFacilities;
    }

    public function setHotelFacilities(string $hotelFacilities){
        $this->hotelFacilities = $hotelFacilities;
    }

    public function getHotelPolicies() : string{
        return $this->hotelPolicies;
    }

    public function setHotelPolicies(string $hotelPolicies){
        $this->hotelPolicies = $hotelPolicies;
    }


    public function getApiName() : string {
        return "taobao.xhotel.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
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

        if (!TopUtil::checkEmpty($this->shid)) {
            $requestParam["shid"] = TopUtil::convertBasic($this->shid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
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

        if (!TopUtil::checkEmpty($this->pics)) {
            $requestParam["pics"] = TopUtil::convertBasic($this->pics);
        }

        if (!TopUtil::checkEmpty($this->brand)) {
            $requestParam["brand"] = TopUtil::convertBasic($this->brand);
        }

        if (!TopUtil::checkEmpty($this->postalCode)) {
            $requestParam["postal_code"] = TopUtil::convertBasic($this->postalCode);
        }

        if (!TopUtil::checkEmpty($this->bookingNotice)) {
            $requestParam["booking_notice"] = TopUtil::convertBasic($this->bookingNotice);
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

        if (!TopUtil::checkEmpty($this->supplier)) {
            $requestParam["supplier"] = TopUtil::convertBasic($this->supplier);
        }

        if (!TopUtil::checkEmpty($this->settlementCurrency)) {
            $requestParam["settlement_currency"] = TopUtil::convertBasic($this->settlementCurrency);
        }

        if (!TopUtil::checkEmpty($this->standardAmuseFacilities)) {
            $requestParam["standard_amuse_facilities"] = TopUtil::convertBasic($this->standardAmuseFacilities);
        }

        if (!TopUtil::checkEmpty($this->standardRoomFacilities)) {
            $requestParam["standard_room_facilities"] = TopUtil::convertBasic($this->standardRoomFacilities);
        }

        if (!TopUtil::checkEmpty($this->standardHotelService)) {
            $requestParam["standard_hotel_service"] = TopUtil::convertBasic($this->standardHotelService);
        }

        if (!TopUtil::checkEmpty($this->standardHotelFacilities)) {
            $requestParam["standard_hotel_facilities"] = TopUtil::convertBasic($this->standardHotelFacilities);
        }

        if (!TopUtil::checkEmpty($this->standardBookingNotice)) {
            $requestParam["standard_booking_notice"] = TopUtil::convertBasic($this->standardBookingNotice);
        }

        if (!TopUtil::checkEmpty($this->serviceType)) {
            $requestParam["service_type"] = TopUtil::convertBasic($this->serviceType);
        }

        if (!TopUtil::checkEmpty($this->hotelType)) {
            $requestParam["hotel_type"] = TopUtil::convertBasic($this->hotelType);
        }

        if (!TopUtil::checkEmpty($this->coordinateSystem)) {
            $requestParam["coordinate_system"] = TopUtil::convertBasic($this->coordinateSystem);
        }

        if (!TopUtil::checkEmpty($this->roomFacilities)) {
            $requestParam["room_facilities"] = TopUtil::convertBasic($this->roomFacilities);
        }

        if (!TopUtil::checkEmpty($this->service)) {
            $requestParam["service"] = TopUtil::convertBasic($this->service);
        }

        if (!TopUtil::checkEmpty($this->hotelFacilities)) {
            $requestParam["hotel_facilities"] = TopUtil::convertBasic($this->hotelFacilities);
        }

        if (!TopUtil::checkEmpty($this->hotelPolicies)) {
            $requestParam["hotel_policies"] = TopUtil::convertBasic($this->hotelPolicies);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


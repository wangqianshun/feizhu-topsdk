<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelHouseAddRequest {

    /**
        外部酒店ID, 这是卖家自己系统中的ID
     **/
    private $outerId;

    /**
        酒店名称
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
        酒店地址。长度不能超过120。不填入会导致不能自动匹配,此地址为下单前展示给用户地址
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
        酒店入住政策，{"10003":"仅2岁以上儿童可随同入住"}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=10、code=10003,value为文字描述
     **/
    private $hotelPolicies;

    /**
        酒店设施。json格式示例值：{"24152":true,"24149":true,"24150":true}，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=20的分类
     **/
    private $hotelFacilities;

    /**
        酒店服务。json格式示例值：{"24058":"可以接待外宾","24198":"叫醒服务","24200":"洗衣服务"}，key-24101为属性编码，value-为"true"时表示有该属性，为文字时表示具体描述，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=40的分类
     **/
    private $service;

    /**
        房间设施。json格式示例值：{"24101": true,"24091": true,"24095": true}，key-24101为属性编码，value-为"true"时表示有该属性，为文字时表示具体描述，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=40的分类
     **/
    private $roomFacilities;

    /**
        酒店图片只支持远程图片，格式如下：[{"url":"http://123.jpg","ismain":"false","type":"大堂","attribute":"普通图"},{"url":"http://456.jpg","ismain":"true","type":"公共区域","attribute":"全景图"},{"url":"http://789.jpg","ismain":"false","type":"大堂","attribute":"普通图"}] 其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图（主图只能有一个，如果有多个或者没有，则会报错）,attribute表示图片属性，取值范围只能是：[普通图, 平面图, 全景图] ,type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 健身房, 其他, 会议室, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂, 泳池]，图片数量最多是能是10张。
     **/
    private $pics;

    /**
        酒店品牌。取值为数字。枚举如下（只给出top30，如果不满足，请联系去啊接口人）：    ruJia("1", "rujiakuaijie", "如家快捷", 1),    qiTian("2", "7 days", "7天连锁", 1),    hanTing("3", "Hanting Inns & Hotels", "汉庭酒店", 1),    geLinHaoTai("4", "Green Tree Inn", "格林豪泰", 1),    jinJiang("5", "Jinjiang Inn", "锦江之星", 1),    su8("6", "Super 8", "速8", 1),    moTai("7", "Motel", "莫泰", 1),    zhouji("8", "InterContinental", "洲际", 4),    budint("9", "Pod Inn", "布丁", 1),    jiuJiu("10", "jiujiuliansuo", "99连锁", 1),    piaoHome("11", "Piao Home Inn", "飘HOME", 1),    juzi("12", "Orange Hotels", "桔子酒店", 1),    yibai("13", "yibai", "易佰", 1),    weiyena("14","weiyena","维也纳",2),    huangguanjiari("15", "huangguanjiari", "皇冠假日", 4),    xidawu("16", "xidawu", "喜达屋", 3),    chengshiBJ("17", "chengshibianjie", "城市便捷", 1),    shagnKeYou("18", "shagnkeyou", "尚客优", 1),    jinjiang("19", "jinjiang", "锦江酒店", 3),    wendemu("20", "Hawthorn Suites", "温德姆", 4),    yibisi("21", "Ibis Hotels", "宜必思", 1),    wanhao("22", "JM Hoteles", "万豪", 4),    yijia365("23", "yijia365", "驿家365", 1),    shoulv("24", "shoulvjituan", "首旅建国", 3),    kaiyuan("25", "New Century Hotel", "开元大酒店", 4),    yagao("26", "yagao", "雅高", 3),    daisi("27", "daisi", "戴斯", 3),    jinling("28", "jinlingliansuo", "金陵", 4),    xianggelila("29", "Shangri-La City Hotels", "香格里拉", 4),    xierdun("30", "Hilton", "希尔顿", 4),
     **/
    private $brand;

    /**
        邮政编码。
     **/
    private $postalCode;

    /**
        预订须知。json格式，示例:{"10001":"14:00","10002":"12:00","10005":"清洁福50元","10006":"请准备好您的身份证件，我需要登记 不允许吸烟"},预订须知，key取值参见 https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.vSVPks&docType=1&articleId=108416&previewCode=987A11324A278EF679E24102BA30D426 中type=10的分类
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
        供应商标识，需要提前开通权限，如果需要对接请联系技术支持，请谨慎使用
     **/
    private $supplier;

    /**
        结算过程中的结算币种符合，如需对接请联系飞猪技术支持，请谨慎使用
     **/
    private $settlementCurrency;

    /**
        房东信息,{"outerId: 外部房东ID,": "xxxx", "nickName": "张三", "avatarUrl": "http://test.com/1.jpg", "telephone": "0571-1234567", "mobilePhone": "12334567678", "email":"test@test.com", "gender": "F", "avgConfirmTime": 30, "responseRate": 100, "description": "房东太懒,什么也没有填", "birthday":"2018-01-01", "qualifacation": 1, "bloodType": 1, "profession":"交互设计师", "country":"CN", "province":"420000", "city":"421200", "real_name_status": true, "validate":"1,2,4,8","confirmRate": 98} JSON字段描述: outerId: 商家房东ID, nickName: 房东昵称, avatarUrl: 房东头像地址, telephone: 固定电话, mobilePhone: 移动电话, email: 邮箱地址, gender: 性别 M男性， F女性， avgConfirmTime: 平均确认时间, 单位分钟, responseRate: 房东回复率, description: 房东介绍, birthday:生日，格式yyyy-MM-dd, qualifacation:学历,1:小学,2:初中,3:高中,4:本科,5:硕士,6:博士,7:博士后,0:其他, profession: 职业 country: 国家code province: 省code city: 城市code realNameStatus: 实名认证状态, true已认证 validate: 认证情况:1:身份验证,2:头像验证,4:手机验证,8:邮箱验证,二进制各位代表含义, bloodType: 血型: 0未知,1:A型,2:B型,3:AB型,4:O型;confirmRate: 订单接单率，0-100
     **/
    private $ownerInfo;

    /**
        描述信息，inside： 内部描述,traffic:交通情况,arround:周边情况
     **/
    private $arroundDesc;

    /**
        用户下单之后展示的详细地址
     **/
    private $realAddress;

    /**
        数据状态 0:正常，-1:删除，-2:停售
     **/
    private $status;


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

    public function getHotelPolicies() : string{
        return $this->hotelPolicies;
    }

    public function setHotelPolicies(string $hotelPolicies){
        $this->hotelPolicies = $hotelPolicies;
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

    public function getOwnerInfo() : string{
        return $this->ownerInfo;
    }

    public function setOwnerInfo(string $ownerInfo){
        $this->ownerInfo = $ownerInfo;
    }

    public function getArroundDesc() : string{
        return $this->arroundDesc;
    }

    public function setArroundDesc(string $arroundDesc){
        $this->arroundDesc = $arroundDesc;
    }

    public function getRealAddress() : string{
        return $this->realAddress;
    }

    public function setRealAddress(string $realAddress){
        $this->realAddress = $realAddress;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


    public function getApiName() : string {
        return "taobao.xhotel.house.add";
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

        if (!TopUtil::checkEmpty($this->hotelPolicies)) {
            $requestParam["hotel_policies"] = TopUtil::convertBasic($this->hotelPolicies);
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

        if (!TopUtil::checkEmpty($this->ownerInfo)) {
            $requestParam["owner_info"] = TopUtil::convertBasic($this->ownerInfo);
        }

        if (!TopUtil::checkEmpty($this->arroundDesc)) {
            $requestParam["arround_desc"] = TopUtil::convertBasic($this->arroundDesc);
        }

        if (!TopUtil::checkEmpty($this->realAddress)) {
            $requestParam["real_address"] = TopUtil::convertBasic($this->realAddress);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateUpdateRequest {

    /**
        不推荐使用，请使用out_rid
     **/
    private $gid;

    /**
        不推荐使用，请使用rateplan_code
     **/
    private $rpid;

    /**
        废弃
     **/
    private $name;

    /**
        价格和库存信息。A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。B:date 日期必须为 T---T+90 日内的日期（T为当天），且不能重复C:price 价格 int类型 取值范围1-99999999 单位为分D:quota 库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) E：taxes:税费明细，是一个数组，每个数组元素是一个包含税费信息的对象。包括：taxId：税费 ID，类型：int，必填：是，具体枚举：taxId=0=其他税（OTHER），taxId=3=住宿税（RENTAL_TAX）；type：税费类型，类型：string、必填：是，可选值：Mandatory：预付税费（包含在总价中），Excluded：到店税费（不包含在总价中）；valueType：费率类型，类型：string，必填：否，可选值：percentage：百分比、fixed：固定金额；amount：具体金额，类型：string，必填：否，单位：分/百分比。 注意：每个taxes数组里的含税金额相加要与tax的值一致，否则将会报错，当tax字段为空时则不会校验；当某税费不知道金额时则可不传tax字段，仅taxes字段里传对应信息即可；未知税费，请在taxId里选择其他税类，住宿税只能传1个，当传多个时飞猪则以第一个为主，若因传多个导致的问题，需由商家自行负责。
     **/
    private $inventoryPrice;

    /**
        不推荐使用
     **/
    private $addBed;

    /**
        不推荐使用
     **/
    private $addBedPrice;

    /**
        不推荐使用（仅支持CNY）
     **/
    private $currencyCode;

    /**
        不推荐使用
     **/
    private $shijiaTag;

    /**
        不推荐使用
     **/
    private $jishiquerenTag;

    /**
        系统商，一般不用填写，使用需要申请
     **/
    private $vendor;

    /**
        商家价格计划编码
     **/
    private $rateplanCode;

    /**
        商家房型ID
     **/
    private $outRid;

    /**
        日历价格开关， date：开关状态控制的是那一天 rate_status：开关状态。0，关闭；1，打开
     **/
    private $rateSwitchCal;

    /**
        锁库存截止时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockEndTime;

    /**
        锁库存开始时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockStartTime;

    /**
        在线预约关联关系推送，priceRuleNumber：加价规则序号
     **/
    private $onlineBookingBindingInfo;

    /**
         是一个JSONArray 字符串 actionType  操作类型 BOUND: 绑定，UNBOUND：解绑; outXcode  元素编码 ; subTypeCode x 元素子类型， 参考：https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.9MjTPx&docType=1&articleId=121402&previewCode=787DFB0895F05C90D167579A04BD32E3; status: 状态是否生效0 失效, 1生效; shortName x元素标题; time 服务时间段(18:00-21:00); value 商品价值(100 - 999900 单位分); itemDesc 商品使用说明; dimensionType 附加产品使用维度   1:每间房维度 2:每间夜维度; picList 图片格式化信息 [{"url":"https://xxxxx/","isMain":true}]; adultCount 成人数量 (1-99); childCount 儿童数量 (0-99); itemLimit 使用限制, 文字描述,200 字内; checkInStart 入住生效开始时间; checkInEnd 入住生效结束时间; bookStartTime 预定生效开始时间; bookStartEnd 预定生效截止时间; featureDetail 详细信息json字符串 [{"detailName":"免费寄存","detailValue":[""],"type":"single","priority":1}]
     **/
    private $hotelXitemInfos;

    /**
        rate维度早餐
     **/
    private $breakfast;

    /**
        在更新rateplan时，同时新增或更新早餐日历。 date：早餐政策属于具体哪一天 breakfast_count：这一天早餐的数量。>=0,<=99 如果date为空，那么会去读取startDate和endDate（格式都为"yyyy-MM-dd"），即早餐正常属于一个时间段。-1为状态早餐，和最终绑定的几人价有关，如果是一人价那么就是我一份早餐，二人价就是两份早餐。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
     **/
    private $breakfastCal;


    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getInventoryPrice() : string{
        return $this->inventoryPrice;
    }

    public function setInventoryPrice(string $inventoryPrice){
        $this->inventoryPrice = $inventoryPrice;
    }

    public function getAddBed() : int{
        return $this->addBed;
    }

    public function setAddBed(int $addBed){
        $this->addBed = $addBed;
    }

    public function getAddBedPrice() : int{
        return $this->addBedPrice;
    }

    public function setAddBedPrice(int $addBedPrice){
        $this->addBedPrice = $addBedPrice;
    }

    public function getCurrencyCode() : int{
        return $this->currencyCode;
    }

    public function setCurrencyCode(int $currencyCode){
        $this->currencyCode = $currencyCode;
    }

    public function getShijiaTag() : int{
        return $this->shijiaTag;
    }

    public function setShijiaTag(int $shijiaTag){
        $this->shijiaTag = $shijiaTag;
    }

    public function getJishiquerenTag() : int{
        return $this->jishiquerenTag;
    }

    public function setJishiquerenTag(int $jishiquerenTag){
        $this->jishiquerenTag = $jishiquerenTag;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getRateplanCode() : string{
        return $this->rateplanCode;
    }

    public function setRateplanCode(string $rateplanCode){
        $this->rateplanCode = $rateplanCode;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getRateSwitchCal() : string{
        return $this->rateSwitchCal;
    }

    public function setRateSwitchCal(string $rateSwitchCal){
        $this->rateSwitchCal = $rateSwitchCal;
    }

    public function getLockEndTime() : string{
        return $this->lockEndTime;
    }

    public function setLockEndTime(string $lockEndTime){
        $this->lockEndTime = $lockEndTime;
    }

    public function getLockStartTime() : string{
        return $this->lockStartTime;
    }

    public function setLockStartTime(string $lockStartTime){
        $this->lockStartTime = $lockStartTime;
    }

    public function getOnlineBookingBindingInfo() : string{
        return $this->onlineBookingBindingInfo;
    }

    public function setOnlineBookingBindingInfo(string $onlineBookingBindingInfo){
        $this->onlineBookingBindingInfo = $onlineBookingBindingInfo;
    }

    public function getHotelXitemInfos() : string{
        return $this->hotelXitemInfos;
    }

    public function setHotelXitemInfos(string $hotelXitemInfos){
        $this->hotelXitemInfos = $hotelXitemInfos;
    }

    public function getBreakfast() : int{
        return $this->breakfast;
    }

    public function setBreakfast(int $breakfast){
        $this->breakfast = $breakfast;
    }

    public function getBreakfastCal() : string{
        return $this->breakfastCal;
    }

    public function setBreakfastCal(string $breakfastCal){
        $this->breakfastCal = $breakfastCal;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->inventoryPrice)) {
            $requestParam["inventory_price"] = TopUtil::convertBasic($this->inventoryPrice);
        }

        if (!TopUtil::checkEmpty($this->addBed)) {
            $requestParam["add_bed"] = TopUtil::convertBasic($this->addBed);
        }

        if (!TopUtil::checkEmpty($this->addBedPrice)) {
            $requestParam["add_bed_price"] = TopUtil::convertBasic($this->addBedPrice);
        }

        if (!TopUtil::checkEmpty($this->currencyCode)) {
            $requestParam["currency_code"] = TopUtil::convertBasic($this->currencyCode);
        }

        if (!TopUtil::checkEmpty($this->shijiaTag)) {
            $requestParam["shijia_tag"] = TopUtil::convertBasic($this->shijiaTag);
        }

        if (!TopUtil::checkEmpty($this->jishiquerenTag)) {
            $requestParam["jishiqueren_tag"] = TopUtil::convertBasic($this->jishiquerenTag);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->rateSwitchCal)) {
            $requestParam["rate_switch_cal"] = TopUtil::convertBasic($this->rateSwitchCal);
        }

        if (!TopUtil::checkEmpty($this->lockEndTime)) {
            $requestParam["lock_end_time"] = TopUtil::convertBasic($this->lockEndTime);
        }

        if (!TopUtil::checkEmpty($this->lockStartTime)) {
            $requestParam["lock_start_time"] = TopUtil::convertBasic($this->lockStartTime);
        }

        if (!TopUtil::checkEmpty($this->onlineBookingBindingInfo)) {
            $requestParam["online_booking_binding_info"] = TopUtil::convertBasic($this->onlineBookingBindingInfo);
        }

        if (!TopUtil::checkEmpty($this->hotelXitemInfos)) {
            $requestParam["hotel_xitem_infos"] = TopUtil::convertBasic($this->hotelXitemInfos);
        }

        if (!TopUtil::checkEmpty($this->breakfast)) {
            $requestParam["breakfast"] = TopUtil::convertBasic($this->breakfast);
        }

        if (!TopUtil::checkEmpty($this->breakfastCal)) {
            $requestParam["breakfast_cal"] = TopUtil::convertBasic($this->breakfastCal);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


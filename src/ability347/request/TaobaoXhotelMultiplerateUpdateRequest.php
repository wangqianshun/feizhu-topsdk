<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelMultiplerateUpdateRequest {

    /**
        废弃，使用rate_plan_code
     **/
    private $rpid;

    /**
        价格状态。0为不可售；1为可售，默认可售
     **/
    private $status;

    /**
        卖家房型ID
     **/
    private $outRid;

    /**
        价格开关 date：开关状态控制的那一天；rate_status：开关状态(0，关闭；1，打开); checkin_status：入住开关(0，关闭；1，打开)；checkout_status：离店开关 (0，关闭；1，打开)
     **/
    private $rateSwitchCal;

    /**
        连住天数(范围1~14)
     **/
    private $lengthofstay;

    /**
        入住人数(范围1~10)
     **/
    private $occupancy;

    /**
        币种.CNY为人民币
     **/
    private $currencyCode;

    /**
        卖家自己系统的房价code
     **/
    private $ratePlanCode;

    /**
        价格和库存信息。 A:use_room_inventory:是否使用房型共享库存，可选值 true false ,false时：使用房价专有库存，此时要求价格和库存必填。 B:date 日期必须为 T---T+180 日内的日期（T为当天），且不能重复 C:price 价格 int类型 取值范围1-99999999 单位为分 D:quota 库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) tax为税费，addBed为加床价，addPerson为加人价1,若连住大于1，price请推送总价； taxes:税费明细，是一个数组，每个数组元素是一个包含税费信息的对象。包括：taxId：税费 ID，类型：int，必填：是，具体枚举：taxId=0=其他税（OTHER），taxId=3=住宿税（RENTAL_TAX）；type：税费类型，类型：string、必填：是，可选值：Mandatory：预付税费（包含在总价中），Excluded：到店税费（不包含在总价中）；valueType：费率类型，类型：string，必填：否，可选值：percentage：百分比、fixed：固定金额；amount：具体金额，类型：string，必填：否，单位：分/百分比。 注意：每个taxes数组里的含税金额相加要与tax的值一致，否则将会报错，当tax字段为空时则不会校验；当某税费不知道金额时则可不传tax字段，仅taxes字段里传对应信息即可；未知税费，请在taxId里选择其他税类，住宿税只能传1个，当传多个时飞猪则以第一个为主，若因传多个导致的问题，需由商家自行负责。
     **/
    private $inventoryPrice;

    /**
        废弃
     **/
    private $name;

    /**
        废弃，使用out_rid
     **/
    private $gid;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        儿童人数
     **/
    private $childnum;

    /**
        婴儿人数
     **/
    private $infantnum;

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
        -1,状态早餐，和入住人数有关系，几人价就是几份早餐；0：不含早1：含单早2：含双早N：含N早（1-99可选）；（添加RP时为必须）
     **/
    private $breakfast;

    /**
        退订政策字段，是个json串，参考示例值设置改字段的值。允许变更/取消：在XX年XX月XX日XX时前取消收取Y%的手续费，100>Y>=0允许变更/取消：在入住前X小时前取消收取Y%的手续费，100>Y>=0（不超过10条）。1.表示任意退{"cancelPolicyType":1};2.表示不能退{"cancelPolicyType":2};4.从入住当天24点往前推X小时前取消收取Y%手续费，否则不可取消{"cancelPolicyType":4,"policyInfo":{"48":10,"24":20}}表示，从入住日24点往前推提前至少48小时取消，收取10%的手续费，从入住日24点往前推提前至少24小时取消，收取20%的手续费;5.从24点往前推多少小时可退{"cancelPolicyType":5,"policyInfo":{"timeBefore":6}}表示从入住日24点往前推至少6个小时即入住日18点前可免费取消;6.从入住日24点往前推，至少提前小时数扣取首晚房费{"cancelPolicyType":6,"policyInfo":{"14":1}}表示入住日24点往前推14小时，即入住日10点前取消收取首晚房费。 注意：支付类型为预付，那么可以使用所有的退订类型,但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。支持多段时间、多间夜扣款
     **/
    private $cancelPolicy;

    /**
        在更新rateplan时，同时新增或更新早餐日历。 date：早餐政策属于具体哪一天 breakfast_count：这一天早餐的数量。>=0,<=99 如果date为空，那么会去读取startDate和endDate（格式都为"yyyy-MM-dd"），即早餐正常属于一个时间段。-1为状态早餐，和最终绑定的几人价有关，如果是一人价那么就是我一份早餐，二人价就是两份早餐。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
     **/
    private $breakfastCal;

    /**
        在新增rateplan的同时新增取消政策日历。 json格式。 date：日历的某一天，格式为"yyyy-MM-dd" cancel_policy：日历某一天的价格政策。格式和限制同cancel_policy。 如果date为空，那么会读取startDate和endDate（格式都为"yyyy-MM-dd"），即取消政策属于某一个时间段。 注意：支付类型为预付，那么可以使用所有的退订类型，但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
     **/
    private $cancelPolicyCal;

    /**
         是一个JSONArray 字符串 actionType  操作类型 BOUND: 绑定，UNBOUND：解绑; outXcode  元素编码 ; subTypeCode x 元素子类型， 参考：https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.9MjTPx&docType=1&articleId=121402&previewCode=787DFB0895F05C90D167579A04BD32E3; status: 状态是否生效0 失效, 1生效; shortName x元素标题; time 服务时间段(18:00-21:00); value 商品价值(100 - 999900 单位分); itemDesc 商品使用说明; dimensionType 附加产品使用维度   1:每间房维度 2:每间夜维度; picList 图片格式化信息 [{"url":"https://xxxxx/","isMain":true}]; adultCount 成人数量 (1-99); childCount 儿童数量 (0-99); itemLimit 使用限制, 文字描述,200 字内; checkInStart 入住生效开始时间; checkInEnd 入住生效结束时间; bookStartTime 预定生效开始时间; bookStartEnd 预定生效截止时间; featureDetail 详细信息json字符串 [{"detailName":"免费寄存","detailValue":[""],"type":"single","priority":1}]
     **/
    private $hotelXitemInfos;


    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
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

    public function getLengthofstay() : int{
        return $this->lengthofstay;
    }

    public function setLengthofstay(int $lengthofstay){
        $this->lengthofstay = $lengthofstay;
    }

    public function getOccupancy() : int{
        return $this->occupancy;
    }

    public function setOccupancy(int $occupancy){
        $this->occupancy = $occupancy;
    }

    public function getCurrencyCode() : string{
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode){
        $this->currencyCode = $currencyCode;
    }

    public function getRatePlanCode() : string{
        return $this->ratePlanCode;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->ratePlanCode = $ratePlanCode;
    }

    public function getInventoryPrice() : string{
        return $this->inventoryPrice;
    }

    public function setInventoryPrice(string $inventoryPrice){
        $this->inventoryPrice = $inventoryPrice;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getChildnum() : int{
        return $this->childnum;
    }

    public function setChildnum(int $childnum){
        $this->childnum = $childnum;
    }

    public function getInfantnum() : int{
        return $this->infantnum;
    }

    public function setInfantnum(int $infantnum){
        $this->infantnum = $infantnum;
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

    public function getBreakfast() : int{
        return $this->breakfast;
    }

    public function setBreakfast(int $breakfast){
        $this->breakfast = $breakfast;
    }

    public function getCancelPolicy() : string{
        return $this->cancelPolicy;
    }

    public function setCancelPolicy(string $cancelPolicy){
        $this->cancelPolicy = $cancelPolicy;
    }

    public function getBreakfastCal() : string{
        return $this->breakfastCal;
    }

    public function setBreakfastCal(string $breakfastCal){
        $this->breakfastCal = $breakfastCal;
    }

    public function getCancelPolicyCal() : string{
        return $this->cancelPolicyCal;
    }

    public function setCancelPolicyCal(string $cancelPolicyCal){
        $this->cancelPolicyCal = $cancelPolicyCal;
    }

    public function getHotelXitemInfos() : string{
        return $this->hotelXitemInfos;
    }

    public function setHotelXitemInfos(string $hotelXitemInfos){
        $this->hotelXitemInfos = $hotelXitemInfos;
    }


    public function getApiName() : string {
        return "taobao.xhotel.multiplerate.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->rateSwitchCal)) {
            $requestParam["rate_switch_cal"] = TopUtil::convertBasic($this->rateSwitchCal);
        }

        if (!TopUtil::checkEmpty($this->lengthofstay)) {
            $requestParam["lengthofstay"] = TopUtil::convertBasic($this->lengthofstay);
        }

        if (!TopUtil::checkEmpty($this->occupancy)) {
            $requestParam["occupancy"] = TopUtil::convertBasic($this->occupancy);
        }

        if (!TopUtil::checkEmpty($this->currencyCode)) {
            $requestParam["currency_code"] = TopUtil::convertBasic($this->currencyCode);
        }

        if (!TopUtil::checkEmpty($this->ratePlanCode)) {
            $requestParam["rate_plan_code"] = TopUtil::convertBasic($this->ratePlanCode);
        }

        if (!TopUtil::checkEmpty($this->inventoryPrice)) {
            $requestParam["inventory_price"] = TopUtil::convertBasic($this->inventoryPrice);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->childnum)) {
            $requestParam["childnum"] = TopUtil::convertBasic($this->childnum);
        }

        if (!TopUtil::checkEmpty($this->infantnum)) {
            $requestParam["infantnum"] = TopUtil::convertBasic($this->infantnum);
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

        if (!TopUtil::checkEmpty($this->breakfast)) {
            $requestParam["breakfast"] = TopUtil::convertBasic($this->breakfast);
        }

        if (!TopUtil::checkEmpty($this->cancelPolicy)) {
            $requestParam["cancel_policy"] = TopUtil::convertBasic($this->cancelPolicy);
        }

        if (!TopUtil::checkEmpty($this->breakfastCal)) {
            $requestParam["breakfast_cal"] = TopUtil::convertBasic($this->breakfastCal);
        }

        if (!TopUtil::checkEmpty($this->cancelPolicyCal)) {
            $requestParam["cancel_policy_cal"] = TopUtil::convertBasic($this->cancelPolicyCal);
        }

        if (!TopUtil::checkEmpty($this->hotelXitemInfos)) {
            $requestParam["hotel_xitem_infos"] = TopUtil::convertBasic($this->hotelXitemInfos);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRateplanAddRequest {

    /**
        卖家自己系统的Code，简称RateCode
     **/
    private $rateplanCode;

    /**
        在淘宝搜索页面展示的房价名称。请注意名称里不要维护早餐信息，如果想设置早餐信息，请设置breakfast_count字段即可
     **/
    private $name;

    /**
        RP的英文名称
     **/
    private $englishName;

    /**
        支付类型，只支持：1：预付5：现付6: 信用住7:预付在线预约8:信用住在线预约。其中5,6,7,8四种类型需要申请权限
     **/
    private $paymentType;

    /**
        -1：状态早餐,有具体几人价有关系，几人价是几份早餐;0：不含早1：含单早2：含双早N：含N早（-1-99可选）
     **/
    private $breakfastCount;

    /**
        废弃
     **/
    private $feeBreakfastCount;

    /**
        不推荐使用
     **/
    private $feeBreakfastAmount;

    /**
        不推荐使用
     **/
    private $feeGovTaxAmount;

    /**
        不推荐使用
     **/
    private $feeGovTaxPercent;

    /**
        不推荐使用
     **/
    private $feeServiceAmount;

    /**
        不推荐使用
     **/
    private $feeServicePercent;

    /**
        不推荐使用
     **/
    private $extendFee;

    /**
        最小入住天数（1-90）。默认1,小时房RP请设置为1
     **/
    private $minDays;

    /**
        最大入住天数（1-90）。默认90 信用住不超过9天,小时房RP请设置为1,特殊商家支持90天
     **/
    private $maxDays;

    /**
        首日入住房间数（1-99）。默认1。【废弃】
     **/
    private $minAmount;

    /**
        最小提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表必须至少提前两天预定，那么如果想预定24号入住，,必须在23号零点前下单。
     **/
    private $minAdvHours;

    /**
        最大提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表最多提前两天预定，那么如果想预定24号入住，,必须在23号零点以后下单。
     **/
    private $maxAdvHours;

    /**
        产品每日开始销售时间，start_time一定为当天时间
     **/
    private $startTime;

    /**
        产品每日结束销售时间,当end_time<start_time时，表示end_time为第二天，此时附加限制end_time<=06:00:00并且start_time>=12:00:00,表明可售时间从当天12点到次日的凌晨6点（扩展此信息主要为了描述尾房的rp）注意start_time一定是当天的时间。尾房18：00起可售
     **/
    private $endTime;

    /**
        退订政策字段，是个json串，参考示例值设置改字段的值。允许变更/取消：在XX年XX月XX日XX时前取消收取Y%的手续费，100>Y>=0允许变更/取消：在入住前X小时前取消收取Y%的手续费，100>Y>=0（不超过10条）。1.表示任意退{"cancelPolicyType":1};2.表示不能退{"cancelPolicyType":2};4.从入住当天24点往前推X小时前取消收取Y%手续费，否则不可取消{"cancelPolicyType":4,"policyInfo":{"48":10,"24":20}}表示，从入住日24点往前推提前至少48小时取消，收取10%的手续费，从入住日24点往前推提前至少24小时取消，收取20%的手续费;5.从24点往前推多少小时可退{"cancelPolicyType":5,"policyInfo":{"timeBefore":6}}表示从入住日24点往前推至少6个小时即入住日18点前可免费取消;6.从入住日24点往前推，至少提前小时数扣取首晚房费{"cancelPolicyType":6,"policyInfo":{"14":1}}表示入住日24点往前推14小时，即入住日10点前取消收取首晚房费。 注意：支付类型为预付，那么可以使用所有的退订类型,但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。支持多段时间,多间夜扣款。阶梯退手续费限制请查看https://hot.bbs.taobao.com/detail.html?postId=8892814
     **/
    private $cancelPolicy;

    /**
        个性化定制扩展信息的JSON。注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
     **/
    private $extend;

    /**
        1：开启（默认）2：关闭。如果没传值那么默认默认值为1
     **/
    private $status;

    /**
        担保类型，只支持： 0  无担保  1  峰时首晚担保 2峰时全额担保 3全天首晚担保 4全天全额担保
     **/
    private $guaranteeType;

    /**
        分时担保每日开始担保时间。 （如果设置了峰时担保类型，那么峰时担保时间不能为空，并且必须大于等于8点）
     **/
    private $guaranteeStartTime;

    /**
        双方映射后的会员等级。如需开通，需要申请权限，取值范围为：1,2,3,4,5,6,none。比如飞猪F3对应商家V4,则传4.（如果有疑问请联系对接技术支持）
     **/
    private $memberLevel;

    /**
        销售渠道。如需开通，需要申请权限。目前支持的渠道有 H:飞猪全渠道（选择H，可实现飞猪、高德、支付宝、手淘均可售卖） O:钉钉商旅 。如果有多个用","分开，比如H,O。如果需要投放其他渠道，请联系飞猪运营或者技术支持。
     **/
    private $channel;

    /**
        不推送则默认2人，如有低于2人的RP限制请推送该字段。
     **/
    private $occupancy;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        需申请会员权限。是否是新用户首住优惠rp。1-代表是。0或者不填写代表否
     **/
    private $firstStay;

    /**
        废弃。价格类型字段：0.非协议价；1.集采协议价；如果不是协议价，请不要填写该字段。该字段有权限控制，如需使用，请联系阿里旅行运营。 如果不填写或者填写为0，默认是阿里旅行价
     **/
    private $agreement;

    /**
        不推荐使用，使用改规则
     **/
    private $cancelBeforeDay;

    /**
        不推荐使用，使用改规则
     **/
    private $cancelBeforeHour;

    /**
        在添加rateplan时，同时新增早餐日历。date：说明这条记录的早餐政策breakfast_count：这一天早餐的数量。>=-1,<=99。如果date为空，那么会去读取startDate和endDate（格式都为"yyyy-MM-dd"），即早餐正常属于一个时间段。-1为状态早餐，和最终绑定的几人价有关，如果是一人价那么就是我一份早餐，二人价就是两份早餐。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
     **/
    private $breakfastCal;

    /**
        在新增rateplan的同时新增取消政策日历。 json格式。 date：日历的某一天，格式为"yyyy-MM-dd" cancel_policy：日历某一天的价格政策。格式和限制同cancel_policy。 如果date为空，那么会读取startDate和endDate（格式都为"yyyy-MM-dd"），即取消政策属于某一个时间段。 注意：支付类型为预付，那么可以使用所有的退订类型，但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。阶梯退手续费限制请查看https://hot.bbs.taobao.com/detail.html?postId=8892814
     **/
    private $cancelPolicyCal;

    /**
        在新增rateplan的同时，新增担保日历。date：担保日历的某一天。guarantee:担保政策。其中有两个属性：guaranteeType,guaranteeStartTime。 guaranteeType的可选值同guaranteeType字段，详见guaranteeType字段。guaranteeStartTime格式为"HH:mm"。如果date为空，那么会读取startDate和endDate（格式都为"yyyy-MM-dd"），即担保政策属于某一个时间段。（如果设置了峰时担保类型，那么峰时担保时间不能为空，并且必须大于等于8点）。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
     **/
    private $guaranteeCal;

    /**
        生效开始时间，用来控制此rateplan生效的开始时间，配合字段deadline_time一起限定rp的有效期
     **/
    private $effectiveTime;

    /**
        生效截止时间，用来控制此rateplan生效的截止时间，配合字段effective_time一起限定rp的有效期
     **/
    private $deadlineTime;

    /**
        rp类型，1为小时房。目前只支持小时房。如果不是小时房rateplan,则不要填写。如果想要清空该字段可以传入none
     **/
    private $rpType;

    /**
        小时房入住时间跨度。小时房特有字段。比如4小时的小时房，那么值为4
     **/
    private $hourage;

    /**
        最早可选入住时间，小时房特有字段。格式为HH:mm
     **/
    private $canCheckinEnd;

    /**
        最晚可选入住时间，小时房特有字段。格式为HH:mm
     **/
    private $canCheckinStart;

    /**
        儿童最大年龄(0-18)
     **/
    private $maxChildAge;

    /**
        儿童最小年龄(0-18)
     **/
    private $minChildAge;

    /**
        婴儿最大年龄(0-18)
     **/
    private $maxInfantAge;

    /**
        婴儿最小年龄(0-18)
     **/
    private $minInfantAge;

    /**
        餐食描述
     **/
    private $dinningDesc;

    /**
        是否学生价，0：否；1：是。
     **/
    private $isStudent;

    /**
        酒店id
     **/
    private $hid;

    /**
        房型id
     **/
    private $rid;

    /**
        外部酒店id
     **/
    private $outHid;

    /**
        外部房型id
     **/
    private $outRid;

    /**
        super rp标记，1是；0否
     **/
    private $superRpFlag;

    /**
        base rp标记，1是；0否
     **/
    private $baseRpFlag;

    /**
        2 VCC担保 1 PCI担保 0 支付宝担保(信用住产品担保方式只能为支付宝担保)
     **/
    private $guaranteeMode;

    /**
        父rpid,使用场景：当一个rp发布变价rate的时候，记录父rp信息，用于下单时候传递约定的rpcode给外部
     **/
    private $parentRpCode;

    /**
        父rpcode，使用场景：当一个rp发布变价rate的时候，用于下单时候传递约定的rpcode给外部
     **/
    private $parentRpid;

    /**
        操作rateplan的来源
     **/
    private $operator;

    /**
        新增RP时的 打标和去标 需求,
     **/
    private $tagJson;

    /**
        来源
     **/
    private $source;

    /**
        保留房提前x小时自动确认时间，比如设置为6 那么从入住当日24点往前推6小时即18:00以前可以自动确认有房，否则是待确认
     **/
    private $allotmentReleaseTime;

    /**
        普通保留房提前x小时自动确认时间，比如设置为6 那么从入住当日24点往前推6小时即18:00以前可以自动确认有房，否则是待确认
     **/
    private $commonAllotReleaseTime;

    /**
        商品来源渠道。1：直采（直连酒店PMS）, 1-1：直采（非直连） 2：携程系, 3：美团, 4：国内旅行社分销, 5：海外供应商。非酒店资源方卖家必须提供商品来源渠道，携程系包括携程、去哪儿、艺龙。
     **/
    private $resourceType;

    /**
        是否底价加价，1是底价加价,0 非底价加价rp
     **/
    private $bottomPriceFlag;

    /**
        最晚可选离店时间，小时房特有字段。格式为HH:mm
     **/
    private $canCheckoutEnd;

    /**
        会员价支持标识,1表示支持会员价规则
     **/
    private $memDiscFlag;

    /**
        会员价加价规则。c:表示折扣百分比,例子8,意为会员价优惠8%,s:标识起始日期,e:表示截止日期，t:表示加价类型，0:代表折扣。会员价=售价*(1-c%)
     **/
    private $memberDiscountCal;

    /**
        RP入住人限制信息。JSON格式
     **/
    private $guestLimit;

    /**
        RP参与的活动，3为尾房,4超级房券,8直连免房
     **/
    private $activityType;

    /**
        在线预约关联关系推送，priceRuleNumber：加价规则序号
     **/
    private $onlineBookingBindingInfo;

    /**
        rp的权益信息, 调用该字段请优先联系对接业务同学。type枚举: eeo,meo, value取值:1. 额外积分 2. 优惠价格 3. 套餐权益 4.行政礼遇。
     **/
    private $rights;

    /**
        商业化充值类型 seller充值到卖家 hotel充值到门店
     **/
    private $freeRoomChargeDstRole;

    /**
        儿童价格政策 年龄区间必须连续且有一个从0开始 max：年龄区间上限 min：年龄区间下限 t：加价类型，1-百分比金额加价，2-固定金额加价 v：加价因子，固定加价单位为分，百分比加价单位为百分比
     **/
    private $childrenPricePolicy;


    public function getRateplanCode() : string{
        return $this->rateplanCode;
    }

    public function setRateplanCode(string $rateplanCode){
        $this->rateplanCode = $rateplanCode;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getEnglishName() : string{
        return $this->englishName;
    }

    public function setEnglishName(string $englishName){
        $this->englishName = $englishName;
    }

    public function getPaymentType() : int{
        return $this->paymentType;
    }

    public function setPaymentType(int $paymentType){
        $this->paymentType = $paymentType;
    }

    public function getBreakfastCount() : int{
        return $this->breakfastCount;
    }

    public function setBreakfastCount(int $breakfastCount){
        $this->breakfastCount = $breakfastCount;
    }

    public function getFeeBreakfastCount() : int{
        return $this->feeBreakfastCount;
    }

    public function setFeeBreakfastCount(int $feeBreakfastCount){
        $this->feeBreakfastCount = $feeBreakfastCount;
    }

    public function getFeeBreakfastAmount() : int{
        return $this->feeBreakfastAmount;
    }

    public function setFeeBreakfastAmount(int $feeBreakfastAmount){
        $this->feeBreakfastAmount = $feeBreakfastAmount;
    }

    public function getFeeGovTaxAmount() : int{
        return $this->feeGovTaxAmount;
    }

    public function setFeeGovTaxAmount(int $feeGovTaxAmount){
        $this->feeGovTaxAmount = $feeGovTaxAmount;
    }

    public function getFeeGovTaxPercent() : int{
        return $this->feeGovTaxPercent;
    }

    public function setFeeGovTaxPercent(int $feeGovTaxPercent){
        $this->feeGovTaxPercent = $feeGovTaxPercent;
    }

    public function getFeeServiceAmount() : int{
        return $this->feeServiceAmount;
    }

    public function setFeeServiceAmount(int $feeServiceAmount){
        $this->feeServiceAmount = $feeServiceAmount;
    }

    public function getFeeServicePercent() : int{
        return $this->feeServicePercent;
    }

    public function setFeeServicePercent(int $feeServicePercent){
        $this->feeServicePercent = $feeServicePercent;
    }

    public function getExtendFee() : string{
        return $this->extendFee;
    }

    public function setExtendFee(string $extendFee){
        $this->extendFee = $extendFee;
    }

    public function getMinDays() : int{
        return $this->minDays;
    }

    public function setMinDays(int $minDays){
        $this->minDays = $minDays;
    }

    public function getMaxDays() : int{
        return $this->maxDays;
    }

    public function setMaxDays(int $maxDays){
        $this->maxDays = $maxDays;
    }

    public function getMinAmount() : int{
        return $this->minAmount;
    }

    public function setMinAmount(int $minAmount){
        $this->minAmount = $minAmount;
    }

    public function getMinAdvHours() : int{
        return $this->minAdvHours;
    }

    public function setMinAdvHours(int $minAdvHours){
        $this->minAdvHours = $minAdvHours;
    }

    public function getMaxAdvHours() : int{
        return $this->maxAdvHours;
    }

    public function setMaxAdvHours(int $maxAdvHours){
        $this->maxAdvHours = $maxAdvHours;
    }

    public function getStartTime() : string{
        return $this->startTime;
    }

    public function setStartTime(string $startTime){
        $this->startTime = $startTime;
    }

    public function getEndTime() : string{
        return $this->endTime;
    }

    public function setEndTime(string $endTime){
        $this->endTime = $endTime;
    }

    public function getCancelPolicy() : string{
        return $this->cancelPolicy;
    }

    public function setCancelPolicy(string $cancelPolicy){
        $this->cancelPolicy = $cancelPolicy;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getGuaranteeType() : int{
        return $this->guaranteeType;
    }

    public function setGuaranteeType(int $guaranteeType){
        $this->guaranteeType = $guaranteeType;
    }

    public function getGuaranteeStartTime() : string{
        return $this->guaranteeStartTime;
    }

    public function setGuaranteeStartTime(string $guaranteeStartTime){
        $this->guaranteeStartTime = $guaranteeStartTime;
    }

    public function getMemberLevel() : string{
        return $this->memberLevel;
    }

    public function setMemberLevel(string $memberLevel){
        $this->memberLevel = $memberLevel;
    }

    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }

    public function getOccupancy() : int{
        return $this->occupancy;
    }

    public function setOccupancy(int $occupancy){
        $this->occupancy = $occupancy;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getFirstStay() : int{
        return $this->firstStay;
    }

    public function setFirstStay(int $firstStay){
        $this->firstStay = $firstStay;
    }

    public function getAgreement() : int{
        return $this->agreement;
    }

    public function setAgreement(int $agreement){
        $this->agreement = $agreement;
    }

    public function getCancelBeforeDay() : int{
        return $this->cancelBeforeDay;
    }

    public function setCancelBeforeDay(int $cancelBeforeDay){
        $this->cancelBeforeDay = $cancelBeforeDay;
    }

    public function getCancelBeforeHour() : string{
        return $this->cancelBeforeHour;
    }

    public function setCancelBeforeHour(string $cancelBeforeHour){
        $this->cancelBeforeHour = $cancelBeforeHour;
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

    public function getGuaranteeCal() : string{
        return $this->guaranteeCal;
    }

    public function setGuaranteeCal(string $guaranteeCal){
        $this->guaranteeCal = $guaranteeCal;
    }

    public function getEffectiveTime() : string{
        return $this->effectiveTime;
    }

    public function setEffectiveTime(string $effectiveTime){
        $this->effectiveTime = $effectiveTime;
    }

    public function getDeadlineTime() : string{
        return $this->deadlineTime;
    }

    public function setDeadlineTime(string $deadlineTime){
        $this->deadlineTime = $deadlineTime;
    }

    public function getRpType() : string{
        return $this->rpType;
    }

    public function setRpType(string $rpType){
        $this->rpType = $rpType;
    }

    public function getHourage() : string{
        return $this->hourage;
    }

    public function setHourage(string $hourage){
        $this->hourage = $hourage;
    }

    public function getCanCheckinEnd() : string{
        return $this->canCheckinEnd;
    }

    public function setCanCheckinEnd(string $canCheckinEnd){
        $this->canCheckinEnd = $canCheckinEnd;
    }

    public function getCanCheckinStart() : string{
        return $this->canCheckinStart;
    }

    public function setCanCheckinStart(string $canCheckinStart){
        $this->canCheckinStart = $canCheckinStart;
    }

    public function getMaxChildAge() : int{
        return $this->maxChildAge;
    }

    public function setMaxChildAge(int $maxChildAge){
        $this->maxChildAge = $maxChildAge;
    }

    public function getMinChildAge() : int{
        return $this->minChildAge;
    }

    public function setMinChildAge(int $minChildAge){
        $this->minChildAge = $minChildAge;
    }

    public function getMaxInfantAge() : int{
        return $this->maxInfantAge;
    }

    public function setMaxInfantAge(int $maxInfantAge){
        $this->maxInfantAge = $maxInfantAge;
    }

    public function getMinInfantAge() : int{
        return $this->minInfantAge;
    }

    public function setMinInfantAge(int $minInfantAge){
        $this->minInfantAge = $minInfantAge;
    }

    public function getDinningDesc() : string{
        return $this->dinningDesc;
    }

    public function setDinningDesc(string $dinningDesc){
        $this->dinningDesc = $dinningDesc;
    }

    public function getIsStudent() : int{
        return $this->isStudent;
    }

    public function setIsStudent(int $isStudent){
        $this->isStudent = $isStudent;
    }

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getSuperRpFlag() : int{
        return $this->superRpFlag;
    }

    public function setSuperRpFlag(int $superRpFlag){
        $this->superRpFlag = $superRpFlag;
    }

    public function getBaseRpFlag() : int{
        return $this->baseRpFlag;
    }

    public function setBaseRpFlag(int $baseRpFlag){
        $this->baseRpFlag = $baseRpFlag;
    }

    public function getGuaranteeMode() : int{
        return $this->guaranteeMode;
    }

    public function setGuaranteeMode(int $guaranteeMode){
        $this->guaranteeMode = $guaranteeMode;
    }

    public function getParentRpCode() : string{
        return $this->parentRpCode;
    }

    public function setParentRpCode(string $parentRpCode){
        $this->parentRpCode = $parentRpCode;
    }

    public function getParentRpid() : int{
        return $this->parentRpid;
    }

    public function setParentRpid(int $parentRpid){
        $this->parentRpid = $parentRpid;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }

    public function getTagJson() : string{
        return $this->tagJson;
    }

    public function setTagJson(string $tagJson){
        $this->tagJson = $tagJson;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getAllotmentReleaseTime() : string{
        return $this->allotmentReleaseTime;
    }

    public function setAllotmentReleaseTime(string $allotmentReleaseTime){
        $this->allotmentReleaseTime = $allotmentReleaseTime;
    }

    public function getCommonAllotReleaseTime() : string{
        return $this->commonAllotReleaseTime;
    }

    public function setCommonAllotReleaseTime(string $commonAllotReleaseTime){
        $this->commonAllotReleaseTime = $commonAllotReleaseTime;
    }

    public function getResourceType() : string{
        return $this->resourceType;
    }

    public function setResourceType(string $resourceType){
        $this->resourceType = $resourceType;
    }

    public function getBottomPriceFlag() : int{
        return $this->bottomPriceFlag;
    }

    public function setBottomPriceFlag(int $bottomPriceFlag){
        $this->bottomPriceFlag = $bottomPriceFlag;
    }

    public function getCanCheckoutEnd() : string{
        return $this->canCheckoutEnd;
    }

    public function setCanCheckoutEnd(string $canCheckoutEnd){
        $this->canCheckoutEnd = $canCheckoutEnd;
    }

    public function getMemDiscFlag() : int{
        return $this->memDiscFlag;
    }

    public function setMemDiscFlag(int $memDiscFlag){
        $this->memDiscFlag = $memDiscFlag;
    }

    public function getMemberDiscountCal() : string{
        return $this->memberDiscountCal;
    }

    public function setMemberDiscountCal(string $memberDiscountCal){
        $this->memberDiscountCal = $memberDiscountCal;
    }

    public function getGuestLimit() : string{
        return $this->guestLimit;
    }

    public function setGuestLimit(string $guestLimit){
        $this->guestLimit = $guestLimit;
    }

    public function getActivityType() : string{
        return $this->activityType;
    }

    public function setActivityType(string $activityType){
        $this->activityType = $activityType;
    }

    public function getOnlineBookingBindingInfo() : string{
        return $this->onlineBookingBindingInfo;
    }

    public function setOnlineBookingBindingInfo(string $onlineBookingBindingInfo){
        $this->onlineBookingBindingInfo = $onlineBookingBindingInfo;
    }

    public function getRights() : string{
        return $this->rights;
    }

    public function setRights(string $rights){
        $this->rights = $rights;
    }

    public function getFreeRoomChargeDstRole() : string{
        return $this->freeRoomChargeDstRole;
    }

    public function setFreeRoomChargeDstRole(string $freeRoomChargeDstRole){
        $this->freeRoomChargeDstRole = $freeRoomChargeDstRole;
    }

    public function getChildrenPricePolicy() : string{
        return $this->childrenPricePolicy;
    }

    public function setChildrenPricePolicy(string $childrenPricePolicy){
        $this->childrenPricePolicy = $childrenPricePolicy;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rateplan.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->englishName)) {
            $requestParam["english_name"] = TopUtil::convertBasic($this->englishName);
        }

        if (!TopUtil::checkEmpty($this->paymentType)) {
            $requestParam["payment_type"] = TopUtil::convertBasic($this->paymentType);
        }

        if (!TopUtil::checkEmpty($this->breakfastCount)) {
            $requestParam["breakfast_count"] = TopUtil::convertBasic($this->breakfastCount);
        }

        if (!TopUtil::checkEmpty($this->feeBreakfastCount)) {
            $requestParam["fee_breakfast_count"] = TopUtil::convertBasic($this->feeBreakfastCount);
        }

        if (!TopUtil::checkEmpty($this->feeBreakfastAmount)) {
            $requestParam["fee_breakfast_amount"] = TopUtil::convertBasic($this->feeBreakfastAmount);
        }

        if (!TopUtil::checkEmpty($this->feeGovTaxAmount)) {
            $requestParam["fee_gov_tax_amount"] = TopUtil::convertBasic($this->feeGovTaxAmount);
        }

        if (!TopUtil::checkEmpty($this->feeGovTaxPercent)) {
            $requestParam["fee_gov_tax_percent"] = TopUtil::convertBasic($this->feeGovTaxPercent);
        }

        if (!TopUtil::checkEmpty($this->feeServiceAmount)) {
            $requestParam["fee_service_amount"] = TopUtil::convertBasic($this->feeServiceAmount);
        }

        if (!TopUtil::checkEmpty($this->feeServicePercent)) {
            $requestParam["fee_service_percent"] = TopUtil::convertBasic($this->feeServicePercent);
        }

        if (!TopUtil::checkEmpty($this->extendFee)) {
            $requestParam["extend_fee"] = TopUtil::convertBasic($this->extendFee);
        }

        if (!TopUtil::checkEmpty($this->minDays)) {
            $requestParam["min_days"] = TopUtil::convertBasic($this->minDays);
        }

        if (!TopUtil::checkEmpty($this->maxDays)) {
            $requestParam["max_days"] = TopUtil::convertBasic($this->maxDays);
        }

        if (!TopUtil::checkEmpty($this->minAmount)) {
            $requestParam["min_amount"] = TopUtil::convertBasic($this->minAmount);
        }

        if (!TopUtil::checkEmpty($this->minAdvHours)) {
            $requestParam["min_adv_hours"] = TopUtil::convertBasic($this->minAdvHours);
        }

        if (!TopUtil::checkEmpty($this->maxAdvHours)) {
            $requestParam["max_adv_hours"] = TopUtil::convertBasic($this->maxAdvHours);
        }

        if (!TopUtil::checkEmpty($this->startTime)) {
            $requestParam["start_time"] = TopUtil::convertBasic($this->startTime);
        }

        if (!TopUtil::checkEmpty($this->endTime)) {
            $requestParam["end_time"] = TopUtil::convertBasic($this->endTime);
        }

        if (!TopUtil::checkEmpty($this->cancelPolicy)) {
            $requestParam["cancel_policy"] = TopUtil::convertBasic($this->cancelPolicy);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->guaranteeType)) {
            $requestParam["guarantee_type"] = TopUtil::convertBasic($this->guaranteeType);
        }

        if (!TopUtil::checkEmpty($this->guaranteeStartTime)) {
            $requestParam["guarantee_start_time"] = TopUtil::convertBasic($this->guaranteeStartTime);
        }

        if (!TopUtil::checkEmpty($this->memberLevel)) {
            $requestParam["member_level"] = TopUtil::convertBasic($this->memberLevel);
        }

        if (!TopUtil::checkEmpty($this->channel)) {
            $requestParam["channel"] = TopUtil::convertBasic($this->channel);
        }

        if (!TopUtil::checkEmpty($this->occupancy)) {
            $requestParam["occupancy"] = TopUtil::convertBasic($this->occupancy);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->firstStay)) {
            $requestParam["first_stay"] = TopUtil::convertBasic($this->firstStay);
        }

        if (!TopUtil::checkEmpty($this->agreement)) {
            $requestParam["agreement"] = TopUtil::convertBasic($this->agreement);
        }

        if (!TopUtil::checkEmpty($this->cancelBeforeDay)) {
            $requestParam["cancel_before_day"] = TopUtil::convertBasic($this->cancelBeforeDay);
        }

        if (!TopUtil::checkEmpty($this->cancelBeforeHour)) {
            $requestParam["cancel_before_hour"] = TopUtil::convertBasic($this->cancelBeforeHour);
        }

        if (!TopUtil::checkEmpty($this->breakfastCal)) {
            $requestParam["breakfast_cal"] = TopUtil::convertBasic($this->breakfastCal);
        }

        if (!TopUtil::checkEmpty($this->cancelPolicyCal)) {
            $requestParam["cancel_policy_cal"] = TopUtil::convertBasic($this->cancelPolicyCal);
        }

        if (!TopUtil::checkEmpty($this->guaranteeCal)) {
            $requestParam["guarantee_cal"] = TopUtil::convertBasic($this->guaranteeCal);
        }

        if (!TopUtil::checkEmpty($this->effectiveTime)) {
            $requestParam["effective_time"] = TopUtil::convertBasic($this->effectiveTime);
        }

        if (!TopUtil::checkEmpty($this->deadlineTime)) {
            $requestParam["deadline_time"] = TopUtil::convertBasic($this->deadlineTime);
        }

        if (!TopUtil::checkEmpty($this->rpType)) {
            $requestParam["rp_type"] = TopUtil::convertBasic($this->rpType);
        }

        if (!TopUtil::checkEmpty($this->hourage)) {
            $requestParam["hourage"] = TopUtil::convertBasic($this->hourage);
        }

        if (!TopUtil::checkEmpty($this->canCheckinEnd)) {
            $requestParam["can_checkin_end"] = TopUtil::convertBasic($this->canCheckinEnd);
        }

        if (!TopUtil::checkEmpty($this->canCheckinStart)) {
            $requestParam["can_checkin_start"] = TopUtil::convertBasic($this->canCheckinStart);
        }

        if (!TopUtil::checkEmpty($this->maxChildAge)) {
            $requestParam["max_child_age"] = TopUtil::convertBasic($this->maxChildAge);
        }

        if (!TopUtil::checkEmpty($this->minChildAge)) {
            $requestParam["min_child_age"] = TopUtil::convertBasic($this->minChildAge);
        }

        if (!TopUtil::checkEmpty($this->maxInfantAge)) {
            $requestParam["max_infant_age"] = TopUtil::convertBasic($this->maxInfantAge);
        }

        if (!TopUtil::checkEmpty($this->minInfantAge)) {
            $requestParam["min_infant_age"] = TopUtil::convertBasic($this->minInfantAge);
        }

        if (!TopUtil::checkEmpty($this->dinningDesc)) {
            $requestParam["dinning_desc"] = TopUtil::convertBasic($this->dinningDesc);
        }

        if (!TopUtil::checkEmpty($this->isStudent)) {
            $requestParam["is_student"] = TopUtil::convertBasic($this->isStudent);
        }

        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->superRpFlag)) {
            $requestParam["super_rp_flag"] = TopUtil::convertBasic($this->superRpFlag);
        }

        if (!TopUtil::checkEmpty($this->baseRpFlag)) {
            $requestParam["base_rp_flag"] = TopUtil::convertBasic($this->baseRpFlag);
        }

        if (!TopUtil::checkEmpty($this->guaranteeMode)) {
            $requestParam["guarantee_mode"] = TopUtil::convertBasic($this->guaranteeMode);
        }

        if (!TopUtil::checkEmpty($this->parentRpCode)) {
            $requestParam["parent_rp_code"] = TopUtil::convertBasic($this->parentRpCode);
        }

        if (!TopUtil::checkEmpty($this->parentRpid)) {
            $requestParam["parent_rpid"] = TopUtil::convertBasic($this->parentRpid);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        if (!TopUtil::checkEmpty($this->tagJson)) {
            $requestParam["tag_json"] = TopUtil::convertBasic($this->tagJson);
        }

        if (!TopUtil::checkEmpty($this->source)) {
            $requestParam["source"] = TopUtil::convertBasic($this->source);
        }

        if (!TopUtil::checkEmpty($this->allotmentReleaseTime)) {
            $requestParam["allotment_release_time"] = TopUtil::convertBasic($this->allotmentReleaseTime);
        }

        if (!TopUtil::checkEmpty($this->commonAllotReleaseTime)) {
            $requestParam["common_allot_release_time"] = TopUtil::convertBasic($this->commonAllotReleaseTime);
        }

        if (!TopUtil::checkEmpty($this->resourceType)) {
            $requestParam["resource_type"] = TopUtil::convertBasic($this->resourceType);
        }

        if (!TopUtil::checkEmpty($this->bottomPriceFlag)) {
            $requestParam["bottom_price_flag"] = TopUtil::convertBasic($this->bottomPriceFlag);
        }

        if (!TopUtil::checkEmpty($this->canCheckoutEnd)) {
            $requestParam["can_checkout_end"] = TopUtil::convertBasic($this->canCheckoutEnd);
        }

        if (!TopUtil::checkEmpty($this->memDiscFlag)) {
            $requestParam["mem_disc_flag"] = TopUtil::convertBasic($this->memDiscFlag);
        }

        if (!TopUtil::checkEmpty($this->memberDiscountCal)) {
            $requestParam["member_discount_cal"] = TopUtil::convertBasic($this->memberDiscountCal);
        }

        if (!TopUtil::checkEmpty($this->guestLimit)) {
            $requestParam["guest_limit"] = TopUtil::convertBasic($this->guestLimit);
        }

        if (!TopUtil::checkEmpty($this->activityType)) {
            $requestParam["activity_type"] = TopUtil::convertBasic($this->activityType);
        }

        if (!TopUtil::checkEmpty($this->onlineBookingBindingInfo)) {
            $requestParam["online_booking_binding_info"] = TopUtil::convertBasic($this->onlineBookingBindingInfo);
        }

        if (!TopUtil::checkEmpty($this->rights)) {
            $requestParam["rights"] = TopUtil::convertBasic($this->rights);
        }

        if (!TopUtil::checkEmpty($this->freeRoomChargeDstRole)) {
            $requestParam["free_room_charge_dst_role"] = TopUtil::convertBasic($this->freeRoomChargeDstRole);
        }

        if (!TopUtil::checkEmpty($this->childrenPricePolicy)) {
            $requestParam["children_price_policy"] = TopUtil::convertBasic($this->childrenPricePolicy);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


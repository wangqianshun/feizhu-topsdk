<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRateplanGetRatePlan {

    /**
        rateplan_id
     **/
    public $rpid;

    /**
        卖家自己系统的Code，简称RateCode
     **/
    public $rateplan_code;

    /**
        RP名称
     **/
    public $name;

    /**
        英文名称
     **/
    public $english_name;

    /**
        支付类型 可选值 1：预付 5：前台面付
     **/
    public $payment_type;

    /**
        早餐数量
     **/
    public $breakfast_count;

    /**
        另加早餐数量
     **/
    public $fee_breakfast_count;

    /**
        另加早餐金额
     **/
    public $fee_breakfast_amount;

    /**
        额外服务-政府税-金额（1-9999）
     **/
    public $fee_gov_tax_amount;

    /**
        额外服务-政府税-百分比（0%-99%）
     **/
    public $fee_gov_tax_percent;

    /**
        额外服务-服务费-金额（0-9999）
     **/
    public $fee_service_amount;

    /**
        额外服务-服务费-百分比（0%-99%）
     **/
    public $fee_service_percent;

    /**
        额外服务的扩展，是一段JSON
     **/
    public $extend_fee;

    /**
        最小入住天数（1-365）
     **/
    public $min_days;

    /**
        最大入住天数（1-365）
     **/
    public $max_days;

    /**
        首日入住房间数（1-99）【废弃】
     **/
    public $min_amount;

    /**
        最小提前预订小时按入住时间的23:59:59(一般认为24点)来计算
     **/
    public $min_adv_hours;

    /**
        最大提前预订小时按入住时间的23:59:59(一般认为24点)来计算
     **/
    public $max_adv_hours;

    /**
        每日生效时间默认00:00:00。生效时间＜结束时间
     **/
    public $start_time;

    /**
        每日结束时间默认24:00:00。生效时间＜结束时间
     **/
    public $end_time;

    /**
        退订政策
     **/
    public $cancel_policy;

    /**
        extend
     **/
    public $extend;

    /**
        状态
     **/
    public $status;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        扩展字段1
     **/
    public $extend_info1;

    /**
        扩展字段2
     **/
    public $extend_info2;

    /**
        扩展字段3
     **/
    public $extend_info3;

    /**
        担保类型，只支持： 0 无担保 1 峰时首晚担保 2峰时全额担保 3全天首晚担保 4全天全额担保
     **/
    public $guarantee_type;

    /**
        每日开始担保时间
     **/
    public $guarantee_start_time;

    /**
        会员等级。支持多个等级","分隔
     **/
    public $member_level;

    /**
        销售渠道。如需开通，需要申请权限。目前支持的渠道有 H:飞猪全渠道（选择H，可实现飞猪、高德、支付宝、手淘均可售卖） O:钉钉商旅 。如果有多个用","分开，比如H,O。如果需要投放其他渠道，请联系飞猪运营或者技术支持。
     **/
    public $channel;

    /**
        入住人数
     **/
    public $occupancy;

    /**
        是否是首住优惠rp。1代表是
     **/
    public $first_stay;

    /**
        是否是协议价。1代表是
     **/
    public $agreement;

    /**
        rateplan生效开始时间
     **/
    public $effective_time;

    /**
        rateplan生效截止时间
     **/
    public $deadline_time;

    /**
        0支付宝担保 1PCI担保
     **/
    public $guarantee_mode;

    /**
        协议保留房提前确认时间
     **/
    public $allotment_release_time;

    /**
        是否包房RP 1包房RP,0 非包房rp
     **/
    public $pack_room_flag;

    /**
        是否底价加价，1是底价加价,0 非底价加价rp
     **/
    public $bottom_price_flag;

    /**
        是否为学生价
     **/
    public $is_student;

    /**
        rp维度的发票信息,type:1.酒店提供发票；2.卖家提供发票,desc:发票描叙，比如：卖家包邮提供发票,格式为：{"type":1;"desc":""}
     **/
    public $invoice_content;

    /**
        来源
     **/
    public $source;

    /**
        key的含义:    non-direct-RP 表示非直连RP,      super-could-price-change-RP 表示rp的super标，打上这个tag，表明这个rateplan下单的时候支持变价，商家系统直接放开价格校验。      base-could-derived-RP 表示base rateplan标签，打上了这个tag，表明这是一个base的rateplan，基于该rateplan可以衍生出子rateplan  .        ebk-tail-room-RP 表示 ebk尾房rate plan级别标
     **/
    public $tag_json;

    /**
        sell 端特殊RP 对应的 gid
     **/
    public $sell_gid;

    /**
        可入住的最晚时间（小时房相关字段）
     **/
    public $can_checkin_end;

    /**
        可入住的最早时间（小时房相关字段）
     **/
    public $can_checkin_start;

    /**
        每日生效结束时间（仅时分秒有效）
     **/
    public $end_time_daily;

    /**
        rateplan类型 1为小时房
     **/
    public $rp_type;

    /**
        入住的开始跨度（小时房相关字段）
     **/
    public $hourage;

    /**
        父rpid
     **/
    public $parent_rpid;

    /**
        每日生效开始时间（仅时分秒有效）
     **/
    public $start_time_daily;

    /**
        普通保留房提前确认时间
     **/
    public $common_allot_release_time;

    /**
        companyAssist
     **/
    public $company_assist;

    /**
        hotelCompanyMappingDOS
     **/
    public $hotel_company_mapping_d_o_s;

    /**
        calBreakfastStr
     **/
    public $cal_breakfast_str;

    /**
        calGuaranteeStr
     **/
    public $cal_guarantee_str;

    /**
        calChangeRuleStr
     **/
    public $cal_change_rule_str;

    /**
        可离店的最晚时间（小时房相关字段）
     **/
    public $can_checkout_end;

    /**
        会员价加价规则。c:表示折扣百分比,例子8,意为会员价优惠8%,s:标识起始日期,e:表示截止日期，t:表示加价类型，0:代表折扣。会员价=售价*(1-c%)
     **/
    public $member_discount_cal;

    /**
        会员价支持标识,1表示支持会员价规则
     **/
    public $mem_disc_flag;

    /**
        酒+X特色
     **/
    public $benefits;

    /**
        活动类型: 1通兑,2秒杀,3尾房,4超级房券
     **/
    public $activity_type;

    /**
        儿童价格政策 年龄区间必须连续且有一个从0开始 max：年龄区间上限 min：年龄区间下限 t：加价类型，1-百分比金额加价，2-固定金额加价 v：加价因子，固定加价单位为分，百分比加价单位为百分比
     **/
    public $children_price_policy;


    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getRateplanCode() : string{
        return $this->rateplan_code;
    }

    public function setRateplanCode(string $rateplanCode){
        $this->rateplan_code = $rateplanCode;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getEnglishName() : string{
        return $this->english_name;
    }

    public function setEnglishName(string $englishName){
        $this->english_name = $englishName;
    }

    public function getPaymentType() : int{
        return $this->payment_type;
    }

    public function setPaymentType(int $paymentType){
        $this->payment_type = $paymentType;
    }

    public function getBreakfastCount() : int{
        return $this->breakfast_count;
    }

    public function setBreakfastCount(int $breakfastCount){
        $this->breakfast_count = $breakfastCount;
    }

    public function getFeeBreakfastCount() : int{
        return $this->fee_breakfast_count;
    }

    public function setFeeBreakfastCount(int $feeBreakfastCount){
        $this->fee_breakfast_count = $feeBreakfastCount;
    }

    public function getFeeBreakfastAmount() : int{
        return $this->fee_breakfast_amount;
    }

    public function setFeeBreakfastAmount(int $feeBreakfastAmount){
        $this->fee_breakfast_amount = $feeBreakfastAmount;
    }

    public function getFeeGovTaxAmount() : int{
        return $this->fee_gov_tax_amount;
    }

    public function setFeeGovTaxAmount(int $feeGovTaxAmount){
        $this->fee_gov_tax_amount = $feeGovTaxAmount;
    }

    public function getFeeGovTaxPercent() : int{
        return $this->fee_gov_tax_percent;
    }

    public function setFeeGovTaxPercent(int $feeGovTaxPercent){
        $this->fee_gov_tax_percent = $feeGovTaxPercent;
    }

    public function getFeeServiceAmount() : int{
        return $this->fee_service_amount;
    }

    public function setFeeServiceAmount(int $feeServiceAmount){
        $this->fee_service_amount = $feeServiceAmount;
    }

    public function getFeeServicePercent() : int{
        return $this->fee_service_percent;
    }

    public function setFeeServicePercent(int $feeServicePercent){
        $this->fee_service_percent = $feeServicePercent;
    }

    public function getExtendFee() : string{
        return $this->extend_fee;
    }

    public function setExtendFee(string $extendFee){
        $this->extend_fee = $extendFee;
    }

    public function getMinDays() : int{
        return $this->min_days;
    }

    public function setMinDays(int $minDays){
        $this->min_days = $minDays;
    }

    public function getMaxDays() : int{
        return $this->max_days;
    }

    public function setMaxDays(int $maxDays){
        $this->max_days = $maxDays;
    }

    public function getMinAmount() : int{
        return $this->min_amount;
    }

    public function setMinAmount(int $minAmount){
        $this->min_amount = $minAmount;
    }

    public function getMinAdvHours() : int{
        return $this->min_adv_hours;
    }

    public function setMinAdvHours(int $minAdvHours){
        $this->min_adv_hours = $minAdvHours;
    }

    public function getMaxAdvHours() : int{
        return $this->max_adv_hours;
    }

    public function setMaxAdvHours(int $maxAdvHours){
        $this->max_adv_hours = $maxAdvHours;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getCancelPolicy() : string{
        return $this->cancel_policy;
    }

    public function setCancelPolicy(string $cancelPolicy){
        $this->cancel_policy = $cancelPolicy;
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

    public function getCreatedTime() : string{
        return $this->created_time;
    }

    public function setCreatedTime(string $createdTime){
        $this->created_time = $createdTime;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getExtendInfo1() : string{
        return $this->extend_info1;
    }

    public function setExtendInfo1(string $extendInfo1){
        $this->extend_info1 = $extendInfo1;
    }

    public function getExtendInfo2() : string{
        return $this->extend_info2;
    }

    public function setExtendInfo2(string $extendInfo2){
        $this->extend_info2 = $extendInfo2;
    }

    public function getExtendInfo3() : string{
        return $this->extend_info3;
    }

    public function setExtendInfo3(string $extendInfo3){
        $this->extend_info3 = $extendInfo3;
    }

    public function getGuaranteeType() : int{
        return $this->guarantee_type;
    }

    public function setGuaranteeType(int $guaranteeType){
        $this->guarantee_type = $guaranteeType;
    }

    public function getGuaranteeStartTime() : string{
        return $this->guarantee_start_time;
    }

    public function setGuaranteeStartTime(string $guaranteeStartTime){
        $this->guarantee_start_time = $guaranteeStartTime;
    }

    public function getMemberLevel() : string{
        return $this->member_level;
    }

    public function setMemberLevel(string $memberLevel){
        $this->member_level = $memberLevel;
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

    public function getFirstStay() : int{
        return $this->first_stay;
    }

    public function setFirstStay(int $firstStay){
        $this->first_stay = $firstStay;
    }

    public function getAgreement() : int{
        return $this->agreement;
    }

    public function setAgreement(int $agreement){
        $this->agreement = $agreement;
    }

    public function getEffectiveTime() : string{
        return $this->effective_time;
    }

    public function setEffectiveTime(string $effectiveTime){
        $this->effective_time = $effectiveTime;
    }

    public function getDeadlineTime() : string{
        return $this->deadline_time;
    }

    public function setDeadlineTime(string $deadlineTime){
        $this->deadline_time = $deadlineTime;
    }

    public function getGuaranteeMode() : int{
        return $this->guarantee_mode;
    }

    public function setGuaranteeMode(int $guaranteeMode){
        $this->guarantee_mode = $guaranteeMode;
    }

    public function getAllotmentReleaseTime() : string{
        return $this->allotment_release_time;
    }

    public function setAllotmentReleaseTime(string $allotmentReleaseTime){
        $this->allotment_release_time = $allotmentReleaseTime;
    }

    public function getPackRoomFlag() : int{
        return $this->pack_room_flag;
    }

    public function setPackRoomFlag(int $packRoomFlag){
        $this->pack_room_flag = $packRoomFlag;
    }

    public function getBottomPriceFlag() : int{
        return $this->bottom_price_flag;
    }

    public function setBottomPriceFlag(int $bottomPriceFlag){
        $this->bottom_price_flag = $bottomPriceFlag;
    }

    public function getIsStudent() : int{
        return $this->is_student;
    }

    public function setIsStudent(int $isStudent){
        $this->is_student = $isStudent;
    }

    public function getInvoiceContent() : string{
        return $this->invoice_content;
    }

    public function setInvoiceContent(string $invoiceContent){
        $this->invoice_content = $invoiceContent;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getTagJson() : string{
        return $this->tag_json;
    }

    public function setTagJson(string $tagJson){
        $this->tag_json = $tagJson;
    }

    public function getSellGid() : int{
        return $this->sell_gid;
    }

    public function setSellGid(int $sellGid){
        $this->sell_gid = $sellGid;
    }

    public function getCanCheckinEnd() : string{
        return $this->can_checkin_end;
    }

    public function setCanCheckinEnd(string $canCheckinEnd){
        $this->can_checkin_end = $canCheckinEnd;
    }

    public function getCanCheckinStart() : string{
        return $this->can_checkin_start;
    }

    public function setCanCheckinStart(string $canCheckinStart){
        $this->can_checkin_start = $canCheckinStart;
    }

    public function getEndTimeDaily() : string{
        return $this->end_time_daily;
    }

    public function setEndTimeDaily(string $endTimeDaily){
        $this->end_time_daily = $endTimeDaily;
    }

    public function getRpType() : string{
        return $this->rp_type;
    }

    public function setRpType(string $rpType){
        $this->rp_type = $rpType;
    }

    public function getHourage() : string{
        return $this->hourage;
    }

    public function setHourage(string $hourage){
        $this->hourage = $hourage;
    }

    public function getParentRpid() : int{
        return $this->parent_rpid;
    }

    public function setParentRpid(int $parentRpid){
        $this->parent_rpid = $parentRpid;
    }

    public function getStartTimeDaily() : string{
        return $this->start_time_daily;
    }

    public function setStartTimeDaily(string $startTimeDaily){
        $this->start_time_daily = $startTimeDaily;
    }

    public function getCommonAllotReleaseTime() : string{
        return $this->common_allot_release_time;
    }

    public function setCommonAllotReleaseTime(string $commonAllotReleaseTime){
        $this->common_allot_release_time = $commonAllotReleaseTime;
    }

    public function getCompanyAssist() : int{
        return $this->company_assist;
    }

    public function setCompanyAssist(int $companyAssist){
        $this->company_assist = $companyAssist;
    }

    public function getHotelCompanyMappingDOS() : string{
        return $this->hotel_company_mapping_d_o_s;
    }

    public function setHotelCompanyMappingDOS(string $hotelCompanyMappingDOS){
        $this->hotel_company_mapping_d_o_s = $hotelCompanyMappingDOS;
    }

    public function getCalBreakfastStr() : string{
        return $this->cal_breakfast_str;
    }

    public function setCalBreakfastStr(string $calBreakfastStr){
        $this->cal_breakfast_str = $calBreakfastStr;
    }

    public function getCalGuaranteeStr() : string{
        return $this->cal_guarantee_str;
    }

    public function setCalGuaranteeStr(string $calGuaranteeStr){
        $this->cal_guarantee_str = $calGuaranteeStr;
    }

    public function getCalChangeRuleStr() : string{
        return $this->cal_change_rule_str;
    }

    public function setCalChangeRuleStr(string $calChangeRuleStr){
        $this->cal_change_rule_str = $calChangeRuleStr;
    }

    public function getCanCheckoutEnd() : string{
        return $this->can_checkout_end;
    }

    public function setCanCheckoutEnd(string $canCheckoutEnd){
        $this->can_checkout_end = $canCheckoutEnd;
    }

    public function getMemberDiscountCal() : string{
        return $this->member_discount_cal;
    }

    public function setMemberDiscountCal(string $memberDiscountCal){
        $this->member_discount_cal = $memberDiscountCal;
    }

    public function getMemDiscFlag() : int{
        return $this->mem_disc_flag;
    }

    public function setMemDiscFlag(int $memDiscFlag){
        $this->mem_disc_flag = $memDiscFlag;
    }

    public function getBenefits() : string{
        return $this->benefits;
    }

    public function setBenefits(string $benefits){
        $this->benefits = $benefits;
    }

    public function getActivityType() : string{
        return $this->activity_type;
    }

    public function setActivityType(string $activityType){
        $this->activity_type = $activityType;
    }

    public function getChildrenPricePolicy() : string{
        return $this->children_price_policy;
    }

    public function setChildrenPricePolicy(string $childrenPricePolicy){
        $this->children_price_policy = $childrenPricePolicy;
    }


}


<?php
/**
 * TOP API: taobao.xhotel.rateplan.update request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRateplanUpdateRequest
{
	/** 
	 * 活动类型。1通兑 4超级房券 8直连免房
	 **/
	private $activityType;
	
	/** 
	 * 价格类型字段：0.非协议价；1.集采协议价；如果不是协议价，请不要填写该字段。该字段有权限控制，如需使用，请联系阿里旅行运营。 如果不填写或者填写为0，默认是阿里旅行价
	 **/
	private $agreement;
	
	/** 
	 * 协议保留房提前x小时自动确认时间 比如设置为6 那么从入住当日24点往前推6小时即18:00以前可以自动确认有房，否则是待确认
	 **/
	private $allotmentReleaseTime;
	
	/** 
	 * base rp标记，1是；0否
	 **/
	private $baseRpFlag;
	
	/** 
	 * 卖点
	 **/
	private $benefits;
	
	/** 
	 * 是否底价加价，1是底价加价,0 非底价加价rp
	 **/
	private $bottomPriceFlag;
	
	/** 
	 * 在更新rateplan时，同时新增或更新早餐日历。 date：早餐政策属于具体哪一天 breakfast_count：这一天早餐的数量。>=0,<=99 如果date为空，那么会去读取startDate和endDate（格式都为"yyyy-MM-dd"），即早餐正常属于一个时间段。-1为状态早餐，和最终绑定的几人价有关，如果是一人价那么就是我一份早餐，二人价就是两份早餐。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
	 **/
	private $breakfastCal;
	
	/** 
	 * -1,状态早餐，和入住人数有关系，几人价就是几份早餐；0：不含早1：含单早2：含双早N：含N早（1-99可选）；（添加RP时为必须）
	 **/
	private $breakfastCount;
	
	/** 
	 * 最晚可选入住时间，小时房特有字段。格式为HH:mm
	 **/
	private $canCheckinEnd;
	
	/** 
	 * 最早可选入住时间，小时房特有字段。格式为HH:mm
	 **/
	private $canCheckinStart;
	
	/** 
	 * 最晚可选离店时间，小时房特有字段。格式为HH:mm
	 **/
	private $canCheckoutEnd;
	
	/** 
	 * 不推荐使用，见退改规则
	 **/
	private $cancelBeforeDay;
	
	/** 
	 * 不推荐使用，见退改规则
	 **/
	private $cancelBeforeHour;
	
	/** 
	 * 退订政策字段，是个json串，参考示例值设置改字段的值。允许变更/取消：在XX年XX月XX日XX时前取消收取Y%的手续费，100>Y>=0允许变更/取消：在入住前X小时前取消收取Y%的手续费，100>Y>=0（不超过10条）。1.表示任意退{"cancelPolicyType":1};2.表示不能退{"cancelPolicyType":2};4.从入住当天24点往前推X小时前取消收取Y%手续费，否则不可取消{"cancelPolicyType":4,"policyInfo":{"48":10,"24":20}}表示，从入住日24点往前推提前至少48小时取消，收取10%的手续费，从入住日24点往前推提前至少24小时取消，收取20%的手续费;5.从24点往前推多少小时可退{"cancelPolicyType":5,"policyInfo":{"timeBefore":6}}表示从入住日24点往前推至少6个小时即入住日18点前可免费取消;6.从入住日24点往前推，至少提前小时数扣取首晚房费{"cancelPolicyType":6,"policyInfo":{"14":1}}表示入住日24点往前推14小时，即入住日10点前取消收取首晚房费。 注意：支付类型为预付，那么可以使用所有的退订类型,但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。支持多段时间、多间夜扣款
	 **/
	private $cancelPolicy;
	
	/** 
	 * 在新增rateplan的同时新增取消政策日历。 json格式。 date：日历的某一天，格式为"yyyy-MM-dd" cancel_policy：日历某一天的价格政策。格式和限制同cancel_policy。 如果date为空，那么会读取startDate和endDate（格式都为"yyyy-MM-dd"），即取消政策属于某一个时间段。 注意：支付类型为预付，那么可以使用所有的退订类型，但是必须是非担保；支付类型为面付或者信任住并且是无担保，那么只能使用1类型的退订；支付类型为面付或者信任住并且为担保，那么只能使用2,5类型的退订；支付类型为在线预约，那么只能使用1,2,5类型的退改。如果支付类型是面付或者信任住并且为担保，那么如果传了4或者6的退订，那么会强制转成类型5。请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
	 **/
	private $cancelPolicyCal;
	
	/** 
	 * 销售渠道。如需开通，需要申请权限。目前支持的渠道有 H:飞猪全渠道（选择H，可实现飞猪、高德、支付宝、手淘均可售卖） O:钉钉商旅 。如果有多个用","分开，比如H,O。如果需要投放其他渠道，请联系飞猪运营或者技术支持。
	 **/
	private $channel;
	
	/** 
	 * 儿童价格政策 年龄区间必须连续且有一个从0开始 max：年龄区间上限 min：年龄区间下限 t：加价类型，1-百分比金额加价，2-固定金额加价 加价因子，固定加价单位为分，百分比加价单位为百分比
	 **/
	private $childrenPricePolicy;
	
	/** 
	 * 普通保留房提前x小时自动确认时间 比如设置为6 那么从入住当日24点往前推6小时即18:00以前可以自动确认有房，否则是待确认
	 **/
	private $commonAllotReleaseTime;
	
	/** 
	 * 是否企业托管RP 0-普通rp,1-企业托管rp
	 **/
	private $companyAssist;
	
	/** 
	 * 生效截止时间，用来控制此rateplan生效的截止时间，配合字段effective_time一起限定rp的有效期
	 **/
	private $deadlineTime;
	
	/** 
	 * 餐食描述
	 **/
	private $dinningDesc;
	
	/** 
	 * 价格计划名称name通过加工处理以后的值
	 **/
	private $displayName;
	
	/** 
	 * 生效开始时间，用来控制此rateplan生效的开始时间，配合字段deadline_time一起限定rp的有效期
	 **/
	private $effectiveTime;
	
	/** 
	 * 产品每日开始销售时间，start_time一定为当天时间
	 **/
	private $endTime;
	
	/** 
	 * RP的英文名称
	 **/
	private $englishName;
	
	/** 
	 * 不推荐使用
	 **/
	private $extend;
	
	/** 
	 * 不推荐使用
	 **/
	private $extendFee;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeBreakfastAmount;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeBreakfastCount;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeGovTaxAmount;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeGovTaxPercent;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeServiceAmount;
	
	/** 
	 * 不推荐使用
	 **/
	private $feeServicePercent;
	
	/** 
	 * 需申请会员权限。是否是新用户首住优惠rp。1-代表是。0-代表否。不填写代表不更新该字段。
	 **/
	private $firstStay;
	
	/** 
	 * 商业化充值类型 seller充值到卖家 hotel充值到门店
	 **/
	private $freeRoomChargeDstRole;
	
	/** 
	 * 在更新rateplan的同时，新增或更新担保日历。 date：担保日历的某一天。 guarantee:担保政策。 其中有两个属性：guaranteeType,guaranteeStartTime。 guaranteeType的可选值同guaranteeType字段，详见guaranteeType字段。guaranteeStartTime格式为"HH:mm" 。如果date为空，那么会读取startDate和endDate（格式都为"yyyy-MM-dd"），即担保政策属于某一个时间段。（如果设置了峰时担保类型，那么峰时担保时间不能为空，并且必须大于等于8点） 请注意，该字段仅能维护从当前时间开始，10年以内的数据，如果超过10年，会报错。
	 **/
	private $guaranteeCal;
	
	/** 
	 * -9999 清空担保, 2 VCC担保, 1 PCI担保，0 支付宝担保(信用住产品担保方式只能为支付宝担保)
	 **/
	private $guaranteeMode;
	
	/** 
	 * 分时担保每日开始担保时间。 （如果设置了峰时担保类型，那么峰时担保时间不能为空，并且必须大于等于8点）
	 **/
	private $guaranteeStartTime;
	
	/** 
	 * 担保类型，只支持： 0 无担保 1 峰时首晚担保 2峰时全额担保 3全天首晚担保 4全天全额担保
	 **/
	private $guaranteeType;
	
	/** 
	 * 入住人限制
	 **/
	private $guestLimit;
	
	/** 
	 * 酒店id
	 **/
	private $hid;
	
	/** 
	 * 酒店-企业-rp映射实体集合
	 **/
	private $hotelCompanyMappingDOS;
	
	/** 
	 * 小时房入住时间跨度。小时房特有字段。比如4小时的小时房，那么值为4
	 **/
	private $hourage;
	
	/** 
	 * 学生价，1：是；0：否
	 **/
	private $isStudent;
	
	/** 
	 * 最大提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表最多提前两天预定，那么如果想预定24号入住，,必须在23号零点以后下单。
	 **/
	private $maxAdvHours;
	
	/** 
	 * 儿童最大年龄(0-18)
	 **/
	private $maxChildAge;
	
	/** 
	 * 最大入住天数（1-90）。默认90,信用住最大入住天数不超过9天,小时房RP请设置为1,个别卖家支持180
	 **/
	private $maxDays;
	
	/** 
	 * 婴儿最大年龄(0-18)
	 **/
	private $maxInfantAge;
	
	/** 
	 * 会员价支持标识,1表示支持会员价规则
	 **/
	private $memDiscFlag;
	
	/** 
	 * 会员价加价规则。c:表示折扣百分比,例子8,意为会员价优惠8%,s:标识起始日期,e:表示截止日期，t:表示加价类型，0:代表折扣。会员价=售价*(1-c%)。该字段使用需要联系小二
	 **/
	private $memberDiscountCal;
	
	/** 
	 * 双方映射后的会员等级。如需开通，需要申请权限，取值范围为：1,2,3,4,5,6,none。比如飞猪F3对应商家V4,则传4.（如果有疑问请联系对接技术支持）
	 **/
	private $memberLevel;
	
	/** 
	 * 最小提前预定小时数，从入住当天的24点往前计算。例如如果这个字段设置了48，代表必须至少提前两天预定，那么如果想预定24号入住，,必须在23号零点前下单。
	 **/
	private $minAdvHours;
	
	/** 
	 * 首日入住房间数（1-99）。默认1。【废弃】
	 **/
	private $minAmount;
	
	/** 
	 * 儿童最小年龄(0-18)
	 **/
	private $minChildAge;
	
	/** 
	 * 最小入住天数（1-90）。默认1,小时房RP请设置为1
	 **/
	private $minDays;
	
	/** 
	 * 婴儿最小年龄(0-18)
	 **/
	private $minInfantAge;
	
	/** 
	 * 在淘宝搜索页面展示的房价名称；（添加RP时为必须）。注意该名称不要包含早餐相关信息，如果想维护早餐信息，请设置breakfast_count字段即可。
	 **/
	private $name;
	
	/** 
	 * 不推荐使用
	 **/
	private $occupancy;
	
	/** 
	 * 在线预约关联关系推送，priceRuleNumber：加价规则序号
	 **/
	private $onlineBookingBindingInfo;
	
	/** 
	 * operator
	 **/
	private $operator;
	
	/** 
	 * 外部酒店id
	 **/
	private $outHid;
	
	/** 
	 * 外部房型id
	 **/
	private $outRid;
	
	/** 
	 * 是否包房RP 1包房RP,0 非包房rp
	 **/
	private $packRoomFlag;
	
	/** 
	 * 父rpcode，使用场景：当一个rp发布变价rate的时候，用于下单时候传递约定的rpcode给外部
	 **/
	private $parentRpCode;
	
	/** 
	 * 父rpid，使用场景：当一个rp发布变价rate的时候，记录父rp信息，用于下单时候传递约定的rpcode给外部
	 **/
	private $parentRpid;
	
	/** 
	 * 支付类型，只支持：1：预付5：现付6: 信用住7:在线预约8:在线预约信用住。其中5,6,7,8三种类型需要申请权限
	 **/
	private $paymentType;
	
	/** 
	 * 商家价格政策编码
	 **/
	private $rateplanCode;
	
	/** 
	 * 商品来源渠道。1：直采（直连酒店PMS）, 1-1：直采（非直连） 2：携程系, 3：美团, 4：国内旅行社分销, 5：海外供应商。非酒店资源方卖家必须提供商品来源渠道，携程系包括携程、去哪儿、艺龙。
	 **/
	private $resourceType;
	
	/** 
	 * 房型id
	 **/
	private $rid;
	
	/** 
	 * rp的权益信息。1. 额外积分 2. 优惠价格 3. 套餐权益 4.行政礼遇
	 **/
	private $rights;
	
	/** 
	 * rp类型，1为小时房。目前只支持小时房。如果不是小时房rateplan,则不要填写。如果想要清空该字段可以传入none
	 **/
	private $rpType;
	
	/** 
	 * 不推荐使用，使用ratePlanCode来标识要修改的RP
	 **/
	private $rpid;
	
	/** 
	 * 来源
	 **/
	private $source;
	
	/** 
	 * 产品每日开始销售时间，start_time一定为当天时间
	 **/
	private $startTime;
	
	/** 
	 * 1：开启（默认）2：关闭。如果没传值那么默认默认值为1；（添加RP时为必须）
	 **/
	private $status;
	
	/** 
	 * super rp标记，1是；0否
	 **/
	private $superRpFlag;
	
	/** 
	 * 更新RP时的 打标和去标 需求, 0 就是 去标, 1 就是打标,    key的含义:    non-direct-RP 表示非直连RP,    super-could-price-change-RP 表示rp的super标，打上这个tag，表明这个rateplan下单的时候支持变价，商家系统直接放开价格校验。   base-could-derived-RP 表示base rateplan标签，打上了这个tag，表明这是一个base的rateplan，基于该rateplan可以衍生出子rateplan,       ebk-tail-room-RP 表示 ebk尾房rate plan级别标, free-room 表示免房商品
	 **/
	private $tagJson;
	
	/** 
	 * 系统商，一般不用填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setActivityType($activityType)
	{
		$this->activityType = $activityType;
		$this->apiParas["activity_type"] = $activityType;
	}

	public function getActivityType()
	{
		return $this->activityType;
	}

	public function setAgreement($agreement)
	{
		$this->agreement = $agreement;
		$this->apiParas["agreement"] = $agreement;
	}

	public function getAgreement()
	{
		return $this->agreement;
	}

	public function setAllotmentReleaseTime($allotmentReleaseTime)
	{
		$this->allotmentReleaseTime = $allotmentReleaseTime;
		$this->apiParas["allotment_release_time"] = $allotmentReleaseTime;
	}

	public function getAllotmentReleaseTime()
	{
		return $this->allotmentReleaseTime;
	}

	public function setBaseRpFlag($baseRpFlag)
	{
		$this->baseRpFlag = $baseRpFlag;
		$this->apiParas["base_rp_flag"] = $baseRpFlag;
	}

	public function getBaseRpFlag()
	{
		return $this->baseRpFlag;
	}

	public function setBenefits($benefits)
	{
		$this->benefits = $benefits;
		$this->apiParas["benefits"] = $benefits;
	}

	public function getBenefits()
	{
		return $this->benefits;
	}

	public function setBottomPriceFlag($bottomPriceFlag)
	{
		$this->bottomPriceFlag = $bottomPriceFlag;
		$this->apiParas["bottom_price_flag"] = $bottomPriceFlag;
	}

	public function getBottomPriceFlag()
	{
		return $this->bottomPriceFlag;
	}

	public function setBreakfastCal($breakfastCal)
	{
		$this->breakfastCal = $breakfastCal;
		$this->apiParas["breakfast_cal"] = $breakfastCal;
	}

	public function getBreakfastCal()
	{
		return $this->breakfastCal;
	}

	public function setBreakfastCount($breakfastCount)
	{
		$this->breakfastCount = $breakfastCount;
		$this->apiParas["breakfast_count"] = $breakfastCount;
	}

	public function getBreakfastCount()
	{
		return $this->breakfastCount;
	}

	public function setCanCheckinEnd($canCheckinEnd)
	{
		$this->canCheckinEnd = $canCheckinEnd;
		$this->apiParas["can_checkin_end"] = $canCheckinEnd;
	}

	public function getCanCheckinEnd()
	{
		return $this->canCheckinEnd;
	}

	public function setCanCheckinStart($canCheckinStart)
	{
		$this->canCheckinStart = $canCheckinStart;
		$this->apiParas["can_checkin_start"] = $canCheckinStart;
	}

	public function getCanCheckinStart()
	{
		return $this->canCheckinStart;
	}

	public function setCanCheckoutEnd($canCheckoutEnd)
	{
		$this->canCheckoutEnd = $canCheckoutEnd;
		$this->apiParas["can_checkout_end"] = $canCheckoutEnd;
	}

	public function getCanCheckoutEnd()
	{
		return $this->canCheckoutEnd;
	}

	public function setCancelBeforeDay($cancelBeforeDay)
	{
		$this->cancelBeforeDay = $cancelBeforeDay;
		$this->apiParas["cancel_before_day"] = $cancelBeforeDay;
	}

	public function getCancelBeforeDay()
	{
		return $this->cancelBeforeDay;
	}

	public function setCancelBeforeHour($cancelBeforeHour)
	{
		$this->cancelBeforeHour = $cancelBeforeHour;
		$this->apiParas["cancel_before_hour"] = $cancelBeforeHour;
	}

	public function getCancelBeforeHour()
	{
		return $this->cancelBeforeHour;
	}

	public function setCancelPolicy($cancelPolicy)
	{
		$this->cancelPolicy = $cancelPolicy;
		$this->apiParas["cancel_policy"] = $cancelPolicy;
	}

	public function getCancelPolicy()
	{
		return $this->cancelPolicy;
	}

	public function setCancelPolicyCal($cancelPolicyCal)
	{
		$this->cancelPolicyCal = $cancelPolicyCal;
		$this->apiParas["cancel_policy_cal"] = $cancelPolicyCal;
	}

	public function getCancelPolicyCal()
	{
		return $this->cancelPolicyCal;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setChildrenPricePolicy($childrenPricePolicy)
	{
		$this->childrenPricePolicy = $childrenPricePolicy;
		$this->apiParas["children_price_policy"] = $childrenPricePolicy;
	}

	public function getChildrenPricePolicy()
	{
		return $this->childrenPricePolicy;
	}

	public function setCommonAllotReleaseTime($commonAllotReleaseTime)
	{
		$this->commonAllotReleaseTime = $commonAllotReleaseTime;
		$this->apiParas["common_allot_release_time"] = $commonAllotReleaseTime;
	}

	public function getCommonAllotReleaseTime()
	{
		return $this->commonAllotReleaseTime;
	}

	public function setCompanyAssist($companyAssist)
	{
		$this->companyAssist = $companyAssist;
		$this->apiParas["company_assist"] = $companyAssist;
	}

	public function getCompanyAssist()
	{
		return $this->companyAssist;
	}

	public function setDeadlineTime($deadlineTime)
	{
		$this->deadlineTime = $deadlineTime;
		$this->apiParas["deadline_time"] = $deadlineTime;
	}

	public function getDeadlineTime()
	{
		return $this->deadlineTime;
	}

	public function setDinningDesc($dinningDesc)
	{
		$this->dinningDesc = $dinningDesc;
		$this->apiParas["dinning_desc"] = $dinningDesc;
	}

	public function getDinningDesc()
	{
		return $this->dinningDesc;
	}

	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		$this->apiParas["display_name"] = $displayName;
	}

	public function getDisplayName()
	{
		return $this->displayName;
	}

	public function setEffectiveTime($effectiveTime)
	{
		$this->effectiveTime = $effectiveTime;
		$this->apiParas["effective_time"] = $effectiveTime;
	}

	public function getEffectiveTime()
	{
		return $this->effectiveTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setEnglishName($englishName)
	{
		$this->englishName = $englishName;
		$this->apiParas["english_name"] = $englishName;
	}

	public function getEnglishName()
	{
		return $this->englishName;
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

	public function setExtendFee($extendFee)
	{
		$this->extendFee = $extendFee;
		$this->apiParas["extend_fee"] = $extendFee;
	}

	public function getExtendFee()
	{
		return $this->extendFee;
	}

	public function setFeeBreakfastAmount($feeBreakfastAmount)
	{
		$this->feeBreakfastAmount = $feeBreakfastAmount;
		$this->apiParas["fee_breakfast_amount"] = $feeBreakfastAmount;
	}

	public function getFeeBreakfastAmount()
	{
		return $this->feeBreakfastAmount;
	}

	public function setFeeBreakfastCount($feeBreakfastCount)
	{
		$this->feeBreakfastCount = $feeBreakfastCount;
		$this->apiParas["fee_breakfast_count"] = $feeBreakfastCount;
	}

	public function getFeeBreakfastCount()
	{
		return $this->feeBreakfastCount;
	}

	public function setFeeGovTaxAmount($feeGovTaxAmount)
	{
		$this->feeGovTaxAmount = $feeGovTaxAmount;
		$this->apiParas["fee_gov_tax_amount"] = $feeGovTaxAmount;
	}

	public function getFeeGovTaxAmount()
	{
		return $this->feeGovTaxAmount;
	}

	public function setFeeGovTaxPercent($feeGovTaxPercent)
	{
		$this->feeGovTaxPercent = $feeGovTaxPercent;
		$this->apiParas["fee_gov_tax_percent"] = $feeGovTaxPercent;
	}

	public function getFeeGovTaxPercent()
	{
		return $this->feeGovTaxPercent;
	}

	public function setFeeServiceAmount($feeServiceAmount)
	{
		$this->feeServiceAmount = $feeServiceAmount;
		$this->apiParas["fee_service_amount"] = $feeServiceAmount;
	}

	public function getFeeServiceAmount()
	{
		return $this->feeServiceAmount;
	}

	public function setFeeServicePercent($feeServicePercent)
	{
		$this->feeServicePercent = $feeServicePercent;
		$this->apiParas["fee_service_percent"] = $feeServicePercent;
	}

	public function getFeeServicePercent()
	{
		return $this->feeServicePercent;
	}

	public function setFirstStay($firstStay)
	{
		$this->firstStay = $firstStay;
		$this->apiParas["first_stay"] = $firstStay;
	}

	public function getFirstStay()
	{
		return $this->firstStay;
	}

	public function setFreeRoomChargeDstRole($freeRoomChargeDstRole)
	{
		$this->freeRoomChargeDstRole = $freeRoomChargeDstRole;
		$this->apiParas["free_room_charge_dst_role"] = $freeRoomChargeDstRole;
	}

	public function getFreeRoomChargeDstRole()
	{
		return $this->freeRoomChargeDstRole;
	}

	public function setGuaranteeCal($guaranteeCal)
	{
		$this->guaranteeCal = $guaranteeCal;
		$this->apiParas["guarantee_cal"] = $guaranteeCal;
	}

	public function getGuaranteeCal()
	{
		return $this->guaranteeCal;
	}

	public function setGuaranteeMode($guaranteeMode)
	{
		$this->guaranteeMode = $guaranteeMode;
		$this->apiParas["guarantee_mode"] = $guaranteeMode;
	}

	public function getGuaranteeMode()
	{
		return $this->guaranteeMode;
	}

	public function setGuaranteeStartTime($guaranteeStartTime)
	{
		$this->guaranteeStartTime = $guaranteeStartTime;
		$this->apiParas["guarantee_start_time"] = $guaranteeStartTime;
	}

	public function getGuaranteeStartTime()
	{
		return $this->guaranteeStartTime;
	}

	public function setGuaranteeType($guaranteeType)
	{
		$this->guaranteeType = $guaranteeType;
		$this->apiParas["guarantee_type"] = $guaranteeType;
	}

	public function getGuaranteeType()
	{
		return $this->guaranteeType;
	}

	public function setGuestLimit($guestLimit)
	{
		$this->guestLimit = $guestLimit;
		$this->apiParas["guest_limit"] = $guestLimit;
	}

	public function getGuestLimit()
	{
		return $this->guestLimit;
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

	public function setHotelCompanyMappingDOS($hotelCompanyMappingDOS)
	{
		$this->hotelCompanyMappingDOS = $hotelCompanyMappingDOS;
		$this->apiParas["hotel_company_mapping_d_o_s"] = $hotelCompanyMappingDOS;
	}

	public function getHotelCompanyMappingDOS()
	{
		return $this->hotelCompanyMappingDOS;
	}

	public function setHourage($hourage)
	{
		$this->hourage = $hourage;
		$this->apiParas["hourage"] = $hourage;
	}

	public function getHourage()
	{
		return $this->hourage;
	}

	public function setIsStudent($isStudent)
	{
		$this->isStudent = $isStudent;
		$this->apiParas["is_student"] = $isStudent;
	}

	public function getIsStudent()
	{
		return $this->isStudent;
	}

	public function setMaxAdvHours($maxAdvHours)
	{
		$this->maxAdvHours = $maxAdvHours;
		$this->apiParas["max_adv_hours"] = $maxAdvHours;
	}

	public function getMaxAdvHours()
	{
		return $this->maxAdvHours;
	}

	public function setMaxChildAge($maxChildAge)
	{
		$this->maxChildAge = $maxChildAge;
		$this->apiParas["max_child_age"] = $maxChildAge;
	}

	public function getMaxChildAge()
	{
		return $this->maxChildAge;
	}

	public function setMaxDays($maxDays)
	{
		$this->maxDays = $maxDays;
		$this->apiParas["max_days"] = $maxDays;
	}

	public function getMaxDays()
	{
		return $this->maxDays;
	}

	public function setMaxInfantAge($maxInfantAge)
	{
		$this->maxInfantAge = $maxInfantAge;
		$this->apiParas["max_infant_age"] = $maxInfantAge;
	}

	public function getMaxInfantAge()
	{
		return $this->maxInfantAge;
	}

	public function setMemDiscFlag($memDiscFlag)
	{
		$this->memDiscFlag = $memDiscFlag;
		$this->apiParas["mem_disc_flag"] = $memDiscFlag;
	}

	public function getMemDiscFlag()
	{
		return $this->memDiscFlag;
	}

	public function setMemberDiscountCal($memberDiscountCal)
	{
		$this->memberDiscountCal = $memberDiscountCal;
		$this->apiParas["member_discount_cal"] = $memberDiscountCal;
	}

	public function getMemberDiscountCal()
	{
		return $this->memberDiscountCal;
	}

	public function setMemberLevel($memberLevel)
	{
		$this->memberLevel = $memberLevel;
		$this->apiParas["member_level"] = $memberLevel;
	}

	public function getMemberLevel()
	{
		return $this->memberLevel;
	}

	public function setMinAdvHours($minAdvHours)
	{
		$this->minAdvHours = $minAdvHours;
		$this->apiParas["min_adv_hours"] = $minAdvHours;
	}

	public function getMinAdvHours()
	{
		return $this->minAdvHours;
	}

	public function setMinAmount($minAmount)
	{
		$this->minAmount = $minAmount;
		$this->apiParas["min_amount"] = $minAmount;
	}

	public function getMinAmount()
	{
		return $this->minAmount;
	}

	public function setMinChildAge($minChildAge)
	{
		$this->minChildAge = $minChildAge;
		$this->apiParas["min_child_age"] = $minChildAge;
	}

	public function getMinChildAge()
	{
		return $this->minChildAge;
	}

	public function setMinDays($minDays)
	{
		$this->minDays = $minDays;
		$this->apiParas["min_days"] = $minDays;
	}

	public function getMinDays()
	{
		return $this->minDays;
	}

	public function setMinInfantAge($minInfantAge)
	{
		$this->minInfantAge = $minInfantAge;
		$this->apiParas["min_infant_age"] = $minInfantAge;
	}

	public function getMinInfantAge()
	{
		return $this->minInfantAge;
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

	public function setOccupancy($occupancy)
	{
		$this->occupancy = $occupancy;
		$this->apiParas["occupancy"] = $occupancy;
	}

	public function getOccupancy()
	{
		return $this->occupancy;
	}

	public function setOnlineBookingBindingInfo($onlineBookingBindingInfo)
	{
		$this->onlineBookingBindingInfo = $onlineBookingBindingInfo;
		$this->apiParas["online_booking_binding_info"] = $onlineBookingBindingInfo;
	}

	public function getOnlineBookingBindingInfo()
	{
		return $this->onlineBookingBindingInfo;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
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

	public function setOutRid($outRid)
	{
		$this->outRid = $outRid;
		$this->apiParas["out_rid"] = $outRid;
	}

	public function getOutRid()
	{
		return $this->outRid;
	}

	public function setPackRoomFlag($packRoomFlag)
	{
		$this->packRoomFlag = $packRoomFlag;
		$this->apiParas["pack_room_flag"] = $packRoomFlag;
	}

	public function getPackRoomFlag()
	{
		return $this->packRoomFlag;
	}

	public function setParentRpCode($parentRpCode)
	{
		$this->parentRpCode = $parentRpCode;
		$this->apiParas["parent_rp_code"] = $parentRpCode;
	}

	public function getParentRpCode()
	{
		return $this->parentRpCode;
	}

	public function setParentRpid($parentRpid)
	{
		$this->parentRpid = $parentRpid;
		$this->apiParas["parent_rpid"] = $parentRpid;
	}

	public function getParentRpid()
	{
		return $this->parentRpid;
	}

	public function setPaymentType($paymentType)
	{
		$this->paymentType = $paymentType;
		$this->apiParas["payment_type"] = $paymentType;
	}

	public function getPaymentType()
	{
		return $this->paymentType;
	}

	public function setRateplanCode($rateplanCode)
	{
		$this->rateplanCode = $rateplanCode;
		$this->apiParas["rateplan_code"] = $rateplanCode;
	}

	public function getRateplanCode()
	{
		return $this->rateplanCode;
	}

	public function setResourceType($resourceType)
	{
		$this->resourceType = $resourceType;
		$this->apiParas["resource_type"] = $resourceType;
	}

	public function getResourceType()
	{
		return $this->resourceType;
	}

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function setRights($rights)
	{
		$this->rights = $rights;
		$this->apiParas["rights"] = $rights;
	}

	public function getRights()
	{
		return $this->rights;
	}

	public function setRpType($rpType)
	{
		$this->rpType = $rpType;
		$this->apiParas["rp_type"] = $rpType;
	}

	public function getRpType()
	{
		return $this->rpType;
	}

	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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

	public function setSuperRpFlag($superRpFlag)
	{
		$this->superRpFlag = $superRpFlag;
		$this->apiParas["super_rp_flag"] = $superRpFlag;
	}

	public function getSuperRpFlag()
	{
		return $this->superRpFlag;
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
		return "taobao.xhotel.rateplan.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->cancelBeforeHour,50,"cancelBeforeHour");
		RequestCheckUtil::checkMaxLength($this->cancelPolicy,500,"cancelPolicy");
		RequestCheckUtil::checkMaxLength($this->channel,20,"channel");
		RequestCheckUtil::checkMaxLength($this->endTime,8,"endTime");
		RequestCheckUtil::checkMaxLength($this->englishName,60,"englishName");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->extendFee,500,"extendFee");
		RequestCheckUtil::checkMaxLength($this->memberLevel,20,"memberLevel");
		RequestCheckUtil::checkMaxLength($this->name,64,"name");
		RequestCheckUtil::checkMaxLength($this->rateplanCode,64,"rateplanCode");
		RequestCheckUtil::checkMaxLength($this->startTime,8,"startTime");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

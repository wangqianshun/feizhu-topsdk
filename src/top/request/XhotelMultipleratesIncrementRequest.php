<?php
/**
 * TOP API: taobao.xhotel.multiplerates.increment request
 * 
 * @author auto create
 * @since 1.0, 2026.07.02
 */
class XhotelMultipleratesIncrementRequest
{
	/** 
	 * 批量全量修改价格和库存信息,会以请求参数中的数据覆盖掉原来报价库存数据。A:useRoomInventory:是否使用room级别共享库存，可选值 true false 2、false时：使用rate级别私有库存，此时如果填写了库存，那么会写入库存表。B:date 日期必须为 T---T+180 日内的日期（T为当天），且不能重复C:basePrice 基本价格 int类型 取值范围1-99999999 单位为分D:quota 库存 int 类型 取值范围 0-999（数量库存） 支持状态库存， 60000(状态库存关) 61000(状态库存开);E:occupancy为入住人数，范围为1~10;F:lengthofStay为连住天数，范围为1~10；G:taxAndFee为总税费；H：taxes:税费明细，是一个数组，每个数组元素是一个包含税费信息的对象。包括：taxId：税费 ID，类型：int，必填：是，具体枚举：taxId=0=其他税（OTHER），taxId=3=住宿税（RENTAL_TAX）；type：税费类型，类型：string、必填：是，可选值：Mandatory：预付税费（包含在总价中），Excluded：到店税费（不包含在总价中）；valueType：费率类型，类型：string，必填：否，可选值：percentage：百分比、fixed：固定金额；amount：具体金额，类型：string，必填：否，单位：分/百分比。 注意：每个taxes数组里的含税金额相加要与taxAndFee的值一致，否则将会报错；当taxAndFee字段为空时则不会校验；当某税费不知道金额时则可不传taxAndFee字段，仅taxes字段里传对应信息即可；未知税费，请在taxId里选择其他税类，住宿税只能传1个，当传多个时飞猪则以第一个为主，若因传多个导致的问题，需由商家自行负责。 I:addBedPrice为加床价；J:addPersonPrice为加人价；KrateSwitch为开关房状态，1为开房，0为关房。L:支持outRoomId和ratePlanCode来更新报价库存。M:childnum为儿童人数。N:infantnum为婴儿人数。O:ckinSwitch为入住开关(0，关闭；1，打开) P：ckoutSwitch为离店开关 (0，关闭；1，打开) Q:lockStartTime锁库存开始时间 R:lockEndTime锁库存截止时间。 childRule：儿童价规则。其中calculateType为计算类型1为固定金额，2为房费的百分比；ageRange为适用儿童的年龄范围，格式为：2~10，即适用2到10岁的儿童；childRange适用几位儿童，格式为1即适用1位儿童；feeType费用类型，如果calculateType=1那么feeType存一固定金额，单位为分，如果calculateType=2那么feeType存房费的百分比，格式为0.2。childAges：儿童年龄范围，格式为2~10，意味着所有儿童价格规则中的适用儿童年龄必须在这个范围之内。rateCalDataList:存储日历化早餐和退改。breakfastCal、cancelPolicyCal格式与原rp格式相同。
	 **/
	private $rateQuotaMap;
	
	/** 
	 * 是一个JSONArray 字符串。actionType :操作类型,枚举 :BOUND:绑定,UNBOUND解绑; outXcode 外部Code直连场景下需求的x元素编码 ; subTypeCode x 元素子类目；name:x元素名称;productPic: 图片;{url图片url;mainPic是否为主图};poi:位置信息;subProducts:X元素子产品信息;{name:子产品名称,amount:数量,price:单价}priceValue价格信息;{retailPrice:门市价,sellingPricet:售卖价,currencyCode:销售币种默认CNY;valueCertificatePic价值凭证图片}；saleRule售卖规则;{receptionTime:接待时间段:支持多个,adultAmount建议成人数量,childAmount建议儿童数量,childHeight儿童身高限制;childAge儿童身高限制;bookingRule预约类型,枚举0无需预约/1需预约;bookingAmount最小预约单位(预约类型为1时有);bookingUnit预约单位,枚举天、小时(预约类型为1时有);contactPhone联系电话;acquireType获取方式,枚举1:酒店前台,2:其他;effectiveType是否入住期间有效,枚举,0入住期间,1入住首日;additionalReminder补充提醒};actionDimension使用维度 1:每间房维度 2:每间夜维度;startDateTime上架日期;displayStartTime权益可用开始时间;displayEndTime权益可用结束时间;amount打包数量;childAmount儿童打包数量；nop：如果推送x元素包含早餐，nop建议与早餐份数保持一致；若加赠早餐场景下，份数可自行控制；子产品份数：子产品中若包含早餐，份数建议与rate_quota_map中的nop一致；若加赠早餐场景下，份数可自行控制。
	 **/
	private $standardXitemInfos;
	
	private $apiParas = array();
	
	public function setRateQuotaMap($rateQuotaMap)
	{
		$this->rateQuotaMap = $rateQuotaMap;
		$this->apiParas["rate_quota_map"] = $rateQuotaMap;
	}

	public function getRateQuotaMap()
	{
		return $this->rateQuotaMap;
	}

	public function setStandardXitemInfos($standardXitemInfos)
	{
		$this->standardXitemInfos = $standardXitemInfos;
		$this->apiParas["standard_xitem_infos"] = $standardXitemInfos;
	}

	public function getStandardXitemInfos()
	{
		return $this->standardXitemInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.multiplerates.increment";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rateQuotaMap,"rateQuotaMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

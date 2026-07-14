<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRatesUpdateRequest {

    /**
        批量修改价格和房价专有库存信息，json格式,可同时修改多套房型+价格计划的价格：A:use_room_inventory:是否使用房型共享库存，可选值 true false 1、true时：使用房型共享库存 2、false时：使用房价专有库存，此时要求房价专有库存必填。B:date 日期必须为 T-1 --- T+180 日内的日期（T为当天），不能重复。 C:price 价格 int类型 取值范围1-99999999 单位为分D:quota 房价专有库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) E:status 价格开关，0为关，1为开。 F:taxes:税费明细，是一个数组，每个数组元素是一个包含税费信息的对象。包括：taxId：税费 ID，类型：int，必填：是，具体枚举：taxId=0=其他税（OTHER），taxId=3=住宿税（RENTAL_TAX）；type：税费类型，类型：string、必填：是，可选值：Mandatory：预付税费（包含在总价中），Excluded：到店税费（不包含在总价中）；valueType：费率类型，类型：string，必填：否，可选值：percentage：百分比、fixed：固定金额；amount：具体金额，类型：string，必填：否，单位：分/百分比。 注意：每个taxes数组里的含税金额相加要与tax的值一致，否则将会报错，当tax字段为空时则不会校验；当某税费不知道金额时则可不传tax字段，仅taxes字段里传对应信息即可；未知税费，请在taxId里选择其他税类，住宿税只能传1个，当传多个时飞猪则以第一个为主，若因传多个导致的问题，需由商家自行负责。 lock_start_time为锁库存开始时间，lock_end_time为锁库存结束时间，如果当前时间在这个时间范围内，那么不允许修改库存。
     **/
    private $rateInventoryPriceMap;

    /**
        是一个JSONArray 字符串。actionType :操作类型,枚举 :BOUND:绑定,UNBOUND解绑; outXcode 外部Code直连场景下需求的x元素编码 ; subTypeCode x 元素子类目；name:x元素名称;productPic: 图片;{url图片url;mainPic是否为主图};poi:位置信息;subProducts:X元素子产品信息;{name:子产品名称,amount:数量,price:单价}priceValue价格信息;{retailPrice:门市价,sellingPricet:售卖价,currencyCode:销售币种默认CNY;valueCertificatePic价值凭证图片}；saleRule售卖规则;{receptionTime:接待时间段:支持多个,adultAmount建议成人数量,childAmount建议儿童数量,childHeight儿童身高限制;childAge儿童身高限制;bookingRule预约类型,枚举0无需预约/1需预约;bookingAmount最小预约单位(预约类型为1时有);bookingUnit预约单位,枚举天、小时(预约类型为1时有);contactPhone联系电话;acquireType获取方式,枚举1:酒店前台,2:其他;effectiveType是否入住期间有效,枚举,0入住期间,1入住首日;additionalReminder补充提醒};actionDimension使用维度 1:每间房维度 2:每间夜维度;startDateTime上架日期;displayStartTime权益可用开始时间;displayEndTime权益可用结束时间;amount打包数量;childAmount儿童打包数量；nop：如果推送x元素包含早餐，nop建议与早餐份数保持一致；若加赠早餐场景下，份数可自行控制；子产品份数：子产品中若包含早餐，份数建议与rate_quota_map中的nop一致；若加赠早餐场景下，份数可自行控制。
     **/
    private $standardXitemInfos;


    public function getRateInventoryPriceMap() : string{
        return $this->rateInventoryPriceMap;
    }

    public function setRateInventoryPriceMap(string $rateInventoryPriceMap){
        $this->rateInventoryPriceMap = $rateInventoryPriceMap;
    }

    public function getStandardXitemInfos() : string{
        return $this->standardXitemInfos;
    }

    public function setStandardXitemInfos(string $standardXitemInfos){
        $this->standardXitemInfos = $standardXitemInfos;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rates.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rateInventoryPriceMap)) {
            $requestParam["rate_inventory_price_map"] = TopUtil::convertBasic($this->rateInventoryPriceMap);
        }

        if (!TopUtil::checkEmpty($this->standardXitemInfos)) {
            $requestParam["standard_xitem_infos"] = TopUtil::convertBasic($this->standardXitemInfos);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


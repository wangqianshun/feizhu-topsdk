<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionCreatePromotionRule {

    /**
        连住天数,仅【连住优惠】活动类型需要传值且必须大于等于1，其他活动传值不生效。
     **/
    public $length_of_stay;

    /**
        预定日期
     **/
    public $book_date;

    /**
        入住时间的适用星期，周一到周日，适用1，不适用是0, 不支持所有日期都设置0
     **/
    public $stay_weekdays;

    /**
        提前预订天数，仅【早订优惠】 时需要传值,需要大于等于1，其他活动传值不生效。
     **/
    public $min_advance_day;

    /**
        限时特惠、今夜甩卖（尾房）必传预订时间点，其他活动类型传了不生效。
     **/
    public $book_time;

    /**
        不生效日期，支持传多段，最大限制10段
     **/
    public $un_stay_date;

    /**
        优惠值，与discount_type 使用。 优惠20%，discount_value = 20，discount_type = 1；立减20元，discount_value = 2000，discount_type = 2；表示立减20元，原价200元，优惠后的金额为180元。
     **/
    public $discount_value;

    /**
        促销限制的入住时间范围
     **/
    public $stay_date;

    /**
        尾房生效时间，只针对当日库存生效
     **/
    public $over_night_time;


    public function getLengthOfStay() : int{
        return $this->length_of_stay;
    }

    public function setLengthOfStay(int $lengthOfStay){
        $this->length_of_stay = $lengthOfStay;
    }

    public function getBookDate() : TaobaoXhotelPromotionCreateDateRange{
        return $this->book_date;
    }

    public function setBookDate(TaobaoXhotelPromotionCreateDateRange $bookDate){
        $this->book_date = $bookDate;
    }

    public function getStayWeekdays() : array{
        return $this->stay_weekdays;
    }

    public function setStayWeekdays(array $stayWeekdays){
        $this->stay_weekdays = $stayWeekdays;
    }

    public function getMinAdvanceDay() : int{
        return $this->min_advance_day;
    }

    public function setMinAdvanceDay(int $minAdvanceDay){
        $this->min_advance_day = $minAdvanceDay;
    }

    public function getBookTime() : TaobaoXhotelPromotionCreateTimeRange{
        return $this->book_time;
    }

    public function setBookTime(TaobaoXhotelPromotionCreateTimeRange $bookTime){
        $this->book_time = $bookTime;
    }

    public function getUnStayDate() : array{
        return $this->un_stay_date;
    }

    public function setUnStayDate(array $unStayDate){
        $this->un_stay_date = $unStayDate;
    }

    public function getDiscountValue() : int{
        return $this->discount_value;
    }

    public function setDiscountValue(int $discountValue){
        $this->discount_value = $discountValue;
    }

    public function getStayDate() : TaobaoXhotelPromotionCreateDateRange{
        return $this->stay_date;
    }

    public function setStayDate(TaobaoXhotelPromotionCreateDateRange $stayDate){
        $this->stay_date = $stayDate;
    }

    public function getOverNightTime() : TaobaoXhotelPromotionCreateTimeRange{
        return $this->over_night_time;
    }

    public function setOverNightTime(TaobaoXhotelPromotionCreateTimeRange $overNightTime){
        $this->over_night_time = $overNightTime;
    }


}


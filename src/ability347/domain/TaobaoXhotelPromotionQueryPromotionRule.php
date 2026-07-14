<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryPromotionRule {

    /**
        连住天数
     **/
    public $length_of_stay;

    /**
        预定日期
     **/
    public $book_date;

    /**
        入住时间的适用星期
     **/
    public $stay_weekdays;

    /**
        提前预订天数
     **/
    public $min_advance_day;

    /**
        预定时间
     **/
    public $book_time;

    /**
        不生效日期
     **/
    public $un_stay_date;

    /**
        1 Fixed:固定金额,单位分，1000;0Percentage: 折扣比例，20,表示优惠20%，比如100元，优惠20%后为 80元。
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

    public function getBookDate() : TaobaoXhotelPromotionQueryDateRange{
        return $this->book_date;
    }

    public function setBookDate(TaobaoXhotelPromotionQueryDateRange $bookDate){
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

    public function getBookTime() : TaobaoXhotelPromotionQueryTimeRange{
        return $this->book_time;
    }

    public function setBookTime(TaobaoXhotelPromotionQueryTimeRange $bookTime){
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

    public function getStayDate() : TaobaoXhotelPromotionQueryDateRange{
        return $this->stay_date;
    }

    public function setStayDate(TaobaoXhotelPromotionQueryDateRange $stayDate){
        $this->stay_date = $stayDate;
    }

    public function getOverNightTime() : TaobaoXhotelPromotionQueryTimeRange{
        return $this->over_night_time;
    }

    public function setOverNightTime(TaobaoXhotelPromotionQueryTimeRange $overNightTime){
        $this->over_night_time = $overNightTime;
    }


}


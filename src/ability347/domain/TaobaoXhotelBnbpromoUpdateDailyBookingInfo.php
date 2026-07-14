<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdateDailyBookingInfo {

    /**
        一个星期内有效性约束。1-7 对应周一到周日，传入的值比如[1,6]，就表示星期一和星期六营销生效
     **/
    public $valid_weeks;

    /**
        可入住的起始时间，不填默认一年，一年后自动续期
     **/
    public $check_in_from;

    /**
        可入住的结束时间，不填默认一年，一年后自动续期
     **/
    public $check_in_to;

    /**
        折扣比例，填30就意味着原价的30%，也就是打3折。数字范围限定在10-95之间
     **/
    public $investment_number;

    /**
        不可用日期，开始日期和结束日期: from--to  只有一天的场景，from和to传同一天； 默认：空，代表无时间限制；
     **/
    public $invalid_dates;


    public function getValidWeeks() : array{
        return $this->valid_weeks;
    }

    public function setValidWeeks(array $validWeeks){
        $this->valid_weeks = $validWeeks;
    }

    public function getCheckInFrom() : string{
        return $this->check_in_from;
    }

    public function setCheckInFrom(string $checkInFrom){
        $this->check_in_from = $checkInFrom;
    }

    public function getCheckInTo() : string{
        return $this->check_in_to;
    }

    public function setCheckInTo(string $checkInTo){
        $this->check_in_to = $checkInTo;
    }

    public function getInvestmentNumber() : int{
        return $this->investment_number;
    }

    public function setInvestmentNumber(int $investmentNumber){
        $this->investment_number = $investmentNumber;
    }

    public function getInvalidDates() : array{
        return $this->invalid_dates;
    }

    public function setInvalidDates(array $invalidDates){
        $this->invalid_dates = $invalidDates;
    }


}


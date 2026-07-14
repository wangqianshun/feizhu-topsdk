<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbroomtypeAddBnbBookingTimeDto {

    /**
        开始接待时间 hh:mm,24小时时间格式
     **/
    public $start_reception_time;

    /**
        结束接待时间 hh:mm,24小时时间格式
     **/
    public $end_reception_time;

    /**
        最早入住时间 hh:mm,24小时时间格式;默认值: 14:00
     **/
    public $earliest_check_in_time;

    /**
        最晚预订时间 hh:mm,24小时时间格式
     **/
    public $latest_booking_time;

    /**
        最晚入住时间 hh:mm,24小时时间格式
     **/
    public $latest_check_in_time;

    /**
        最晚离店时间 hh:mm,24小时时间格式;默认值: 12:00
     **/
    public $latest_check_out_time;


    public function getStartReceptionTime() : string{
        return $this->start_reception_time;
    }

    public function setStartReceptionTime(string $startReceptionTime){
        $this->start_reception_time = $startReceptionTime;
    }

    public function getEndReceptionTime() : string{
        return $this->end_reception_time;
    }

    public function setEndReceptionTime(string $endReceptionTime){
        $this->end_reception_time = $endReceptionTime;
    }

    public function getEarliestCheckInTime() : string{
        return $this->earliest_check_in_time;
    }

    public function setEarliestCheckInTime(string $earliestCheckInTime){
        $this->earliest_check_in_time = $earliestCheckInTime;
    }

    public function getLatestBookingTime() : string{
        return $this->latest_booking_time;
    }

    public function setLatestBookingTime(string $latestBookingTime){
        $this->latest_booking_time = $latestBookingTime;
    }

    public function getLatestCheckInTime() : string{
        return $this->latest_check_in_time;
    }

    public function setLatestCheckInTime(string $latestCheckInTime){
        $this->latest_check_in_time = $latestCheckInTime;
    }

    public function getLatestCheckOutTime() : string{
        return $this->latest_check_out_time;
    }

    public function setLatestCheckOutTime(string $latestCheckOutTime){
        $this->latest_check_out_time = $latestCheckOutTime;
    }


}


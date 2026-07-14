<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoUpdatePromoInfo {

    /**
        连住优惠的入参
     **/
    public $long_order_info;

    /**
        早定优惠的入参
     **/
    public $early_booking_info;

    /**
        天天特惠的入参
     **/
    public $daily_booking_info;


    public function getLongOrderInfo() : TaobaoXhotelBnbpromoUpdateLongOrderInfo{
        return $this->long_order_info;
    }

    public function setLongOrderInfo(TaobaoXhotelBnbpromoUpdateLongOrderInfo $longOrderInfo){
        $this->long_order_info = $longOrderInfo;
    }

    public function getEarlyBookingInfo() : TaobaoXhotelBnbpromoUpdateEarlyBookingInfo{
        return $this->early_booking_info;
    }

    public function setEarlyBookingInfo(TaobaoXhotelBnbpromoUpdateEarlyBookingInfo $earlyBookingInfo){
        $this->early_booking_info = $earlyBookingInfo;
    }

    public function getDailyBookingInfo() : TaobaoXhotelBnbpromoUpdateDailyBookingInfo{
        return $this->daily_booking_info;
    }

    public function setDailyBookingInfo(TaobaoXhotelBnbpromoUpdateDailyBookingInfo $dailyBookingInfo){
        $this->daily_booking_info = $dailyBookingInfo;
    }


}


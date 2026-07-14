<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoGetPromoInfo {

    /**
        天天特惠优惠
     **/
    public $daily_booking_info;

    /**
        早定优惠
     **/
    public $early_booking_info;

    /**
        连住优惠
     **/
    public $long_order_info;


    public function getDailyBookingInfo() : TaobaoXhotelBnbpromoGetDailyBookingInfo{
        return $this->daily_booking_info;
    }

    public function setDailyBookingInfo(TaobaoXhotelBnbpromoGetDailyBookingInfo $dailyBookingInfo){
        $this->daily_booking_info = $dailyBookingInfo;
    }

    public function getEarlyBookingInfo() : TaobaoXhotelBnbpromoGetEarlyBookingInfo{
        return $this->early_booking_info;
    }

    public function setEarlyBookingInfo(TaobaoXhotelBnbpromoGetEarlyBookingInfo $earlyBookingInfo){
        $this->early_booking_info = $earlyBookingInfo;
    }

    public function getLongOrderInfo() : TaobaoXhotelBnbpromoGetLongOrderInfo{
        return $this->long_order_info;
    }

    public function setLongOrderInfo(TaobaoXhotelBnbpromoGetLongOrderInfo $longOrderInfo){
        $this->long_order_info = $longOrderInfo;
    }


}


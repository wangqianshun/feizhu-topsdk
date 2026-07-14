<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbpromoAddPromoInfo {

    /**
        今夜特惠
     **/
    public $tonight_discount;

    /**
        连住优惠
     **/
    public $long_order_info;

    /**
        早定优惠
     **/
    public $early_booking_info;

    /**
        天天特惠
     **/
    public $daily_booking_info;

    /**
        民宿优惠
     **/
    public $general_booking_info;

    /**
        门店新客
     **/
    public $new_customer_info;

    /**
        出行特惠
     **/
    public $purchase_tickets_user_info;

    /**
        10倍里程
     **/
    public $tenfold_mileage_info;

    /**
        优住会
     **/
    public $you_zhu_hui_info;

    /**
        有价券
     **/
    public $price_coupon_info;

    /**
        膨胀红包
     **/
    public $inflation_coupon_info;

    /**
        PMF项目民宿专属特惠
     **/
    public $pmf_discount;

    /**
        淘金币活动
     **/
    public $tao_bao_coin;


    public function getTonightDiscount() : TaobaoXhotelBnbpromoAddTonightDiscount{
        return $this->tonight_discount;
    }

    public function setTonightDiscount(TaobaoXhotelBnbpromoAddTonightDiscount $tonightDiscount){
        $this->tonight_discount = $tonightDiscount;
    }

    public function getLongOrderInfo() : TaobaoXhotelBnbpromoAddLongOrderInfo{
        return $this->long_order_info;
    }

    public function setLongOrderInfo(TaobaoXhotelBnbpromoAddLongOrderInfo $longOrderInfo){
        $this->long_order_info = $longOrderInfo;
    }

    public function getEarlyBookingInfo() : TaobaoXhotelBnbpromoAddEarlyBookingInfo{
        return $this->early_booking_info;
    }

    public function setEarlyBookingInfo(TaobaoXhotelBnbpromoAddEarlyBookingInfo $earlyBookingInfo){
        $this->early_booking_info = $earlyBookingInfo;
    }

    public function getDailyBookingInfo() : TaobaoXhotelBnbpromoAddDailyBookingInfo{
        return $this->daily_booking_info;
    }

    public function setDailyBookingInfo(TaobaoXhotelBnbpromoAddDailyBookingInfo $dailyBookingInfo){
        $this->daily_booking_info = $dailyBookingInfo;
    }

    public function getGeneralBookingInfo() : TaobaoXhotelBnbpromoAddGeneralBookingInfo{
        return $this->general_booking_info;
    }

    public function setGeneralBookingInfo(TaobaoXhotelBnbpromoAddGeneralBookingInfo $generalBookingInfo){
        $this->general_booking_info = $generalBookingInfo;
    }

    public function getNewCustomerInfo() : TaobaoXhotelBnbpromoAddNewCustomerInfo{
        return $this->new_customer_info;
    }

    public function setNewCustomerInfo(TaobaoXhotelBnbpromoAddNewCustomerInfo $newCustomerInfo){
        $this->new_customer_info = $newCustomerInfo;
    }

    public function getPurchaseTicketsUserInfo() : TaobaoXhotelBnbpromoAddPurchaseTicketsBookingInfo{
        return $this->purchase_tickets_user_info;
    }

    public function setPurchaseTicketsUserInfo(TaobaoXhotelBnbpromoAddPurchaseTicketsBookingInfo $purchaseTicketsUserInfo){
        $this->purchase_tickets_user_info = $purchaseTicketsUserInfo;
    }

    public function getTenfoldMileageInfo() : TaobaoXhotelBnbpromoAddTenfoldMileageInfo{
        return $this->tenfold_mileage_info;
    }

    public function setTenfoldMileageInfo(TaobaoXhotelBnbpromoAddTenfoldMileageInfo $tenfoldMileageInfo){
        $this->tenfold_mileage_info = $tenfoldMileageInfo;
    }

    public function getYouZhuHuiInfo() : TaobaoXhotelBnbpromoAddYouZhuHuiInfo{
        return $this->you_zhu_hui_info;
    }

    public function setYouZhuHuiInfo(TaobaoXhotelBnbpromoAddYouZhuHuiInfo $youZhuHuiInfo){
        $this->you_zhu_hui_info = $youZhuHuiInfo;
    }

    public function getPriceCouponInfo() : TaobaoXhotelBnbpromoAddPriceCouponInfo{
        return $this->price_coupon_info;
    }

    public function setPriceCouponInfo(TaobaoXhotelBnbpromoAddPriceCouponInfo $priceCouponInfo){
        $this->price_coupon_info = $priceCouponInfo;
    }

    public function getInflationCouponInfo() : TaobaoXhotelBnbpromoAddInflationCouponInfo{
        return $this->inflation_coupon_info;
    }

    public function setInflationCouponInfo(TaobaoXhotelBnbpromoAddInflationCouponInfo $inflationCouponInfo){
        $this->inflation_coupon_info = $inflationCouponInfo;
    }

    public function getPmfDiscount() : TaobaoXhotelBnbpromoAddPmfDiscountInfo{
        return $this->pmf_discount;
    }

    public function setPmfDiscount(TaobaoXhotelBnbpromoAddPmfDiscountInfo $pmfDiscount){
        $this->pmf_discount = $pmfDiscount;
    }

    public function getTaoBaoCoin() : TaobaoXhotelBnbpromoAddTaoBaoCoinParam{
        return $this->tao_bao_coin;
    }

    public function setTaoBaoCoin(TaobaoXhotelBnbpromoAddTaoBaoCoinParam $taoBaoCoin){
        $this->tao_bao_coin = $taoBaoCoin;
    }


}


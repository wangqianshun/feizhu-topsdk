<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoLogisticsPartnersGetCarriageDetail {

    /**
        续费（单位：元）
     **/
    public $add_fee;

    /**
        续重（单位：千克）
     **/
    public $add_weight;

    /**
        破损赔付
     **/
    public $damage_payment;

    /**
        物流公司揽收时间段
     **/
    public $got_time;

    /**
        首费（单位：元）
     **/
    public $initial_fee;

    /**
        首重（单位：千克）
     **/
    public $initial_weight;

    /**
        丢单赔付
     **/
    public $lost_payment;

    /**
        快件送达所需的时间(单位：天)
     **/
    public $way_day;


    public function getAddFee() : int{
        return $this->add_fee;
    }

    public function setAddFee(int $addFee){
        $this->add_fee = $addFee;
    }

    public function getAddWeight() : int{
        return $this->add_weight;
    }

    public function setAddWeight(int $addWeight){
        $this->add_weight = $addWeight;
    }

    public function getDamagePayment() : string{
        return $this->damage_payment;
    }

    public function setDamagePayment(string $damagePayment){
        $this->damage_payment = $damagePayment;
    }

    public function getGotTime() : string{
        return $this->got_time;
    }

    public function setGotTime(string $gotTime){
        $this->got_time = $gotTime;
    }

    public function getInitialFee() : int{
        return $this->initial_fee;
    }

    public function setInitialFee(int $initialFee){
        $this->initial_fee = $initialFee;
    }

    public function getInitialWeight() : int{
        return $this->initial_weight;
    }

    public function setInitialWeight(int $initialWeight){
        $this->initial_weight = $initialWeight;
    }

    public function getLostPayment() : string{
        return $this->lost_payment;
    }

    public function setLostPayment(string $lostPayment){
        $this->lost_payment = $lostPayment;
    }

    public function getWayDay() : string{
        return $this->way_day;
    }

    public function setWayDay(string $wayDay){
        $this->way_day = $wayDay;
    }


}


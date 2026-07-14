<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbroomtypeAddBnbChargeDto {

    /**
        允许加人数
     **/
    public $num;

    /**
        加人费用金额
     **/
    public $fee;

    /**
        是否允许加人 0不允许 1允许
     **/
    public $add_people;

    /**
        最小收费年龄
     **/
    public $min_charging_age;


    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getFee() : int{
        return $this->fee;
    }

    public function setFee(int $fee){
        $this->fee = $fee;
    }

    public function getAddPeople() : int{
        return $this->add_people;
    }

    public function setAddPeople(int $addPeople){
        $this->add_people = $addPeople;
    }

    public function getMinChargingAge() : int{
        return $this->min_charging_age;
    }

    public function setMinChargingAge(int $minChargingAge){
        $this->min_charging_age = $minChargingAge;
    }


}


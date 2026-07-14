<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelIntlRateUpdateUpdateRateDo {

    /**
        入离日期
     **/
    public $check_date_d_o_list;

    /**
        成人数
     **/
    public $adults;

    /**
        酒店id
     **/
    public $out_hid;

    /**
        儿童数
     **/
    public $children;

    /**
        儿童年龄，多个儿童年龄用竖线分割：4|5，默认儿童年龄为5岁
     **/
    public $ages;


    public function getCheckDateDOList() : array{
        return $this->check_date_d_o_list;
    }

    public function setCheckDateDOList(array $checkDateDOList){
        $this->check_date_d_o_list = $checkDateDOList;
    }

    public function getAdults() : int{
        return $this->adults;
    }

    public function setAdults(int $adults){
        $this->adults = $adults;
    }

    public function getOutHid() : string{
        return $this->out_hid;
    }

    public function setOutHid(string $outHid){
        $this->out_hid = $outHid;
    }

    public function getChildren() : int{
        return $this->children;
    }

    public function setChildren(int $children){
        $this->children = $children;
    }

    public function getAges() : string{
        return $this->ages;
    }

    public function setAges(string $ages){
        $this->ages = $ages;
    }


}


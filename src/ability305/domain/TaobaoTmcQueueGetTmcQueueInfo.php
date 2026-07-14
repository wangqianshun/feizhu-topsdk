<?php
namespace FeiZhu\TopSdk\Ability305\Domain;

class TaobaoTmcQueueGetTmcQueueInfo {

    /**
        当前队列当天读取量
     **/
    public $get_total;

    /**
        当前队列当天写入量
     **/
    public $put_toal;

    /**
        TMC组名
     **/
    public $name;

    /**
        消息队列Broker名称
     **/
    public $broker_name;


    public function getGetTotal() : int{
        return $this->get_total;
    }

    public function setGetTotal(int $getTotal){
        $this->get_total = $getTotal;
    }

    public function getPutToal() : int{
        return $this->put_toal;
    }

    public function setPutToal(int $putToal){
        $this->put_toal = $putToal;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getBrokerName() : string{
        return $this->broker_name;
    }

    public function setBrokerName(string $brokerName){
        $this->broker_name = $brokerName;
    }


}


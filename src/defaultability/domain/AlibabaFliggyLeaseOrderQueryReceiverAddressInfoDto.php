<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryReceiverAddressInfoDto {

    /**
        收件人姓名
     **/
    public $receiver;

    /**
        收件人手机号
     **/
    public $receiver_phone;

    /**
        收货详细地址
     **/
    public $full_address;


    public function getReceiver() : string{
        return $this->receiver;
    }

    public function setReceiver(string $receiver){
        $this->receiver = $receiver;
    }

    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getFullAddress() : string{
        return $this->full_address;
    }

    public function setFullAddress(string $fullAddress){
        $this->full_address = $fullAddress;
    }


}


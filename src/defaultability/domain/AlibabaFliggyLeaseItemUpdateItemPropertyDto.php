<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemUpdateItemPropertyDto {

    /**
        属性名，最多40个字符
     **/
    public $key;

    /**
        属性值，最多40个字符
     **/
    public $value;


    public function getKey() : string{
        return $this->key;
    }

    public function setKey(string $key){
        $this->key = $key;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}


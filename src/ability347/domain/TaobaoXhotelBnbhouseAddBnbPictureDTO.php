<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhouseAddBnbPictureDTO {

    /**
        图片属性 取值范围只能是：[普通图, 平面图, 全景图]
     **/
    public $attribute;

    /**
        是否主图  主图只能有一个，如果有多个或者没有，则会报错
     **/
    public $ismain;

    /**
        type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 健身房, 其他, 会议室, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂, 泳池]
     **/
    public $type;

    /**
        图片地址
     **/
    public $url;

    /**
        图片描述
     **/
    public $des;


    public function getAttribute() : string{
        return $this->attribute;
    }

    public function setAttribute(string $attribute){
        $this->attribute = $attribute;
    }

    public function getIsmain() : bool{
        return $this->ismain;
    }

    public function setIsmain(bool $ismain){
        $this->ismain = $ismain;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getDes() : string{
        return $this->des;
    }

    public function setDes(string $des){
        $this->des = $des;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelXitemQueryHotelXItemPicture {

    /**
        图片地址
     **/
    public $url;

    /**
        是否主图
     **/
    public $is_main;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getIsMain() : bool{
        return $this->is_main;
    }

    public function setIsMain(bool $isMain){
        $this->is_main = $isMain;
    }


}


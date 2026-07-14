<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantQualityFeedbackCredentialInfoDto {

    /**
        凭证类型，可选值：image-图片，video-视频
     **/
    public $type;

    /**
        URL地址
     **/
    public $url;


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


}


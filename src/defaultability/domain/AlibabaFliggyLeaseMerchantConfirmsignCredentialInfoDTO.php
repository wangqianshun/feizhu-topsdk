<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantConfirmsignCredentialInfoDTO {

    /**
        凭证类型，可选值：image-图片，video-视频
     **/
    public $type;

    /**
        链接
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


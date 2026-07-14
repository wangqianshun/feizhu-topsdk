<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbreviewReplyMediaInfo {

    /**
        媒体信息，1-图片，2-视频
     **/
    public $type;

    /**
        媒体URL地址
     **/
    public $urls;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getUrls() : array{
        return $this->urls;
    }

    public function setUrls(array $urls){
        $this->urls = $urls;
    }


}


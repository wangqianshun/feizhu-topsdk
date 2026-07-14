<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbaicheckNoticeRequest {

    /**
        会话id
     **/
    private $talkId;


    public function getTalkId() : string{
        return $this->talkId;
    }

    public function setTalkId(string $talkId){
        $this->talkId = $talkId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbaicheck.notice";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->talkId)) {
            $requestParam["talk_id"] = TopUtil::convertBasic($this->talkId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbllmPollQueryRequest {

    /**
        请求大模型的唯一key
     **/
    private $requestKey;


    public function getRequestKey() : string{
        return $this->requestKey;
    }

    public function setRequestKey(string $requestKey){
        $this->requestKey = $requestKey;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbllm.poll.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->requestKey)) {
            $requestParam["request_key"] = TopUtil::convertBasic($this->requestKey);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


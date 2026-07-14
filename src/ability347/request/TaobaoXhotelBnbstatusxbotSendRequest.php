<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbstatusxbotSendRequest {

    /**
        话术
     **/
    private $patterns;

    /**
        被呼叫方的电话号码
     **/
    private $phoneNum;

    /**
        本次请求的唯一ID
     **/
    private $requestId;

    /**
        外呼场景
     **/
    private $scene;


    public function getPatterns() : string{
        return $this->patterns;
    }

    public function setPatterns(string $patterns){
        $this->patterns = $patterns;
    }

    public function getPhoneNum() : string{
        return $this->phoneNum;
    }

    public function setPhoneNum(string $phoneNum){
        $this->phoneNum = $phoneNum;
    }

    public function getRequestId() : string{
        return $this->requestId;
    }

    public function setRequestId(string $requestId){
        $this->requestId = $requestId;
    }

    public function getScene() : string{
        return $this->scene;
    }

    public function setScene(string $scene){
        $this->scene = $scene;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbstatusxbot.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->patterns)) {
            $requestParam["patterns"] = TopUtil::convertBasic($this->patterns);
        }

        if (!TopUtil::checkEmpty($this->phoneNum)) {
            $requestParam["phone_num"] = TopUtil::convertBasic($this->phoneNum);
        }

        if (!TopUtil::checkEmpty($this->requestId)) {
            $requestParam["request_id"] = TopUtil::convertBasic($this->requestId);
        }

        if (!TopUtil::checkEmpty($this->scene)) {
            $requestParam["scene"] = TopUtil::convertBasic($this->scene);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbxbotRecordRequest {

    /**
        被叫手机号
     **/
    private $number;

    /**
        23423424234
     **/
    private $sessionId;

    /**
        ab
     **/
    private $scene;


    public function getNumber() : string{
        return $this->number;
    }

    public function setNumber(string $number){
        $this->number = $number;
    }

    public function getSessionId() : string{
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId){
        $this->sessionId = $sessionId;
    }

    public function getScene() : string{
        return $this->scene;
    }

    public function setScene(string $scene){
        $this->scene = $scene;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbxbot.record";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->number)) {
            $requestParam["number"] = TopUtil::convertBasic($this->number);
        }

        if (!TopUtil::checkEmpty($this->sessionId)) {
            $requestParam["session_id"] = TopUtil::convertBasic($this->sessionId);
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


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistResult {

    /**
        状态码
     **/
    public $http_status_code;

    /**
        模型
     **/
    public $model;

    /**
        msgCode
     **/
    public $msg_code;

    /**
        msgInfo
     **/
    public $msg_info;

    /**
        是否成功
     **/
    public $success;


    public function getHttpStatusCode() : int{
        return $this->http_status_code;
    }

    public function setHttpStatusCode(int $httpStatusCode){
        $this->http_status_code = $httpStatusCode;
    }

    public function getModel() : TaobaoXhotelCommentGetmixratelistGetMixRateListResult{
        return $this->model;
    }

    public function setModel(TaobaoXhotelCommentGetmixratelistGetMixRateListResult $model){
        $this->model = $model;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


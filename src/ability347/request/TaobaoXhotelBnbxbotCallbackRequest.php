<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbxbotCallbackRequest {

    /**
        更新taskid的主键
     **/
    private $code;

    /**
        外呼的任务ID
     **/
    private $taskId;

    /**
        调用外呼异常信息
     **/
    private $errorMsg;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getTaskId() : string{
        return $this->taskId;
    }

    public function setTaskId(string $taskId){
        $this->taskId = $taskId;
    }

    public function getErrorMsg() : string{
        return $this->errorMsg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->errorMsg = $errorMsg;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbxbot.callback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->code)) {
            $requestParam["code"] = TopUtil::convertBasic($this->code);
        }

        if (!TopUtil::checkEmpty($this->taskId)) {
            $requestParam["task_id"] = TopUtil::convertBasic($this->taskId);
        }

        if (!TopUtil::checkEmpty($this->errorMsg)) {
            $requestParam["error_msg"] = TopUtil::convertBasic($this->errorMsg);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


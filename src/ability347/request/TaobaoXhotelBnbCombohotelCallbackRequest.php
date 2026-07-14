<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbCombohotelCallbackRequest {

    /**
        请求结果
     **/
    private $data;

    /**
        请求是否成功
     **/
    private $success;

    /**
        失败原因
     **/
    private $msg;

    /**
        扩展字段
     **/
    private $extraMap;


    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }

    public function getExtraMap() : string{
        return $this->extraMap;
    }

    public function setExtraMap(string $extraMap){
        $this->extraMap = $extraMap;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.combohotel.callback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->data)) {
            $requestParam["data"] = TopUtil::convertBasic($this->data);
        }

        if (!TopUtil::checkEmpty($this->success)) {
            $requestParam["success"] = TopUtil::convertBasic($this->success);
        }

        if (!TopUtil::checkEmpty($this->msg)) {
            $requestParam["msg"] = TopUtil::convertBasic($this->msg);
        }

        if (!TopUtil::checkEmpty($this->extraMap)) {
            $requestParam["extra_map"] = TopUtil::convertBasic($this->extraMap);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


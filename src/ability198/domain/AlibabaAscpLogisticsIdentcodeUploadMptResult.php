<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsIdentcodeUploadMptResult {

    /**
        请求状态码
     **/
    public $code;

    /**
        描述信息，当返回码不为0时，表示错误信息
     **/
    public $msg;


    public function getCode() : int{
        return $this->code;
    }

    public function setCode(int $code){
        $this->code = $code;
    }

    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }


}


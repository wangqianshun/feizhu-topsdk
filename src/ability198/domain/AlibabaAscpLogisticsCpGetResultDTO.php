<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsCpGetResultDTO {

    /**
        快递公司资源列表
     **/
    public $resource_list;

    /**
        调用是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $error_desc;

    /**
        错误码
     **/
    public $error_code;


    public function getResourceList() : array{
        return $this->resource_list;
    }

    public function setResourceList(array $resourceList){
        $this->resource_list = $resourceList;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorDesc() : string{
        return $this->error_desc;
    }

    public function setErrorDesc(string $errorDesc){
        $this->error_desc = $errorDesc;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }


}


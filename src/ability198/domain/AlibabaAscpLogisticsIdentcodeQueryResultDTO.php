<?php
namespace FeiZhu\TopSdk\Ability198\Domain;

class AlibabaAscpLogisticsIdentcodeQueryResultDTO {

    /**
        识别码列表
     **/
    public $ident_code_list;

    /**
        是否成功
     **/
    public $success;


    public function getIdentCodeList() : array{
        return $this->ident_code_list;
    }

    public function setIdentCodeList(array $identCodeList){
        $this->ident_code_list = $identCodeList;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


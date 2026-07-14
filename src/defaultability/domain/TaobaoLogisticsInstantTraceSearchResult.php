<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class TaobaoLogisticsInstantTraceSearchResult {

    /**
        是否成功
     **/
    public $success;

    /**
        运单列表
     **/
    public $mail_list;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMailList() : array{
        return $this->mail_list;
    }

    public function setMailList(array $mailList){
        $this->mail_list = $mailList;
    }


}


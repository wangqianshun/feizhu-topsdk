<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelGetEntityByTagTagQueryResult {

    /**
        总数
     **/
    public $total_amount;

    /**
        是否成功
     **/
    public $success;

    /**
        列表
     **/
    public $tag_entity_do_list;

    /**
        token
     **/
    public $token_str;

    /**
        耗时
     **/
    public $spent_time;

    /**
        错误信息
     **/
    public $error_msg;


    public function getTotalAmount() : int{
        return $this->total_amount;
    }

    public function setTotalAmount(int $totalAmount){
        $this->total_amount = $totalAmount;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTagEntityDoList() : array{
        return $this->tag_entity_do_list;
    }

    public function setTagEntityDoList(array $tagEntityDoList){
        $this->tag_entity_do_list = $tagEntityDoList;
    }

    public function getTokenStr() : string{
        return $this->token_str;
    }

    public function setTokenStr(string $tokenStr){
        $this->token_str = $tokenStr;
    }

    public function getSpentTime() : int{
        return $this->spent_time;
    }

    public function setSpentTime(int $spentTime){
        $this->spent_time = $spentTime;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelXitemQueryResultSet {

    /**
        错误信息
     **/
    public $error_msg;

    /**
        错误码
     **/
    public $error_code;

    /**
        查询到的 x 元素
     **/
    public $x_items;

    /**
        记录总数
     **/
    public $total_count;


    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getXItems() : array{
        return $this->x_items;
    }

    public function setXItems(array $xItems){
        $this->x_items = $xItems;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}


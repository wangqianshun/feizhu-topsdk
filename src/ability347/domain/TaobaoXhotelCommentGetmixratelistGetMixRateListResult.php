<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistGetMixRateListResult {

    /**
        页面布局信息
     **/
    public $config_info;

    /**
        错误代码
     **/
    public $err_code;

    /**
        错误详细描述
     **/
    public $err_msg;

    /**
        是否可以向下翻页，0不可以，1可以
     **/
    public $has_next_page;

    /**
        统计信息
     **/
    public $item_statistic;

    /**
        商品评论列表
     **/
    public $mix_rates;

    /**
        写点评页跳转信息
     **/
    public $rate_entrance;

    /**
        成功
     **/
    public $success;

    /**
        总数
     **/
    public $total_num;


    public function getConfigInfo() : string{
        return $this->config_info;
    }

    public function setConfigInfo(string $configInfo){
        $this->config_info = $configInfo;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getHasNextPage() : int{
        return $this->has_next_page;
    }

    public function setHasNextPage(int $hasNextPage){
        $this->has_next_page = $hasNextPage;
    }

    public function getItemStatistic() : TaobaoXhotelCommentGetmixratelistItemStatisticVo{
        return $this->item_statistic;
    }

    public function setItemStatistic(TaobaoXhotelCommentGetmixratelistItemStatisticVo $itemStatistic){
        $this->item_statistic = $itemStatistic;
    }

    public function getMixRates() : array{
        return $this->mix_rates;
    }

    public function setMixRates(array $mixRates){
        $this->mix_rates = $mixRates;
    }

    public function getRateEntrance() : TaobaoXhotelCommentGetmixratelistAddRateEntrance{
        return $this->rate_entrance;
    }

    public function setRateEntrance(TaobaoXhotelCommentGetmixratelistAddRateEntrance $rateEntrance){
        $this->rate_entrance = $rateEntrance;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTotalNum() : int{
        return $this->total_num;
    }

    public function setTotalNum(int $totalNum){
        $this->total_num = $totalNum;
    }


}


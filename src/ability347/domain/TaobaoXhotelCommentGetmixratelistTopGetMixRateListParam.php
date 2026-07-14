<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistTopGetMixRateListParam {

    /**
        业务类型
     **/
    public $biz_type;

    /**
        商品id
     **/
    public $item_id;

    /**
        加载点评
     **/
    public $load_reply;

    /**
        页码
     **/
    public $page_no;

    /**
        分页大小
     **/
    public $page_size;

    /**
        排序
     **/
    public $sort;

    /**
        tab过滤
     **/
    public $tab_filter;


    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getLoadReply() : int{
        return $this->load_reply;
    }

    public function setLoadReply(int $loadReply){
        $this->load_reply = $loadReply;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getSort() : int{
        return $this->sort;
    }

    public function setSort(int $sort){
        $this->sort = $sort;
    }

    public function getTabFilter() : string{
        return $this->tab_filter;
    }

    public function setTabFilter(string $tabFilter){
        $this->tab_filter = $tabFilter;
    }


}


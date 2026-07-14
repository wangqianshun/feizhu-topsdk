<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelPromotionQueryQueryPromotionParam {

    /**
        促销规则Id
     **/
    public $promotion_rule_id;

    /**
        页码
     **/
    public $page_no;

    /**
        每页大小，最大50
     **/
    public $page_size;

    /**
        酒店code
     **/
    public $hotel_code;

    /**
        有申请系统商的，需要传系统商代码，没有申请的，传空值
     **/
    public $vendor;


    public function getPromotionRuleId() : int{
        return $this->promotion_rule_id;
    }

    public function setPromotionRuleId(int $promotionRuleId){
        $this->promotion_rule_id = $promotionRuleId;
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

    public function getHotelCode() : string{
        return $this->hotel_code;
    }

    public function setHotelCode(string $hotelCode){
        $this->hotel_code = $hotelCode;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }


}


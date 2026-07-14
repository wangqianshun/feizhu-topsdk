<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelPromotionListPromotionParam;

class TaobaoXhotelPromotionListRequest {

    /**
        查询活动请求
     **/
    private $promotionParam;


    public function getPromotionParam() : TaobaoXhotelPromotionListPromotionParam{
        return $this->promotionParam;
    }

    public function setPromotionParam(TaobaoXhotelPromotionListPromotionParam $promotionParam){
        $this->promotionParam = $promotionParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.promotion.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->promotionParam)) {
            $requestParam["promotion_param"] = TopUtil::convertStruct($this->promotionParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


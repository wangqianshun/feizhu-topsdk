<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelPromotionQueryQueryPromotionParam;

class TaobaoXhotelPromotionQueryRequest {

    /**
        查询活动请求
     **/
    private $queryPromotionParam;


    public function getQueryPromotionParam() : TaobaoXhotelPromotionQueryQueryPromotionParam{
        return $this->queryPromotionParam;
    }

    public function setQueryPromotionParam(TaobaoXhotelPromotionQueryQueryPromotionParam $queryPromotionParam){
        $this->queryPromotionParam = $queryPromotionParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.promotion.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryPromotionParam)) {
            $requestParam["query_promotion_param"] = TopUtil::convertStruct($this->queryPromotionParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


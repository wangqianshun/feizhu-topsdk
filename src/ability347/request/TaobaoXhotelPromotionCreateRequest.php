<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelPromotionCreateCreatePromotionParam;

class TaobaoXhotelPromotionCreateRequest {

    /**
        促销活动对象
     **/
    private $createPromotionParam;


    public function getCreatePromotionParam() : TaobaoXhotelPromotionCreateCreatePromotionParam{
        return $this->createPromotionParam;
    }

    public function setCreatePromotionParam(TaobaoXhotelPromotionCreateCreatePromotionParam $createPromotionParam){
        $this->createPromotionParam = $createPromotionParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.promotion.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->createPromotionParam)) {
            $requestParam["create_promotion_param"] = TopUtil::convertStruct($this->createPromotionParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


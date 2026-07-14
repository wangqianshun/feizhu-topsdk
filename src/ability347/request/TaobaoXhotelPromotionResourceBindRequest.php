<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelPromotionResourceBindBindPromotionResourceParam;

class TaobaoXhotelPromotionResourceBindRequest {

    /**
        资源绑定请求
     **/
    private $bindPromotionResourceParam;


    public function getBindPromotionResourceParam() : TaobaoXhotelPromotionResourceBindBindPromotionResourceParam{
        return $this->bindPromotionResourceParam;
    }

    public function setBindPromotionResourceParam(TaobaoXhotelPromotionResourceBindBindPromotionResourceParam $bindPromotionResourceParam){
        $this->bindPromotionResourceParam = $bindPromotionResourceParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.promotion.resource.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bindPromotionResourceParam)) {
            $requestParam["bind_promotion_resource_param"] = TopUtil::convertStruct($this->bindPromotionResourceParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


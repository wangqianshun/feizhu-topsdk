<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelPromotionResourceUnbindUnBindPromotionResourceParam;

class TaobaoXhotelPromotionResourceUnbindRequest {

    /**
        资源解绑请求
     **/
    private $unBindPromotionResourceParam;


    public function getUnBindPromotionResourceParam() : TaobaoXhotelPromotionResourceUnbindUnBindPromotionResourceParam{
        return $this->unBindPromotionResourceParam;
    }

    public function setUnBindPromotionResourceParam(TaobaoXhotelPromotionResourceUnbindUnBindPromotionResourceParam $unBindPromotionResourceParam){
        $this->unBindPromotionResourceParam = $unBindPromotionResourceParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.promotion.resource.unbind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->unBindPromotionResourceParam)) {
            $requestParam["un_bind_promotion_resource_param"] = TopUtil::convertStruct($this->unBindPromotionResourceParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelCommentGetmixratelistTopGetMixRateListParam;

class TaobaoXhotelCommentGetmixratelistRequest {

    /**
        1
     **/
    private $paramGetMixRateListParam;


    public function getParamGetMixRateListParam() : TaobaoXhotelCommentGetmixratelistTopGetMixRateListParam{
        return $this->paramGetMixRateListParam;
    }

    public function setParamGetMixRateListParam(TaobaoXhotelCommentGetmixratelistTopGetMixRateListParam $paramGetMixRateListParam){
        $this->paramGetMixRateListParam = $paramGetMixRateListParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.comment.getmixratelist";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramGetMixRateListParam)) {
            $requestParam["param_get_mix_rate_list_param"] = TopUtil::convertStruct($this->paramGetMixRateListParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


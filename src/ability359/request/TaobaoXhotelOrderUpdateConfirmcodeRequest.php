<?php
namespace FeiZhu\TopSdk\Ability359\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability359\Domain\TaobaoXhotelOrderUpdateConfirmcodeUpdateOrderConfirmCodeParam;

class TaobaoXhotelOrderUpdateConfirmcodeRequest {

    /**
        系统入参
     **/
    private $param;


    public function getParam() : TaobaoXhotelOrderUpdateConfirmcodeUpdateOrderConfirmCodeParam{
        return $this->param;
    }

    public function setParam(TaobaoXhotelOrderUpdateConfirmcodeUpdateOrderConfirmCodeParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "taobao.xhotel.order.update.confirmcode";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


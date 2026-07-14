<?php
namespace FeiZhu\TopSdk\Ability359\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability359\Domain\TaobaoXhotelOrderSecretphonenumBindSecretPhoneNumberBindParam;

class TaobaoXhotelOrderSecretphonenumBindRequest {

    /**
        隐私号绑定参数
     **/
    private $secretPhoneNumberBindParam;


    public function getSecretPhoneNumberBindParam() : TaobaoXhotelOrderSecretphonenumBindSecretPhoneNumberBindParam{
        return $this->secretPhoneNumberBindParam;
    }

    public function setSecretPhoneNumberBindParam(TaobaoXhotelOrderSecretphonenumBindSecretPhoneNumberBindParam $secretPhoneNumberBindParam){
        $this->secretPhoneNumberBindParam = $secretPhoneNumberBindParam;
    }


    public function getApiName() : string {
        return "taobao.xhotel.order.secretphonenum.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->secretPhoneNumberBindParam)) {
            $requestParam["secret_phone_number_bind_param"] = TopUtil::convertStruct($this->secretPhoneNumberBindParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


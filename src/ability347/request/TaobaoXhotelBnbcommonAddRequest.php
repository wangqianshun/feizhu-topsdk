<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbcommonAddRequest {

    /**
        参数
     **/
    private $param;

    /**
        业务场景
     **/
    private $scene;


    public function getParam() : string{
        return $this->param;
    }

    public function setParam(string $param){
        $this->param = $param;
    }

    public function getScene() : string{
        return $this->scene;
    }

    public function setScene(string $scene){
        $this->scene = $scene;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbcommon.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertBasic($this->param);
        }

        if (!TopUtil::checkEmpty($this->scene)) {
            $requestParam["scene"] = TopUtil::convertBasic($this->scene);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


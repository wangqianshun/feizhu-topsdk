<?php
namespace FeiZhu\TopSdk\Ability15\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoWlbStoresBaseinfoGetRequest {

    /**
        0.商家仓库.1.菜鸟仓库.2全部被划分的仓库
     **/
    private $type;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.wlb.stores.baseinfo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbCombohotelRequest {

    /**
        竞品hid
     **/
    private $xcHid;

    /**
        操作人
     **/
    private $operator;


    public function getXcHid() : string{
        return $this->xcHid;
    }

    public function setXcHid(string $xcHid){
        $this->xcHid = $xcHid;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.combohotel";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->xcHid)) {
            $requestParam["xc_hid"] = TopUtil::convertBasic($this->xcHid);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


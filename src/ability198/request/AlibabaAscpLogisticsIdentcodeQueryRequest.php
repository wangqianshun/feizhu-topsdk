<?php
namespace FeiZhu\TopSdk\Ability198\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsIdentcodeQueryRequest {

    /**
        根类目ID，"1101": "笔记本电脑",   "1512": "手机类目",   "50019780": "平板电脑"
     **/
    private $rootCatId;

    /**
        识别码列表
     **/
    private $identCodeList;

    /**
        识别码类型，SN，IMEI
     **/
    private $identType;

    /**
        品牌ID，"11119": "Lenovo/联想",   "11656": "Asus/华硕",   "11813": "Huawei/华为",   "21660": "Hasee/神舟",   "21999": "MSI/微星",   "26683": "Dell/戴尔",   "26691": "Acer/宏碁",   "28247": "OPPO",   "30111": "Apple/苹果",   "31140": "HP/惠普",   "91621": "vivo",   "3506680": "MIUI/小米",   "184048021": "ThinkPad",   "590022244": "honor/荣耀",   "600184882": "OnePlus/一加",   "616784001": "MACHENIKE",   "639188075": "THUNDEROBOT",   "775486237": "MECHREVO/机械革命",   "1880225553": "ROG/玩家国度",   "7051840193": "iQOO(数码)"
     **/
    private $brandId;

    /**
        是否可用
     **/
    private $available;


    public function getRootCatId() : string{
        return $this->rootCatId;
    }

    public function setRootCatId(string $rootCatId){
        $this->rootCatId = $rootCatId;
    }

    public function getIdentCodeList() : array{
        return $this->identCodeList;
    }

    public function setIdentCodeList(array $identCodeList){
        $this->identCodeList = $identCodeList;
    }

    public function getIdentType() : string{
        return $this->identType;
    }

    public function setIdentType(string $identType){
        $this->identType = $identType;
    }

    public function getBrandId() : string{
        return $this->brandId;
    }

    public function setBrandId(string $brandId){
        $this->brandId = $brandId;
    }

    public function getAvailable() : bool{
        return $this->available;
    }

    public function setAvailable(bool $available){
        $this->available = $available;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.identcode.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rootCatId)) {
            $requestParam["root_cat_id"] = TopUtil::convertBasic($this->rootCatId);
        }

        if (!TopUtil::checkEmpty($this->identCodeList)) {
            $requestParam["ident_code_list"] = TopUtil::convertBasicList($this->identCodeList);
        }

        if (!TopUtil::checkEmpty($this->identType)) {
            $requestParam["ident_type"] = TopUtil::convertBasic($this->identType);
        }

        if (!TopUtil::checkEmpty($this->brandId)) {
            $requestParam["brand_id"] = TopUtil::convertBasic($this->brandId);
        }

        if (!TopUtil::checkEmpty($this->available)) {
            $requestParam["available"] = TopUtil::convertBasic($this->available);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelEntityConfigRequest {

    /**
        实体编码，例如酒店编码，房价编码
     **/
    private $entityCode;

    /**
        格式为：[{"invoice_provider":"2"}] key-value形式的配置信息其中invoice_provider发票提供方1(酒店提供),2(卖家邮寄)。其余开票信息统一在卖家或酒店后台手动配置，此接口不做参数传输。
     **/
    private $configData;

    /**
        默认是taobao。和酒店，房型等实体上的vendor保持一致。
     **/
    private $vendor;

    /**
        实体id：飞猪平台的id，目前仅支持hid，rpid
     **/
    private $entityId;

    /**
        目前仅支持 5：rp维度
     **/
    private $type;


    public function getEntityCode() : string{
        return $this->entityCode;
    }

    public function setEntityCode(string $entityCode){
        $this->entityCode = $entityCode;
    }

    public function getConfigData() : string{
        return $this->configData;
    }

    public function setConfigData(string $configData){
        $this->configData = $configData;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getEntityId() : int{
        return $this->entityId;
    }

    public function setEntityId(int $entityId){
        $this->entityId = $entityId;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.xhotel.entity.config";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->entityCode)) {
            $requestParam["entity_code"] = TopUtil::convertBasic($this->entityCode);
        }

        if (!TopUtil::checkEmpty($this->configData)) {
            $requestParam["config_data"] = TopUtil::convertBasic($this->configData);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->entityId)) {
            $requestParam["entity_id"] = TopUtil::convertBasic($this->entityId);
        }

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


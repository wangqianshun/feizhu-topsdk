<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelXitemQueryHotelXitemDO {

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        外部code
     **/
    public $out_x_code;

    /**
        子类型code
     **/
    public $sub_type_code;

    /**
        外部酒店code
     **/
    public $out_hid;

    /**
        元素类型简写
     **/
    public $short_name;

    /**
        服务时间段
     **/
    public $time;

    /**
        商品价值
     **/
    public $value;

    /**
        商品使用说明
     **/
    public $item_desc;

    /**
        状态是否生效0 失效, 1生效
     **/
    public $status;

    /**
        附加产品使用维度   1:每间房维度 2:每间夜维度
     **/
    public $dimension_type;

    /**
         审核状态-1：拒绝，0：审核中，1：审核通过
     **/
    public $audit_status;

    /**
        审核拒绝原因
     **/
    public $audit_reject_reason;

    /**
        详细信息json字符串
     **/
    public $feature_detail;

    /**
        酒+X 图片格式化信息
     **/
    public $pictures;


    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getOutXCode() : string{
        return $this->out_x_code;
    }

    public function setOutXCode(string $outXCode){
        $this->out_x_code = $outXCode;
    }

    public function getSubTypeCode() : string{
        return $this->sub_type_code;
    }

    public function setSubTypeCode(string $subTypeCode){
        $this->sub_type_code = $subTypeCode;
    }

    public function getOutHid() : string{
        return $this->out_hid;
    }

    public function setOutHid(string $outHid){
        $this->out_hid = $outHid;
    }

    public function getShortName() : string{
        return $this->short_name;
    }

    public function setShortName(string $shortName){
        $this->short_name = $shortName;
    }

    public function getTime() : string{
        return $this->time;
    }

    public function setTime(string $time){
        $this->time = $time;
    }

    public function getValue() : int{
        return $this->value;
    }

    public function setValue(int $value){
        $this->value = $value;
    }

    public function getItemDesc() : string{
        return $this->item_desc;
    }

    public function setItemDesc(string $itemDesc){
        $this->item_desc = $itemDesc;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getDimensionType() : int{
        return $this->dimension_type;
    }

    public function setDimensionType(int $dimensionType){
        $this->dimension_type = $dimensionType;
    }

    public function getAuditStatus() : int{
        return $this->audit_status;
    }

    public function setAuditStatus(int $auditStatus){
        $this->audit_status = $auditStatus;
    }

    public function getAuditRejectReason() : string{
        return $this->audit_reject_reason;
    }

    public function setAuditRejectReason(string $auditRejectReason){
        $this->audit_reject_reason = $auditRejectReason;
    }

    public function getFeatureDetail() : string{
        return $this->feature_detail;
    }

    public function setFeatureDetail(string $featureDetail){
        $this->feature_detail = $featureDetail;
    }

    public function getPictures() : array{
        return $this->pictures;
    }

    public function setPictures(array $pictures){
        $this->pictures = $pictures;
    }


}


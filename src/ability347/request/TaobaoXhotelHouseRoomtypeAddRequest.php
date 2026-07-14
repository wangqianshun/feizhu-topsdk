<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelHouseRoomtypeAddRequest {

    /**
        （已废弃）请使用outHid
     **/
    private $hid;

    /**
        房型名称。不能超过30字
     **/
    private $name;

    /**
        最大入住人数，默认2（1-99）
     **/
    private $maxOccupancy;

    /**
        具体面积大小，请按照正确格式填写。两种格式，例如：40或者 10-20
     **/
    private $area;

    /**
        客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
     **/
    private $floor;

    /**
        宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
     **/
    private $internet;

    /**
        设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
     **/
    private $service;

    /**
        不要使用
     **/
    private $extend;

    /**
        卖家房型ID，不能重复建议格式是:酒店code_房型code
     **/
    private $outerId;

    /**
        0:无窗/1:有窗/2:部分有窗/3:暗窗/4:部分暗窗
     **/
    private $windowType;

    /**
        该字段只有确定的时候，才允许填入。用于标示和淘宝房型的匹配关系。目前尚未启动该字段。
     **/
    private $srid;

    /**
        系统商，无申请不可使用
     **/
    private $vendor;

    /**
        （必传）商家酒店ID，指明该房型属于哪家酒店
     **/
    private $outHid;

    /**
        房型图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。
     **/
    private $pics;

    /**
        卖家房型英文名称
     **/
    private $nameE;

    /**
        操作人信息
     **/
    private $operator;

    /**
        属性值为1: 含义是非直连房型
     **/
    private $connectionType;

    /**
        房屋户型， bedroom: 室, bathroom: 卫, livingroom: 厅, study: 书房, balcony: 阳台,kitchen: 厨房
     **/
    private $houseModel;

    /**
        房屋面积
     **/
    private $houseSize;

    /**
        出租类型:1.整租;2.单间;3.床位
     **/
    private $rentType;

    /**
        出租面积,单位平方米
     **/
    private $rentSize;

    /**
        是否和房东合住:0.不和房东合住;1.和房东合住;
     **/
    private $hasLandlord;

    /**
        床信息: bedType:床型, desc: 床型名, width:床宽, length：床长, bedNum: 床数。床型取值见链接https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.4zBOVn&docType=1&articleId=108347
     **/
    private $bedInfo;

    /**
        数据状态 0:正常，-1:删除，-2:停售
     **/
    private $status;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMaxOccupancy() : int{
        return $this->maxOccupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->maxOccupancy = $maxOccupancy;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }

    public function getInternet() : string{
        return $this->internet;
    }

    public function setInternet(string $internet){
        $this->internet = $internet;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getWindowType() : int{
        return $this->windowType;
    }

    public function setWindowType(int $windowType){
        $this->windowType = $windowType;
    }

    public function getSrid() : int{
        return $this->srid;
    }

    public function setSrid(int $srid){
        $this->srid = $srid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOutHid() : string{
        return $this->outHid;
    }

    public function setOutHid(string $outHid){
        $this->outHid = $outHid;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getNameE() : string{
        return $this->nameE;
    }

    public function setNameE(string $nameE){
        $this->nameE = $nameE;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }

    public function getConnectionType() : int{
        return $this->connectionType;
    }

    public function setConnectionType(int $connectionType){
        $this->connectionType = $connectionType;
    }

    public function getHouseModel() : string{
        return $this->houseModel;
    }

    public function setHouseModel(string $houseModel){
        $this->houseModel = $houseModel;
    }

    public function getHouseSize() : int{
        return $this->houseSize;
    }

    public function setHouseSize(int $houseSize){
        $this->houseSize = $houseSize;
    }

    public function getRentType() : int{
        return $this->rentType;
    }

    public function setRentType(int $rentType){
        $this->rentType = $rentType;
    }

    public function getRentSize() : int{
        return $this->rentSize;
    }

    public function setRentSize(int $rentSize){
        $this->rentSize = $rentSize;
    }

    public function getHasLandlord() : int{
        return $this->hasLandlord;
    }

    public function setHasLandlord(int $hasLandlord){
        $this->hasLandlord = $hasLandlord;
    }

    public function getBedInfo() : string{
        return $this->bedInfo;
    }

    public function setBedInfo(string $bedInfo){
        $this->bedInfo = $bedInfo;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


    public function getApiName() : string {
        return "taobao.xhotel.house.roomtype.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->maxOccupancy)) {
            $requestParam["max_occupancy"] = TopUtil::convertBasic($this->maxOccupancy);
        }

        if (!TopUtil::checkEmpty($this->area)) {
            $requestParam["area"] = TopUtil::convertBasic($this->area);
        }

        if (!TopUtil::checkEmpty($this->floor)) {
            $requestParam["floor"] = TopUtil::convertBasic($this->floor);
        }

        if (!TopUtil::checkEmpty($this->internet)) {
            $requestParam["internet"] = TopUtil::convertBasic($this->internet);
        }

        if (!TopUtil::checkEmpty($this->service)) {
            $requestParam["service"] = TopUtil::convertBasic($this->service);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->windowType)) {
            $requestParam["window_type"] = TopUtil::convertBasic($this->windowType);
        }

        if (!TopUtil::checkEmpty($this->srid)) {
            $requestParam["srid"] = TopUtil::convertBasic($this->srid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outHid)) {
            $requestParam["out_hid"] = TopUtil::convertBasic($this->outHid);
        }

        if (!TopUtil::checkEmpty($this->pics)) {
            $requestParam["pics"] = TopUtil::convertBasic($this->pics);
        }

        if (!TopUtil::checkEmpty($this->nameE)) {
            $requestParam["name_e"] = TopUtil::convertBasic($this->nameE);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        if (!TopUtil::checkEmpty($this->connectionType)) {
            $requestParam["connection_type"] = TopUtil::convertBasic($this->connectionType);
        }

        if (!TopUtil::checkEmpty($this->houseModel)) {
            $requestParam["house_model"] = TopUtil::convertBasic($this->houseModel);
        }

        if (!TopUtil::checkEmpty($this->houseSize)) {
            $requestParam["house_size"] = TopUtil::convertBasic($this->houseSize);
        }

        if (!TopUtil::checkEmpty($this->rentType)) {
            $requestParam["rent_type"] = TopUtil::convertBasic($this->rentType);
        }

        if (!TopUtil::checkEmpty($this->rentSize)) {
            $requestParam["rent_size"] = TopUtil::convertBasic($this->rentSize);
        }

        if (!TopUtil::checkEmpty($this->hasLandlord)) {
            $requestParam["has_landlord"] = TopUtil::convertBasic($this->hasLandlord);
        }

        if (!TopUtil::checkEmpty($this->bedInfo)) {
            $requestParam["bed_info"] = TopUtil::convertBasic($this->bedInfo);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


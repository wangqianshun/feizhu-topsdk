<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomtypeUpdateRequest {

    /**
        （已废弃）
     **/
    private $rid;

    /**
        房型名称。不能超过200字；添加房型时为必须
     **/
    private $name;

    /**
        最大入住人数，默认2（1-99）
     **/
    private $maxOccupancy;

    /**
        具体面积大小，请按照正确格式填写。两种格式，例如：40 或者 10-20
     **/
    private $area;

    /**
        客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
     **/
    private $floor;

    /**
        （已废弃）床型请使用bed_info字段
     **/
    private $bedType;

    /**
        床宽。按自己定义存储，比如：2.1米
     **/
    private $bedSize;

    /**
        宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
     **/
    private $internet;

    /**
        设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
     **/
    private $service;

    /**
        0:无窗/1:有窗/2:部分有窗/3:暗窗/4:部分暗窗
     **/
    private $windowType;

    /**
        扩展信息的JSON。注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
     **/
    private $extend;

    /**
        （必传）商家房型ID
     **/
    private $outerId;

    /**
        该字段只有确定的时候，才允许填入。用于标示和淘宝房型的匹配关系。目前尚未启动该字段。
     **/
    private $srid;

    /**
        系统商，不要使用，只有申请才可用
     **/
    private $vendor;

    /**
        （已废弃）
     **/
    private $hid;

    /**
        商家酒店ID(如果更新房型的时候房型不存在，会拿该code去新增房型)
     **/
    private $hotelCode;

    /**
        房型图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。要求：无logo、水印、边框、人物，不模糊，不重复，不歪斜，房间图清晰，图片尺寸不小于300*225，不小于5M
     **/
    private $pics;

    /**
        房型状态。0:正常，-1:删除，-2:停售
     **/
    private $status;

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
        main_bed_type母床型,sub_bed_type子床型。详情参见文档： https://open.alitrip.com/docs/doc.htm?spm=0.0.0.0.yN2mES&docType=1&articleId=118712&previewCode=1DABB73EA935608455E203BA06CF3566
     **/
    private $bedInfo;

    /**
        新的房型编码，请确实需要修改某个房型的编码的时候才使用，如需使用，请联系飞猪技术支持开通权限，否则会更新失败
     **/
    private $newOuterId;

    /**
        房间设施,参考文档https://open.alitrip.com/docs/doc.htm?docType=1&articleId=108891
     **/
    private $standardRoomFacilities;

    /**
        窗型，窗型（windowType）： 0=无窗 1=有窗 2=部分有窗  窗型缺陷（windowTypeDefect）： 0=窗户不可打开通风 1=窗外有遮挡 2=窗外为酒店内景观  特殊窗（windowTypeSpecial）： 0=落地窗 1=飘窗 2=天窗 3=小窗。  当为有窗或部分有窗时，窗型缺陷可多选，特殊窗型需单选
     **/
    private $windowDesc;

    /**
        房型加床政策。 费用(fee) 说明(desc)
     **/
    private $addBed;

    /**
        儿童政策
     **/
    private $childrenPolicy;


    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
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

    public function getBedType() : string{
        return $this->bedType;
    }

    public function setBedType(string $bedType){
        $this->bedType = $bedType;
    }

    public function getBedSize() : string{
        return $this->bedSize;
    }

    public function setBedSize(string $bedSize){
        $this->bedSize = $bedSize;
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

    public function getWindowType() : int{
        return $this->windowType;
    }

    public function setWindowType(int $windowType){
        $this->windowType = $windowType;
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

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getHotelCode() : string{
        return $this->hotelCode;
    }

    public function setHotelCode(string $hotelCode){
        $this->hotelCode = $hotelCode;
    }

    public function getPics() : string{
        return $this->pics;
    }

    public function setPics(string $pics){
        $this->pics = $pics;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
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

    public function getBedInfo() : string{
        return $this->bedInfo;
    }

    public function setBedInfo(string $bedInfo){
        $this->bedInfo = $bedInfo;
    }

    public function getNewOuterId() : string{
        return $this->newOuterId;
    }

    public function setNewOuterId(string $newOuterId){
        $this->newOuterId = $newOuterId;
    }

    public function getStandardRoomFacilities() : string{
        return $this->standardRoomFacilities;
    }

    public function setStandardRoomFacilities(string $standardRoomFacilities){
        $this->standardRoomFacilities = $standardRoomFacilities;
    }

    public function getWindowDesc() : string{
        return $this->windowDesc;
    }

    public function setWindowDesc(string $windowDesc){
        $this->windowDesc = $windowDesc;
    }

    public function getAddBed() : string{
        return $this->addBed;
    }

    public function setAddBed(string $addBed){
        $this->addBed = $addBed;
    }

    public function getChildrenPolicy() : string{
        return $this->childrenPolicy;
    }

    public function setChildrenPolicy(string $childrenPolicy){
        $this->childrenPolicy = $childrenPolicy;
    }


    public function getApiName() : string {
        return "taobao.xhotel.roomtype.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rid)) {
            $requestParam["rid"] = TopUtil::convertBasic($this->rid);
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

        if (!TopUtil::checkEmpty($this->bedType)) {
            $requestParam["bed_type"] = TopUtil::convertBasic($this->bedType);
        }

        if (!TopUtil::checkEmpty($this->bedSize)) {
            $requestParam["bed_size"] = TopUtil::convertBasic($this->bedSize);
        }

        if (!TopUtil::checkEmpty($this->internet)) {
            $requestParam["internet"] = TopUtil::convertBasic($this->internet);
        }

        if (!TopUtil::checkEmpty($this->service)) {
            $requestParam["service"] = TopUtil::convertBasic($this->service);
        }

        if (!TopUtil::checkEmpty($this->windowType)) {
            $requestParam["window_type"] = TopUtil::convertBasic($this->windowType);
        }

        if (!TopUtil::checkEmpty($this->extend)) {
            $requestParam["extend"] = TopUtil::convertBasic($this->extend);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->srid)) {
            $requestParam["srid"] = TopUtil::convertBasic($this->srid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->hid)) {
            $requestParam["hid"] = TopUtil::convertBasic($this->hid);
        }

        if (!TopUtil::checkEmpty($this->hotelCode)) {
            $requestParam["hotel_code"] = TopUtil::convertBasic($this->hotelCode);
        }

        if (!TopUtil::checkEmpty($this->pics)) {
            $requestParam["pics"] = TopUtil::convertBasic($this->pics);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
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

        if (!TopUtil::checkEmpty($this->bedInfo)) {
            $requestParam["bed_info"] = TopUtil::convertBasic($this->bedInfo);
        }

        if (!TopUtil::checkEmpty($this->newOuterId)) {
            $requestParam["new_outer_id"] = TopUtil::convertBasic($this->newOuterId);
        }

        if (!TopUtil::checkEmpty($this->standardRoomFacilities)) {
            $requestParam["standard_room_facilities"] = TopUtil::convertBasic($this->standardRoomFacilities);
        }

        if (!TopUtil::checkEmpty($this->windowDesc)) {
            $requestParam["window_desc"] = TopUtil::convertBasic($this->windowDesc);
        }

        if (!TopUtil::checkEmpty($this->addBed)) {
            $requestParam["add_bed"] = TopUtil::convertBasic($this->addBed);
        }

        if (!TopUtil::checkEmpty($this->childrenPolicy)) {
            $requestParam["children_policy"] = TopUtil::convertBasic($this->childrenPolicy);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


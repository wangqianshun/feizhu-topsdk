<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelRoomtypeAddXRoomType {

    /**
        rid
     **/
    public $rid;

    /**
        hid
     **/
    public $hid;

    /**
        创建时间
     **/
    public $created_time;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        此字段已废弃
     **/
    public $match_status;

    /**
        房型状态。0:正常，-1:删除，-2:停售
     **/
    public $status;

    /**
        出错原因,没有匹配上标准房型时，小二拒绝的理由
     **/
    public $error_info;

    /**
        卖家系统id
     **/
    public $outer_id;

    /**
        房型名称
     **/
    public $name;

    /**
        最大入住人数
     **/
    public $max_occupancy;

    /**
        可选值：A,B,C,D。分别代表： A：15平米以下，B：16－30平米，C：31－50平米，D：50平米以上 2）也可以自己定义，比如：40平方米
     **/
    public $area;

    /**
        客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
     **/
    public $floor;

    /**
        床型。按自己定义存储，比如：高低床、上下床
     **/
    public $bed_type;

    /**
        床宽。
     **/
    public $bed_size;

    /**
        宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
     **/
    public $internet;

    /**
        设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {&quot;bar&quot;:false,&quot;catv&quot;:false,&quot;ddd&quot;:false,&quot;idd&quot;:false,&quot;pubtoilet&quot;:false,&quot;toilet&quot;:false}
     **/
    public $service;

    /**
        窗型,0：无窗/1：有窗
     **/
    public $window_type;

    /**
        扩展信息的JSON。 注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
     **/
    public $extend;

    /**
        标准房型信息
     **/
    public $s_roomtype;

    /**
        卖家房型英文名称
     **/
    public $name_e;


    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getCreatedTime() : string{
        return $this->created_time;
    }

    public function setCreatedTime(string $createdTime){
        $this->created_time = $createdTime;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getMatchStatus() : int{
        return $this->match_status;
    }

    public function setMatchStatus(int $matchStatus){
        $this->match_status = $matchStatus;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getErrorInfo() : string{
        return $this->error_info;
    }

    public function setErrorInfo(string $errorInfo){
        $this->error_info = $errorInfo;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMaxOccupancy() : int{
        return $this->max_occupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->max_occupancy = $maxOccupancy;
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
        return $this->bed_type;
    }

    public function setBedType(string $bedType){
        $this->bed_type = $bedType;
    }

    public function getBedSize() : string{
        return $this->bed_size;
    }

    public function setBedSize(string $bedSize){
        $this->bed_size = $bedSize;
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
        return $this->window_type;
    }

    public function setWindowType(int $windowType){
        $this->window_type = $windowType;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getSRoomtype() : TaobaoXhotelRoomtypeAddSRoomType{
        return $this->s_roomtype;
    }

    public function setSRoomtype(TaobaoXhotelRoomtypeAddSRoomType $sRoomtype){
        $this->s_roomtype = $sRoomtype;
    }

    public function getNameE() : string{
        return $this->name_e;
    }

    public function setNameE(string $nameE){
        $this->name_e = $nameE;
    }


}


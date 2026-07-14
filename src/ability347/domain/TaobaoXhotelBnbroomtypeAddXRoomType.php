<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbroomtypeAddXRoomType {

    /**
        飞猪门店id
     **/
    public $hid;

    /**
        飞猪房源id
     **/
    public $rid;

    /**
        房源状态
     **/
    public $status;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        匹配状态: 0：待系统匹配 1：已系统匹配，匹配成功，待卖家确认 2：已系统匹配，匹配失败，待人工匹配 3：已人工匹配，匹配成功，待卖家确认 4：已人工匹配，匹配失败 5：卖家已确认，确认&ldquo;YES&rdquo; 6：卖家已确认，确认&ldquo;NO&rdquo; 7:已系统匹配，但是匹配重复，待人工确认
     **/
    public $match_status;

    /**
        卖家系统id
     **/
    public $outer_id;

    /**
        房源名称
     **/
    public $name;

    /**
        最大入住人数
     **/
    public $max_occupancy;

    /**
        面积
     **/
    public $area;

    /**
        暂时不对外
     **/
    public $extend;

    /**
        窗型,0：无窗/1：有窗
     **/
    public $window_type;

    /**
        设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {&quot;bar&quot;:false,&quot;catv&quot;:false,&quot;ddd&quot;:false,&quot;idd&quot;:false,&quot;pubtoilet&quot;:false,&quot;toilet&quot;:false}
     **/
    public $service;

    /**
        宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
     **/
    public $internet;

    /**
        客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
     **/
    public $floor;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

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

    public function getMatchStatus() : int{
        return $this->match_status;
    }

    public function setMatchStatus(int $matchStatus){
        $this->match_status = $matchStatus;
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

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getWindowType() : int{
        return $this->window_type;
    }

    public function setWindowType(int $windowType){
        $this->window_type = $windowType;
    }

    public function getService() : string{
        return $this->service;
    }

    public function setService(string $service){
        $this->service = $service;
    }

    public function getInternet() : string{
        return $this->internet;
    }

    public function setInternet(string $internet){
        $this->internet = $internet;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbhotelpriceTrackSroomBasic {

    /**
        名称
     **/
    public $name;

    /**
        英文名称
     **/
    public $en_name;

    /**
        楼层
     **/
    public $floor;

    /**
        面积
     **/
    public $area;

    /**
        房间数
     **/
    public $roomn_um;

    /**
        窗型
     **/
    public $window_type;

    /**
        窗型缺陷
     **/
    public $window_type_defect;

    /**
        特殊窗型
     **/
    public $window_type_special;

    /**
        最大入住人
     **/
    public $max_occupancy;

    /**
        最大入住人、儿童
     **/
    public $maximum_occupancy;

    /**
        是否床位房
     **/
    public $dorm_room;

    /**
        是否房东房客合住
     **/
    public $shared_room;

    /**
        是否可加婴儿床
     **/
    public $add_child_bed;

    /**
        是否可加床
     **/
    public $add_bed;

    /**
        房型图片
     **/
    public $room_images;

    /**
        床信息
     **/
    public $bed_info;

    /**
        禁烟政策：1:禁，2:不禁，3:部分禁
     **/
    public $smoke_simple_policy;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getEnName() : string{
        return $this->en_name;
    }

    public function setEnName(string $enName){
        $this->en_name = $enName;
    }

    public function getFloor() : string{
        return $this->floor;
    }

    public function setFloor(string $floor){
        $this->floor = $floor;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getRoomnUm() : int{
        return $this->roomn_um;
    }

    public function setRoomnUm(int $roomnUm){
        $this->roomn_um = $roomnUm;
    }

    public function getWindowType() : string{
        return $this->window_type;
    }

    public function setWindowType(string $windowType){
        $this->window_type = $windowType;
    }

    public function getWindowTypeDefect() : string{
        return $this->window_type_defect;
    }

    public function setWindowTypeDefect(string $windowTypeDefect){
        $this->window_type_defect = $windowTypeDefect;
    }

    public function getWindowTypeSpecial() : string{
        return $this->window_type_special;
    }

    public function setWindowTypeSpecial(string $windowTypeSpecial){
        $this->window_type_special = $windowTypeSpecial;
    }

    public function getMaxOccupancy() : int{
        return $this->max_occupancy;
    }

    public function setMaxOccupancy(int $maxOccupancy){
        $this->max_occupancy = $maxOccupancy;
    }

    public function getMaximumOccupancy() : string{
        return $this->maximum_occupancy;
    }

    public function setMaximumOccupancy(string $maximumOccupancy){
        $this->maximum_occupancy = $maximumOccupancy;
    }

    public function getDormRoom() : int{
        return $this->dorm_room;
    }

    public function setDormRoom(int $dormRoom){
        $this->dorm_room = $dormRoom;
    }

    public function getSharedRoom() : int{
        return $this->shared_room;
    }

    public function setSharedRoom(int $sharedRoom){
        $this->shared_room = $sharedRoom;
    }

    public function getAddChildBed() : int{
        return $this->add_child_bed;
    }

    public function setAddChildBed(int $addChildBed){
        $this->add_child_bed = $addChildBed;
    }

    public function getAddBed() : int{
        return $this->add_bed;
    }

    public function setAddBed(int $addBed){
        $this->add_bed = $addBed;
    }

    public function getRoomImages() : array{
        return $this->room_images;
    }

    public function setRoomImages(array $roomImages){
        $this->room_images = $roomImages;
    }

    public function getBedInfo() : TaobaoXhotelBnbhotelpriceTrackBedInfoDTO{
        return $this->bed_info;
    }

    public function setBedInfo(TaobaoXhotelBnbhotelpriceTrackBedInfoDTO $bedInfo){
        $this->bed_info = $bedInfo;
    }

    public function getSmokeSimplePolicy() : int{
        return $this->smoke_simple_policy;
    }

    public function setSmokeSimplePolicy(int $smokeSimplePolicy){
        $this->smoke_simple_policy = $smokeSimplePolicy;
    }


}


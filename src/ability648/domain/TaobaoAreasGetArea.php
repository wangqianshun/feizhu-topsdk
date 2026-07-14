<?php
namespace FeiZhu\TopSdk\Ability648\Domain;

class TaobaoAreasGetArea {

    /**
        标准行政区域代码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20120105_402777427.htm
     **/
    public $id;

    /**
        区域类型.area区域 1:country/国家;2:province/省/自治区/直辖市;3:city/地区(省下面的地级市);4:district/县/市(县级市)/区;abroad:海外. 比如北京市的area_type = 2,朝阳区是北京市的一个区,所以朝阳区的area_type = 4.
     **/
    public $type;

    /**
        地域名称.如北京市,杭州市,西湖区,每一个area_id 都代表了一个具体的地区.
     **/
    public $name;

    /**
        父节点区域标识.如北京市的area_id是110100,朝阳区是北京市的一个区,所以朝阳区的parent_id就是北京市的area_id.
     **/
    public $parent_id;

    /**
        具体一个地区的邮编
     **/
    public $zip;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getParentId() : int{
        return $this->parent_id;
    }

    public function setParentId(int $parentId){
        $this->parent_id = $parentId;
    }

    public function getZip() : string{
        return $this->zip;
    }

    public function setZip(string $zip){
        $this->zip = $zip;
    }


}


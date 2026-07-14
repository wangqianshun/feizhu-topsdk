<?php
namespace FeiZhu\TopSdk\Ability305\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoTmcQueueGetRequest {

    /**
        TMC组名
     **/
    private $groupName;


    public function getGroupName() : string{
        return $this->groupName;
    }

    public function setGroupName(string $groupName){
        $this->groupName = $groupName;
    }


    public function getApiName() : string {
        return "taobao.tmc.queue.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->groupName)) {
            $requestParam["group_name"] = TopUtil::convertBasic($this->groupName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


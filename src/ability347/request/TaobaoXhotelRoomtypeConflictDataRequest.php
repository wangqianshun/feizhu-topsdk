<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelRoomtypeConflictDataRequest {

    /**
        查询第几页数据
     **/
    private $currentPage;


    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }


    public function getApiName() : string {
        return "taobao.xhotel.roomtype.conflict.data";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


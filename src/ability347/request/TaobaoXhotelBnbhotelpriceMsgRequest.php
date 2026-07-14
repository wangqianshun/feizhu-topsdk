<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbhotelpriceMsgRequest {

    /**
        xc的酒店ID
     **/
    private $xcHotelId;

    /**
        消息标题
     **/
    private $title;

    /**
        消息体
     **/
    private $msgList;

    /**
        基础信息
     **/
    private $extraMap;


    public function getXcHotelId() : string{
        return $this->xcHotelId;
    }

    public function setXcHotelId(string $xcHotelId){
        $this->xcHotelId = $xcHotelId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getMsgList() : string{
        return $this->msgList;
    }

    public function setMsgList(string $msgList){
        $this->msgList = $msgList;
    }

    public function getExtraMap() : string{
        return $this->extraMap;
    }

    public function setExtraMap(string $extraMap){
        $this->extraMap = $extraMap;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbhotelprice.msg";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->xcHotelId)) {
            $requestParam["xc_hotel_id"] = TopUtil::convertBasic($this->xcHotelId);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->msgList)) {
            $requestParam["msg_list"] = TopUtil::convertBasic($this->msgList);
        }

        if (!TopUtil::checkEmpty($this->extraMap)) {
            $requestParam["extra_map"] = TopUtil::convertBasic($this->extraMap);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


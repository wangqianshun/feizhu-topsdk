<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Ability347\Domain\TaobaoXhotelBnbreviewReplyMediaInfo;

class TaobaoXhotelBnbreviewReplyRequest {

    /**
        外部评价ID
     **/
    private $outerId;

    /**
        评价内容
     **/
    private $content;

    /**
        评价类型，1-主评，2-追评
     **/
    private $wrateType;

    /**
        评价ID
     **/
    private $wrateId;

    /**
        主评ID
     **/
    private $itemWrateId;

    /**
        商品ID
     **/
    private $itemId;

    /**
        媒体信息
     **/
    private $mediaInfo;


    public function getOuterId() : int{
        return $this->outerId;
    }

    public function setOuterId(int $outerId){
        $this->outerId = $outerId;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getWrateType() : int{
        return $this->wrateType;
    }

    public function setWrateType(int $wrateType){
        $this->wrateType = $wrateType;
    }

    public function getWrateId() : int{
        return $this->wrateId;
    }

    public function setWrateId(int $wrateId){
        $this->wrateId = $wrateId;
    }

    public function getItemWrateId() : int{
        return $this->itemWrateId;
    }

    public function setItemWrateId(int $itemWrateId){
        $this->itemWrateId = $itemWrateId;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getMediaInfo() : TaobaoXhotelBnbreviewReplyMediaInfo{
        return $this->mediaInfo;
    }

    public function setMediaInfo(TaobaoXhotelBnbreviewReplyMediaInfo $mediaInfo){
        $this->mediaInfo = $mediaInfo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbreview.reply";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->content)) {
            $requestParam["content"] = TopUtil::convertBasic($this->content);
        }

        if (!TopUtil::checkEmpty($this->wrateType)) {
            $requestParam["wrate_type"] = TopUtil::convertBasic($this->wrateType);
        }

        if (!TopUtil::checkEmpty($this->wrateId)) {
            $requestParam["wrate_id"] = TopUtil::convertBasic($this->wrateId);
        }

        if (!TopUtil::checkEmpty($this->itemWrateId)) {
            $requestParam["item_wrate_id"] = TopUtil::convertBasic($this->itemWrateId);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->mediaInfo)) {
            $requestParam["media_info"] = TopUtil::convertStruct($this->mediaInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


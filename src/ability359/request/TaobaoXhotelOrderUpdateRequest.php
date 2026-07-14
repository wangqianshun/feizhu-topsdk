<?php
namespace FeiZhu\TopSdk\Ability359\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelOrderUpdateRequest {

    /**
        订单号
     **/
    private $tid;

    /**
        操作的类型：1.确认无房（取消预订，710发送短信提醒买家申请退款）2.确认预订 3.入住 4.离店 5.noshow 6.关单
     **/
    private $optType;

    /**
        是否把代理直签的订单同步到酒店，Y为同步，N不同步
     **/
    private $syncToHotel;

    /**
        退款费用
     **/
    private $refundFee;

    /**
        取消类型，6 代表的是用户取消，reasonType=7代表的是小二协商
     **/
    private $reasonType;

    /**
        开票金额
     **/
    private $invoiceAmount;

    /**
        外部订单号（酒店确认号）
     **/
    private $confirmCode;

    /**
        错误码
     **/
    private $hotelReverseReasonCode;

    /**
        拒单原因描述
     **/
    private $hotelReverseReasonDesc;

    /**
        补充细节
     **/
    private $hotelReverseReasonDetail;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getOptType() : int{
        return $this->optType;
    }

    public function setOptType(int $optType){
        $this->optType = $optType;
    }

    public function getSyncToHotel() : string{
        return $this->syncToHotel;
    }

    public function setSyncToHotel(string $syncToHotel){
        $this->syncToHotel = $syncToHotel;
    }

    public function getRefundFee() : int{
        return $this->refundFee;
    }

    public function setRefundFee(int $refundFee){
        $this->refundFee = $refundFee;
    }

    public function getReasonType() : int{
        return $this->reasonType;
    }

    public function setReasonType(int $reasonType){
        $this->reasonType = $reasonType;
    }

    public function getInvoiceAmount() : int{
        return $this->invoiceAmount;
    }

    public function setInvoiceAmount(int $invoiceAmount){
        $this->invoiceAmount = $invoiceAmount;
    }

    public function getConfirmCode() : string{
        return $this->confirmCode;
    }

    public function setConfirmCode(string $confirmCode){
        $this->confirmCode = $confirmCode;
    }

    public function getHotelReverseReasonCode() : int{
        return $this->hotelReverseReasonCode;
    }

    public function setHotelReverseReasonCode(int $hotelReverseReasonCode){
        $this->hotelReverseReasonCode = $hotelReverseReasonCode;
    }

    public function getHotelReverseReasonDesc() : string{
        return $this->hotelReverseReasonDesc;
    }

    public function setHotelReverseReasonDesc(string $hotelReverseReasonDesc){
        $this->hotelReverseReasonDesc = $hotelReverseReasonDesc;
    }

    public function getHotelReverseReasonDetail() : string{
        return $this->hotelReverseReasonDetail;
    }

    public function setHotelReverseReasonDetail(string $hotelReverseReasonDetail){
        $this->hotelReverseReasonDetail = $hotelReverseReasonDetail;
    }


    public function getApiName() : string {
        return "taobao.xhotel.order.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->optType)) {
            $requestParam["opt_type"] = TopUtil::convertBasic($this->optType);
        }

        if (!TopUtil::checkEmpty($this->syncToHotel)) {
            $requestParam["sync_to_hotel"] = TopUtil::convertBasic($this->syncToHotel);
        }

        if (!TopUtil::checkEmpty($this->refundFee)) {
            $requestParam["refund_fee"] = TopUtil::convertBasic($this->refundFee);
        }

        if (!TopUtil::checkEmpty($this->reasonType)) {
            $requestParam["reason_type"] = TopUtil::convertBasic($this->reasonType);
        }

        if (!TopUtil::checkEmpty($this->invoiceAmount)) {
            $requestParam["invoice_amount"] = TopUtil::convertBasic($this->invoiceAmount);
        }

        if (!TopUtil::checkEmpty($this->confirmCode)) {
            $requestParam["confirm_code"] = TopUtil::convertBasic($this->confirmCode);
        }

        if (!TopUtil::checkEmpty($this->hotelReverseReasonCode)) {
            $requestParam["hotel_reverse_reason_code"] = TopUtil::convertBasic($this->hotelReverseReasonCode);
        }

        if (!TopUtil::checkEmpty($this->hotelReverseReasonDesc)) {
            $requestParam["hotel_reverse_reason_desc"] = TopUtil::convertBasic($this->hotelReverseReasonDesc);
        }

        if (!TopUtil::checkEmpty($this->hotelReverseReasonDetail)) {
            $requestParam["hotel_reverse_reason_detail"] = TopUtil::convertBasic($this->hotelReverseReasonDetail);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


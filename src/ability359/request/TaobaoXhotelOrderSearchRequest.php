<?php
namespace FeiZhu\TopSdk\Ability359\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelOrderSearchRequest {

    /**
        酒店订单oids列表，多个oid用英文逗号隔开，一次不超过20个。
     **/
    private $orderIds;

    /**
        酒店订单tids列表，多个tid用英文逗号隔开，一次不超过20个。oids和tids都传的情况下默认使用tids
     **/
    private $orderTids;

    /**
        订单创建时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
     **/
    private $createdStart;

    /**
        订单创建时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于created_start或者间隔不能大于30
     **/
    private $createdEnd;

    /**
        分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
     **/
    private $pageNo;

    /**
        系统商标识
     **/
    private $vendor;

    /**
        外部订单号out_oids列表，多个oid用英文逗号隔开，一次不超过20个。
     **/
    private $outOids;

    /**
        入住时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
     **/
    private $checkinDateStart;

    /**
        入住时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于checkin_date_start或者间隔不能大于30
     **/
    private $checkinDateEnd;

    /**
        离店时间查询起始时间，格式为：yyyy-MM-dd HH:mm:ss
     **/
    private $checkoutDateStart;

    /**
        离店时间查询结束时间，格式为：yyyy-MM-dd HH:mm:ss。不能早于checkout_date_start或者间隔不能大于30
     **/
    private $checkoutDateEnd;

    /**
        订单状态（可发多个，逗号隔开）
     **/
    private $tradeStatus;

    /**
        订单类型（true为直连，false为非直连）
     **/
    private $direct;


    public function getOrderIds() : string{
        return $this->orderIds;
    }

    public function setOrderIds(string $orderIds){
        $this->orderIds = $orderIds;
    }

    public function getOrderTids() : string{
        return $this->orderTids;
    }

    public function setOrderTids(string $orderTids){
        $this->orderTids = $orderTids;
    }

    public function getCreatedStart() : string{
        return $this->createdStart;
    }

    public function setCreatedStart(string $createdStart){
        $this->createdStart = $createdStart;
    }

    public function getCreatedEnd() : string{
        return $this->createdEnd;
    }

    public function setCreatedEnd(string $createdEnd){
        $this->createdEnd = $createdEnd;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getOutOids() : string{
        return $this->outOids;
    }

    public function setOutOids(string $outOids){
        $this->outOids = $outOids;
    }

    public function getCheckinDateStart() : string{
        return $this->checkinDateStart;
    }

    public function setCheckinDateStart(string $checkinDateStart){
        $this->checkinDateStart = $checkinDateStart;
    }

    public function getCheckinDateEnd() : string{
        return $this->checkinDateEnd;
    }

    public function setCheckinDateEnd(string $checkinDateEnd){
        $this->checkinDateEnd = $checkinDateEnd;
    }

    public function getCheckoutDateStart() : string{
        return $this->checkoutDateStart;
    }

    public function setCheckoutDateStart(string $checkoutDateStart){
        $this->checkoutDateStart = $checkoutDateStart;
    }

    public function getCheckoutDateEnd() : string{
        return $this->checkoutDateEnd;
    }

    public function setCheckoutDateEnd(string $checkoutDateEnd){
        $this->checkoutDateEnd = $checkoutDateEnd;
    }

    public function getTradeStatus() : string{
        return $this->tradeStatus;
    }

    public function setTradeStatus(string $tradeStatus){
        $this->tradeStatus = $tradeStatus;
    }

    public function getDirect() : bool{
        return $this->direct;
    }

    public function setDirect(bool $direct){
        $this->direct = $direct;
    }


    public function getApiName() : string {
        return "taobao.xhotel.order.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderIds)) {
            $requestParam["order_ids"] = TopUtil::convertBasic($this->orderIds);
        }

        if (!TopUtil::checkEmpty($this->orderTids)) {
            $requestParam["order_tids"] = TopUtil::convertBasic($this->orderTids);
        }

        if (!TopUtil::checkEmpty($this->createdStart)) {
            $requestParam["created_start"] = TopUtil::convertBasic($this->createdStart);
        }

        if (!TopUtil::checkEmpty($this->createdEnd)) {
            $requestParam["created_end"] = TopUtil::convertBasic($this->createdEnd);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->outOids)) {
            $requestParam["out_oids"] = TopUtil::convertBasic($this->outOids);
        }

        if (!TopUtil::checkEmpty($this->checkinDateStart)) {
            $requestParam["checkin_date_start"] = TopUtil::convertBasic($this->checkinDateStart);
        }

        if (!TopUtil::checkEmpty($this->checkinDateEnd)) {
            $requestParam["checkin_date_end"] = TopUtil::convertBasic($this->checkinDateEnd);
        }

        if (!TopUtil::checkEmpty($this->checkoutDateStart)) {
            $requestParam["checkout_date_start"] = TopUtil::convertBasic($this->checkoutDateStart);
        }

        if (!TopUtil::checkEmpty($this->checkoutDateEnd)) {
            $requestParam["checkout_date_end"] = TopUtil::convertBasic($this->checkoutDateEnd);
        }

        if (!TopUtil::checkEmpty($this->tradeStatus)) {
            $requestParam["trade_status"] = TopUtil::convertBasic($this->tradeStatus);
        }

        if (!TopUtil::checkEmpty($this->direct)) {
            $requestParam["direct"] = TopUtil::convertBasic($this->direct);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


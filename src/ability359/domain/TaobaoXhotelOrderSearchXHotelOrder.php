<?php
namespace FeiZhu\TopSdk\Ability359\Domain;

class TaobaoXhotelOrderSearchXHotelOrder {

    /**
        酒店id
     **/
    public $hid;

    /**
        合作方订单号,最长250个字符
     **/
    public $out_oid;

    /**
        离店时间
     **/
    public $checkout_date;

    /**
        入住人信息
     **/
    public $guests;

    /**
        RatePlan 中的 rpid
     **/
    public $rpid;

    /**
        支付类型 可选值 1：预付 5：前台面付
     **/
    public $type;

    /**
        订单创建时间
     **/
    public $created;

    /**
        酒店订单id
     **/
    public $oid;

    /**
        tid
     **/
    public $tid;

    /**
        买家最晚到达时间
     **/
    public $arrive_late;

    /**
        联系人姓名
     **/
    public $contact_name;

    /**
        入住时间
     **/
    public $checkin_date;

    /**
        天数
     **/
    public $nights;

    /**
        卖家淘宝账号
     **/
    public $seller_nick;

    /**
        房间数
     **/
    public $room_number;

    /**
        实付款（分）
     **/
    public $payment;

    /**
        联系人电话
     **/
    public $contact_phone;

    /**
        买家最早到达时间
     **/
    public $arrive_early;

    /**
        付款时间
     **/
    public $pay_time;

    /**
        交易状态。 WAIT_BUYER_PAY:预订中/等待买家付款, WAIT_SELLER_SEND_GOODS:预订中/等待卖家发货(确认), TRADE_CLOSED:结束/预订失败/交易关闭, TRADE_FINISHED:结束/交易成功, TRADE_NO_CREATE_PAY:结束/预订失败/没有创建支付宝交易, TRADE_CLOSED_BY_TAOBAO:结束/预订失败/预订被卖家关闭, TRADE_SUCCESS:交易中/预订成功/卖家已确认, TRADE_CHECKIN:交易中/预定成功/买家入住, TRADE_CHECKOUT:交易中/预定成功/买家离店, TRADE_SETTLEING:交易中/预定成功/结账中, TRADE_SETTLE_SUCCESS:结束/预定成功/结账成功
     **/
    public $trade_status;

    /**
        订单修改时间
     **/
    public $modified;

    /**
        买家淘宝账号
     **/
    public $buyer_nick;

    /**
        买家留言
     **/
    public $message;

    /**
        房型id
     **/
    public $rid;

    /**
        结束时间
     **/
    public $end_time;

    /**
        总房价（分）
     **/
    public $total_room_price;

    /**
        商品id
     **/
    public $gid;

    /**
        下单时每间夜的价格（分）
     **/
    public $prices;

    /**
        支付宝交易号，28位字符
     **/
    public $alipay_trade_no;

    /**
        预付订单使用，1未发货，2已发货，3已收货，4已经退货，8还未创建物流订单
     **/
    public $logistics_status;

    /**
        预付订单使用，1买家已经申请退款，等待卖家同意，2卖家已经同意退款，等待买家退货，3买家已经退货，等待卖家确认收货，4退款关闭，5退款成功，6卖家拒绝退款，9没有申请退款
     **/
    public $refund_status;


    public function getHid() : int{
        return $this->hid;
    }

    public function setHid(int $hid){
        $this->hid = $hid;
    }

    public function getOutOid() : string{
        return $this->out_oid;
    }

    public function setOutOid(string $outOid){
        $this->out_oid = $outOid;
    }

    public function getCheckoutDate() : string{
        return $this->checkout_date;
    }

    public function setCheckoutDate(string $checkoutDate){
        $this->checkout_date = $checkoutDate;
    }

    public function getGuests() : array{
        return $this->guests;
    }

    public function setGuests(array $guests){
        $this->guests = $guests;
    }

    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getArriveLate() : string{
        return $this->arrive_late;
    }

    public function setArriveLate(string $arriveLate){
        $this->arrive_late = $arriveLate;
    }

    public function getContactName() : string{
        return $this->contact_name;
    }

    public function setContactName(string $contactName){
        $this->contact_name = $contactName;
    }

    public function getCheckinDate() : string{
        return $this->checkin_date;
    }

    public function setCheckinDate(string $checkinDate){
        $this->checkin_date = $checkinDate;
    }

    public function getNights() : int{
        return $this->nights;
    }

    public function setNights(int $nights){
        $this->nights = $nights;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getRoomNumber() : int{
        return $this->room_number;
    }

    public function setRoomNumber(int $roomNumber){
        $this->room_number = $roomNumber;
    }

    public function getPayment() : int{
        return $this->payment;
    }

    public function setPayment(int $payment){
        $this->payment = $payment;
    }

    public function getContactPhone() : string{
        return $this->contact_phone;
    }

    public function setContactPhone(string $contactPhone){
        $this->contact_phone = $contactPhone;
    }

    public function getArriveEarly() : string{
        return $this->arrive_early;
    }

    public function setArriveEarly(string $arriveEarly){
        $this->arrive_early = $arriveEarly;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getTradeStatus() : string{
        return $this->trade_status;
    }

    public function setTradeStatus(string $tradeStatus){
        $this->trade_status = $tradeStatus;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getRid() : int{
        return $this->rid;
    }

    public function setRid(int $rid){
        $this->rid = $rid;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getTotalRoomPrice() : int{
        return $this->total_room_price;
    }

    public function setTotalRoomPrice(int $totalRoomPrice){
        $this->total_room_price = $totalRoomPrice;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getPrices() : array{
        return $this->prices;
    }

    public function setPrices(array $prices){
        $this->prices = $prices;
    }

    public function getAlipayTradeNo() : string{
        return $this->alipay_trade_no;
    }

    public function setAlipayTradeNo(string $alipayTradeNo){
        $this->alipay_trade_no = $alipayTradeNo;
    }

    public function getLogisticsStatus() : string{
        return $this->logistics_status;
    }

    public function setLogisticsStatus(string $logisticsStatus){
        $this->logistics_status = $logisticsStatus;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }


}


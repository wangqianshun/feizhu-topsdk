<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryOrderQueryResponse {

    /**
        订单id
     **/
    public $order_id;

    /**
        用户id
     **/
    public $open_id;

    /**
        订单状态，PENDING_USER_AUTH:待用户认证 CREDIT_REVIEWING:信用审核中 PENDING_PAYMENT:待支付 PREPARING:备货中 SHIPPED:已发货 RENTING:租用中 PENDING_RETURN:待归还 RETURNING:归还中 PENDING_QUALITY_INSPECTION:待质检 RETURN_PENDING_DEDUCT:已归还待扣款 RETURN_SUCCESS:归还成功 CLOSED:租赁关闭
     **/
    public $status;

    /**
        订单类型，SHORT_TERM:短租 LONG_TERM:长租 RENEWAL:续租 BUYOUT:买断
     **/
    public $order_type;

    /**
        创建时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $create_time;

    /**
        支付时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $pay_time;

    /**
        审核时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $audit_time;

    /**
        发货时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $ship_time;

    /**
        用户签收时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $user_sign_time;

    /**
        用户归还时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $user_return_time;

    /**
        归还成功时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $return_success_time;

    /**
        订单关闭时间，格式：yyyy-MM-dd HH:mm:ss
     **/
    public $close_order_time;

    /**
        归还物流单号
     **/
    public $return_logistics_no;

    /**
        实名信息
     **/
    public $real_name_info;

    /**
        买家收货地址信息
     **/
    public $buyer_address_info;

    /**
        卖家归还地址信息
     **/
    public $seller_address_info;

    /**
        订单凭证信息
     **/
    public $credential_info;

    /**
        商品id
     **/
    public $item_id;

    /**
        skuid
     **/
    public $sku_id;

    /**
        商品数量
     **/
    public $quantity;

    /**
        商品原始价格（单件），单位：分
     **/
    public $item_original_price;

    /**
        订单租期（用户下单时选择的租期），格式yyyyMMdd-yyyyMMdd
     **/
    public $order_lease_date;

    /**
        续租到期日期，格式yyyyMMdd-yyyyMMdd
     **/
    public $extended_lease_date;

    /**
        修正后租期结束日期（如因物流原因导致延后签收而变更租期，无变更则和订单租期一致），格式yyyyMMdd-yyyyMMdd
     **/
    public $modified_lease_date;

    /**
        实际租期结束日期，格式yyyyMMdd-yyyyMMdd
     **/
    public $actual_lease_date;

    /**
        租期天数
     **/
    public $lease_days;

    /**
        租期周期，默认1
     **/
    public $lease_periods;

    /**
        订单总金额（优惠前租金+逾期租金+质损费用，单位：分）
     **/
    public $total_amount;

    /**
        实付金额（实付租金+逾期租金+质损费用，单位：分）
     **/
    public $paid_amount;

    /**
        租金金额（单位：分）
     **/
    public $rent_amount;

    /**
        押金金额（单位：分）
     **/
    public $deposit_amount;

    /**
        逾期租金（单位：分）
     **/
    public $overdue_rent;

    /**
        预估逾期租金，飞猪侧根据逾期天数和日租金计算生成（单位：分）
     **/
    public $estimated_overdue_rent;

    /**
        损坏赔偿费（单位：分）
     **/
    public $damage_fee;

    /**
        押金退还金额（单位：分）
     **/
    public $deposit_refund_amount;

    /**
        租金交易流水号
     **/
    public $rent_transaction_id;

    /**
        押金交易流水号
     **/
    public $deposit_transaction_id;

    /**
        逾期租金交易流水号
     **/
    public $overdue_rent_transaction_id;

    /**
        损坏赔偿交易流水号
     **/
    public $damage_transaction_id;

    /**
        逾期天数
     **/
    public $overdue_days;

    /**
        损坏原因
     **/
    public $damage_reason;

    /**
        订单关闭类型 FACE_VERIFY_TIMEOUT：超时未人脸识别 USER_CANCEL：用户取消 SELLER_AUDIT_TIMEOUT：商家超时未审核 SELLER_AUDIT_FAILED：商家审核不通过 USER_PAY_TIMEOUT：用户超时未支付租金/押金 SELLER_CANCEL：商家取消 CREATE_ORDER_FAILED：下单失败
     **/
    public $close_type;

    /**
        订单关闭备注
     **/
    public $close_remark;

    /**
        订单备注
     **/
    public $order_remark;

    /**
        订单状态变更记录
     **/
    public $status_change_list;

    /**
        物流发货页面链接
     **/
    public $shipping_url;

    /**
        发货物流单号
     **/
    public $ship_logistics_no;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getOpenId() : string{
        return $this->open_id;
    }

    public function setOpenId(string $openId){
        $this->open_id = $openId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getOrderType() : string{
        return $this->order_type;
    }

    public function setOrderType(string $orderType){
        $this->order_type = $orderType;
    }

    public function getCreateTime() : string{
        return $this->create_time;
    }

    public function setCreateTime(string $createTime){
        $this->create_time = $createTime;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getAuditTime() : string{
        return $this->audit_time;
    }

    public function setAuditTime(string $auditTime){
        $this->audit_time = $auditTime;
    }

    public function getShipTime() : string{
        return $this->ship_time;
    }

    public function setShipTime(string $shipTime){
        $this->ship_time = $shipTime;
    }

    public function getUserSignTime() : string{
        return $this->user_sign_time;
    }

    public function setUserSignTime(string $userSignTime){
        $this->user_sign_time = $userSignTime;
    }

    public function getUserReturnTime() : string{
        return $this->user_return_time;
    }

    public function setUserReturnTime(string $userReturnTime){
        $this->user_return_time = $userReturnTime;
    }

    public function getReturnSuccessTime() : string{
        return $this->return_success_time;
    }

    public function setReturnSuccessTime(string $returnSuccessTime){
        $this->return_success_time = $returnSuccessTime;
    }

    public function getCloseOrderTime() : string{
        return $this->close_order_time;
    }

    public function setCloseOrderTime(string $closeOrderTime){
        $this->close_order_time = $closeOrderTime;
    }

    public function getReturnLogisticsNo() : string{
        return $this->return_logistics_no;
    }

    public function setReturnLogisticsNo(string $returnLogisticsNo){
        $this->return_logistics_no = $returnLogisticsNo;
    }

    public function getRealNameInfo() : AlibabaFliggyLeaseOrderQueryRealNameInfoDto{
        return $this->real_name_info;
    }

    public function setRealNameInfo(AlibabaFliggyLeaseOrderQueryRealNameInfoDto $realNameInfo){
        $this->real_name_info = $realNameInfo;
    }

    public function getBuyerAddressInfo() : AlibabaFliggyLeaseOrderQueryReceiverAddressInfoDto{
        return $this->buyer_address_info;
    }

    public function setBuyerAddressInfo(AlibabaFliggyLeaseOrderQueryReceiverAddressInfoDto $buyerAddressInfo){
        $this->buyer_address_info = $buyerAddressInfo;
    }

    public function getSellerAddressInfo() : AlibabaFliggyLeaseOrderQueryReceiverAddressInfoDto{
        return $this->seller_address_info;
    }

    public function setSellerAddressInfo(AlibabaFliggyLeaseOrderQueryReceiverAddressInfoDto $sellerAddressInfo){
        $this->seller_address_info = $sellerAddressInfo;
    }

    public function getCredentialInfo() : AlibabaFliggyLeaseOrderQueryOrderCredentialInfoDto{
        return $this->credential_info;
    }

    public function setCredentialInfo(AlibabaFliggyLeaseOrderQueryOrderCredentialInfoDto $credentialInfo){
        $this->credential_info = $credentialInfo;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getItemOriginalPrice() : int{
        return $this->item_original_price;
    }

    public function setItemOriginalPrice(int $itemOriginalPrice){
        $this->item_original_price = $itemOriginalPrice;
    }

    public function getOrderLeaseDate() : string{
        return $this->order_lease_date;
    }

    public function setOrderLeaseDate(string $orderLeaseDate){
        $this->order_lease_date = $orderLeaseDate;
    }

    public function getExtendedLeaseDate() : string{
        return $this->extended_lease_date;
    }

    public function setExtendedLeaseDate(string $extendedLeaseDate){
        $this->extended_lease_date = $extendedLeaseDate;
    }

    public function getModifiedLeaseDate() : string{
        return $this->modified_lease_date;
    }

    public function setModifiedLeaseDate(string $modifiedLeaseDate){
        $this->modified_lease_date = $modifiedLeaseDate;
    }

    public function getActualLeaseDate() : string{
        return $this->actual_lease_date;
    }

    public function setActualLeaseDate(string $actualLeaseDate){
        $this->actual_lease_date = $actualLeaseDate;
    }

    public function getLeaseDays() : int{
        return $this->lease_days;
    }

    public function setLeaseDays(int $leaseDays){
        $this->lease_days = $leaseDays;
    }

    public function getLeasePeriods() : int{
        return $this->lease_periods;
    }

    public function setLeasePeriods(int $leasePeriods){
        $this->lease_periods = $leasePeriods;
    }

    public function getTotalAmount() : int{
        return $this->total_amount;
    }

    public function setTotalAmount(int $totalAmount){
        $this->total_amount = $totalAmount;
    }

    public function getPaidAmount() : int{
        return $this->paid_amount;
    }

    public function setPaidAmount(int $paidAmount){
        $this->paid_amount = $paidAmount;
    }

    public function getRentAmount() : int{
        return $this->rent_amount;
    }

    public function setRentAmount(int $rentAmount){
        $this->rent_amount = $rentAmount;
    }

    public function getDepositAmount() : int{
        return $this->deposit_amount;
    }

    public function setDepositAmount(int $depositAmount){
        $this->deposit_amount = $depositAmount;
    }

    public function getOverdueRent() : int{
        return $this->overdue_rent;
    }

    public function setOverdueRent(int $overdueRent){
        $this->overdue_rent = $overdueRent;
    }

    public function getEstimatedOverdueRent() : int{
        return $this->estimated_overdue_rent;
    }

    public function setEstimatedOverdueRent(int $estimatedOverdueRent){
        $this->estimated_overdue_rent = $estimatedOverdueRent;
    }

    public function getDamageFee() : int{
        return $this->damage_fee;
    }

    public function setDamageFee(int $damageFee){
        $this->damage_fee = $damageFee;
    }

    public function getDepositRefundAmount() : int{
        return $this->deposit_refund_amount;
    }

    public function setDepositRefundAmount(int $depositRefundAmount){
        $this->deposit_refund_amount = $depositRefundAmount;
    }

    public function getRentTransactionId() : string{
        return $this->rent_transaction_id;
    }

    public function setRentTransactionId(string $rentTransactionId){
        $this->rent_transaction_id = $rentTransactionId;
    }

    public function getDepositTransactionId() : string{
        return $this->deposit_transaction_id;
    }

    public function setDepositTransactionId(string $depositTransactionId){
        $this->deposit_transaction_id = $depositTransactionId;
    }

    public function getOverdueRentTransactionId() : string{
        return $this->overdue_rent_transaction_id;
    }

    public function setOverdueRentTransactionId(string $overdueRentTransactionId){
        $this->overdue_rent_transaction_id = $overdueRentTransactionId;
    }

    public function getDamageTransactionId() : string{
        return $this->damage_transaction_id;
    }

    public function setDamageTransactionId(string $damageTransactionId){
        $this->damage_transaction_id = $damageTransactionId;
    }

    public function getOverdueDays() : int{
        return $this->overdue_days;
    }

    public function setOverdueDays(int $overdueDays){
        $this->overdue_days = $overdueDays;
    }

    public function getDamageReason() : string{
        return $this->damage_reason;
    }

    public function setDamageReason(string $damageReason){
        $this->damage_reason = $damageReason;
    }

    public function getCloseType() : string{
        return $this->close_type;
    }

    public function setCloseType(string $closeType){
        $this->close_type = $closeType;
    }

    public function getCloseRemark() : string{
        return $this->close_remark;
    }

    public function setCloseRemark(string $closeRemark){
        $this->close_remark = $closeRemark;
    }

    public function getOrderRemark() : string{
        return $this->order_remark;
    }

    public function setOrderRemark(string $orderRemark){
        $this->order_remark = $orderRemark;
    }

    public function getStatusChangeList() : array{
        return $this->status_change_list;
    }

    public function setStatusChangeList(array $statusChangeList){
        $this->status_change_list = $statusChangeList;
    }

    public function getShippingUrl() : string{
        return $this->shipping_url;
    }

    public function setShippingUrl(string $shippingUrl){
        $this->shipping_url = $shippingUrl;
    }

    public function getShipLogisticsNo() : string{
        return $this->ship_logistics_no;
    }

    public function setShipLogisticsNo(string $shipLogisticsNo){
        $this->ship_logistics_no = $shipLogisticsNo;
    }


}


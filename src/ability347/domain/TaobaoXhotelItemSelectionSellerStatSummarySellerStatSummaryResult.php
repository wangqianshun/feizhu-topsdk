<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatSummarySellerStatSummaryResult {

    /**
        曝光率
     **/
    public $exposed_percent;

    /**
        supplier参数
     **/
    public $supplier_param;

    /**
        标准酒店维度曝光总数
     **/
    public $shid_total_amount;

    /**
        hid参数
     **/
    public $hid_param;

    /**
        rate最低分
     **/
    public $min_rate_score;

    /**
        不可售情况
     **/
    public $unsale_reseason_info;

    /**
        rate最高分
     **/
    public $max_rate_score;

    /**
        选品情况
     **/
    public $selection_message_info;

    /**
        rate平均分
     **/
    public $avg_rate_score;

    /**
        日期
     **/
    public $date_param;

    /**
        商品总数
     **/
    public $total_amount;

    /**
        vendor参数
     **/
    public $vendor_param;

    /**
        曝光总数
     **/
    public $exposed_amount;

    /**
        选品情况
     **/
    public $selection_message_info_json;

    /**
        不可售情况
     **/
    public $unsale_reason_info_json;

    /**
        sellerId参数
     **/
    public $seller_id_param;

    /**
        可售商品数量
     **/
    public $can_sale_amount;

    /**
        选品保留商品数量
     **/
    public $selected_amount;


    public function getExposedPercent() : string{
        return $this->exposed_percent;
    }

    public function setExposedPercent(string $exposedPercent){
        $this->exposed_percent = $exposedPercent;
    }

    public function getSupplierParam() : string{
        return $this->supplier_param;
    }

    public function setSupplierParam(string $supplierParam){
        $this->supplier_param = $supplierParam;
    }

    public function getShidTotalAmount() : string{
        return $this->shid_total_amount;
    }

    public function setShidTotalAmount(string $shidTotalAmount){
        $this->shid_total_amount = $shidTotalAmount;
    }

    public function getHidParam() : string{
        return $this->hid_param;
    }

    public function setHidParam(string $hidParam){
        $this->hid_param = $hidParam;
    }

    public function getMinRateScore() : string{
        return $this->min_rate_score;
    }

    public function setMinRateScore(string $minRateScore){
        $this->min_rate_score = $minRateScore;
    }

    public function getUnsaleReseasonInfo() : string{
        return $this->unsale_reseason_info;
    }

    public function setUnsaleReseasonInfo(string $unsaleReseasonInfo){
        $this->unsale_reseason_info = $unsaleReseasonInfo;
    }

    public function getMaxRateScore() : string{
        return $this->max_rate_score;
    }

    public function setMaxRateScore(string $maxRateScore){
        $this->max_rate_score = $maxRateScore;
    }

    public function getSelectionMessageInfo() : string{
        return $this->selection_message_info;
    }

    public function setSelectionMessageInfo(string $selectionMessageInfo){
        $this->selection_message_info = $selectionMessageInfo;
    }

    public function getAvgRateScore() : string{
        return $this->avg_rate_score;
    }

    public function setAvgRateScore(string $avgRateScore){
        $this->avg_rate_score = $avgRateScore;
    }

    public function getDateParam() : string{
        return $this->date_param;
    }

    public function setDateParam(string $dateParam){
        $this->date_param = $dateParam;
    }

    public function getTotalAmount() : string{
        return $this->total_amount;
    }

    public function setTotalAmount(string $totalAmount){
        $this->total_amount = $totalAmount;
    }

    public function getVendorParam() : string{
        return $this->vendor_param;
    }

    public function setVendorParam(string $vendorParam){
        $this->vendor_param = $vendorParam;
    }

    public function getExposedAmount() : string{
        return $this->exposed_amount;
    }

    public function setExposedAmount(string $exposedAmount){
        $this->exposed_amount = $exposedAmount;
    }

    public function getSelectionMessageInfoJson() : string{
        return $this->selection_message_info_json;
    }

    public function setSelectionMessageInfoJson(string $selectionMessageInfoJson){
        $this->selection_message_info_json = $selectionMessageInfoJson;
    }

    public function getUnsaleReasonInfoJson() : string{
        return $this->unsale_reason_info_json;
    }

    public function setUnsaleReasonInfoJson(string $unsaleReasonInfoJson){
        $this->unsale_reason_info_json = $unsaleReasonInfoJson;
    }

    public function getSellerIdParam() : string{
        return $this->seller_id_param;
    }

    public function setSellerIdParam(string $sellerIdParam){
        $this->seller_id_param = $sellerIdParam;
    }

    public function getCanSaleAmount() : string{
        return $this->can_sale_amount;
    }

    public function setCanSaleAmount(string $canSaleAmount){
        $this->can_sale_amount = $canSaleAmount;
    }

    public function getSelectedAmount() : string{
        return $this->selected_amount;
    }

    public function setSelectedAmount(string $selectedAmount){
        $this->selected_amount = $selectedAmount;
    }


}


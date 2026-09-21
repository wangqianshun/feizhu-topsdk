<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantOrderCancelCancelOrderRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        取消原因（最多100字符）
     **/
    public $reason;

    /**
        取消内容：1-整单取消（含增值服务，默认）；2-仅取消指定增值服务（主单不关闭）
     **/
    public $cancel_type;

    /**
        取消的增值服务名称列表，仅 cancelType=2 有效，如 [碎屏保障,安心保障]
     **/
    public $vas_service_names;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getCancelType() : int{
        return $this->cancel_type;
    }

    public function setCancelType(int $cancelType){
        $this->cancel_type = $cancelType;
    }

    public function getVasServiceNames() : array{
        return $this->vas_service_names;
    }

    public function setVasServiceNames(array $vasServiceNames){
        $this->vas_service_names = $vasServiceNames;
    }


}


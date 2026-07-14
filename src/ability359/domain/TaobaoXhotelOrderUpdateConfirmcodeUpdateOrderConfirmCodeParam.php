<?php
namespace FeiZhu\TopSdk\Ability359\Domain;

class TaobaoXhotelOrderUpdateConfirmcodeUpdateOrderConfirmCodeParam {

    /**
        PMS确认号
     **/
    public $pms_res_id;

    /**
        飞猪订单号
     **/
    public $tid;

    /**
        商家系统订单号
     **/
    public $out_order_id;


    public function getPmsResId() : string{
        return $this->pms_res_id;
    }

    public function setPmsResId(string $pmsResId){
        $this->pms_res_id = $pmsResId;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getOutOrderId() : string{
        return $this->out_order_id;
    }

    public function setOutOrderId(string $outOrderId){
        $this->out_order_id = $outOrderId;
    }


}


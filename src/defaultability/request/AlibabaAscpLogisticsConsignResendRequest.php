<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;

class AlibabaAscpLogisticsConsignResendRequest {

    /**
        订单id
     **/
    private $tid;

    /**
        拆单子订单列表，对应的数据是：子订单号列表。可以不传，但是如果传了则必须符合传递的规则。子订单必须是操作的物流订单的子订单的真子集
     **/
    private $subTids;

    /**
        包裹包含的运单号及快递公司编号,多包裹时，需要包含所有包裹的运单号等信息
     **/
    private $consignPkgs;

    /**
        feature参数格式，KV之间用“=”分隔，多个key之间用”;”分隔 ，范例: instantMobilePhoneNumber=12345678910表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"
     **/
    private $feature;


    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getSubTids() : string{
        return $this->subTids;
    }

    public function setSubTids(string $subTids){
        $this->subTids = $subTids;
    }

    public function getConsignPkgs() : array{
        return $this->consignPkgs;
    }

    public function setConsignPkgs(array $consignPkgs){
        $this->consignPkgs = $consignPkgs;
    }

    public function getFeature() : string{
        return $this->feature;
    }

    public function setFeature(string $feature){
        $this->feature = $feature;
    }


    public function getApiName() : string {
        return "alibaba.ascp.logistics.consign.resend";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->subTids)) {
            $requestParam["sub_tids"] = TopUtil::convertBasic($this->subTids);
        }

        if (!TopUtil::checkEmpty($this->consignPkgs)) {
            $requestParam["consign_pkgs"] = TopUtil::convertStructList($this->consignPkgs);
        }

        if (!TopUtil::checkEmpty($this->feature)) {
            $requestParam["feature"] = TopUtil::convertBasic($this->feature);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


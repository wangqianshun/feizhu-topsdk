<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class TaobaoLogisticsInstantTraceSearchTopLogisticsMailDTO {

    /**
        运单号
     **/
    public $out_sid;

    /**
        物流节点列表
     **/
    public $trace_list;

    /**
        物流公司
     **/
    public $company_name;

    /**
        交易单号
     **/
    public $tid;

    /**
        当前最新节点
     **/
    public $status;


    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }

    public function getTraceList() : array{
        return $this->trace_list;
    }

    public function setTraceList(array $traceList){
        $this->trace_list = $traceList;
    }

    public function getCompanyName() : string{
        return $this->company_name;
    }

    public function setCompanyName(string $companyName){
        $this->company_name = $companyName;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}


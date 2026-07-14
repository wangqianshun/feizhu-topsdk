<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbllmQueryRequest {

    /**
        查询扩展参数
     **/
    private $variables;

    /**
        大模型appId
     **/
    private $appId;

    /**
        大模型flowId
     **/
    private $flowId;


    public function getVariables() : string{
        return $this->variables;
    }

    public function setVariables(string $variables){
        $this->variables = $variables;
    }

    public function getAppId() : int{
        return $this->appId;
    }

    public function setAppId(int $appId){
        $this->appId = $appId;
    }

    public function getFlowId() : int{
        return $this->flowId;
    }

    public function setFlowId(int $flowId){
        $this->flowId = $flowId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbllm.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->variables)) {
            $requestParam["variables"] = TopUtil::convertBasic($this->variables);
        }

        if (!TopUtil::checkEmpty($this->appId)) {
            $requestParam["app_id"] = TopUtil::convertBasic($this->appId);
        }

        if (!TopUtil::checkEmpty($this->flowId)) {
            $requestParam["flow_id"] = TopUtil::convertBasic($this->flowId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


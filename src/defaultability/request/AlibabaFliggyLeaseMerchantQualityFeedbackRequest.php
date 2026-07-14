<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantQualityFeedbackFeedbackQualityRequest;

class AlibabaFliggyLeaseMerchantQualityFeedbackRequest {

    /**
        质检结果回传请求
     **/
    private $feedbackQualityRequest;


    public function getFeedbackQualityRequest() : AlibabaFliggyLeaseMerchantQualityFeedbackFeedbackQualityRequest{
        return $this->feedbackQualityRequest;
    }

    public function setFeedbackQualityRequest(AlibabaFliggyLeaseMerchantQualityFeedbackFeedbackQualityRequest $feedbackQualityRequest){
        $this->feedbackQualityRequest = $feedbackQualityRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.quality.feedback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->feedbackQualityRequest)) {
            $requestParam["feedback_quality_request"] = TopUtil::convertStruct($this->feedbackQualityRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelServicetimeUpdateRequest {

    /**
        请按照示例值的格式来填写，涉及到是否当日订单，是否展示，周一到周日的服务时间，业务id,业务类型1为卖家，2为supplier ，3为酒店。[{"businessId":11925099374,"businessType":3,"displayItemInNonWorkingTime":1,"mondayConfirmLocalTime":"09:00-18:00","operator":"操作人","orderConfirmType":1,"saturdayConfirmLocalTime":"09:00-18:00","sellerId":2054718374,"sellerNick":"sandbox_b_27","sundayConfirmLocalTime":"09:00-18:00","supplier":"","thursdayConfirmLocalTime":"09:00-18:00","timeZoneName":"Asia/Shanghai","tuesdayConfirmLocalTime":"09:00-18:00","wednesdayConfirmLocalTime":"09:00-18:00","fridayConfirmLocalTime":"09:00-18:00"},{"businessId":11925099374,"businessType":3,"displayItemInNonWorkingTime":1,"mondayConfirmLocalTime":"09:00-18:00","operator":"操作人","orderConfirmType":2,"saturdayConfirmLocalTime":"09:00-18:00","sellerId":2054718374,"sellerNick":"sandbox_b_27","sundayConfirmLocalTime":"09:00-18:00","supplier":"","thursdayConfirmLocalTime":"09:00-18:00","timeZoneName":"Asia/Shanghai","tuesdayConfirmLocalTime":"09:00-18:00","wednesdayConfirmLocalTime":"09:00-18:00","fridayConfirmLocalTime":"09:00-18:00"}]
     **/
    private $param;


    public function getParam() : string{
        return $this->param;
    }

    public function setParam(string $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "taobao.xhotel.servicetime.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertBasic($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


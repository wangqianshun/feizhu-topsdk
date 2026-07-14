<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryRealNameInfoDto {

    /**
        实名姓名
     **/
    public $user_name;

    /**
        实名手机号
     **/
    public $user_mobile;

    /**
        实名身份证号
     **/
    public $user_id_card;

    /**
        人脸照片URL，e签宝链接64位图片格式，需要自行进行转化
     **/
    public $face_img;

    /**
        e签宝flowId
     **/
    public $e_sign_flow_id;


    public function getUserName() : string{
        return $this->user_name;
    }

    public function setUserName(string $userName){
        $this->user_name = $userName;
    }

    public function getUserMobile() : string{
        return $this->user_mobile;
    }

    public function setUserMobile(string $userMobile){
        $this->user_mobile = $userMobile;
    }

    public function getUserIdCard() : string{
        return $this->user_id_card;
    }

    public function setUserIdCard(string $userIdCard){
        $this->user_id_card = $userIdCard;
    }

    public function getFaceImg() : string{
        return $this->face_img;
    }

    public function setFaceImg(string $faceImg){
        $this->face_img = $faceImg;
    }

    public function getESignFlowId() : string{
        return $this->e_sign_flow_id;
    }

    public function setESignFlowId(string $eSignFlowId){
        $this->e_sign_flow_id = $eSignFlowId;
    }


}


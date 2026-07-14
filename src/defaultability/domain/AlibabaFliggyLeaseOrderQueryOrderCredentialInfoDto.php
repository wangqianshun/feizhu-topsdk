<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseOrderQueryOrderCredentialInfoDto {

    /**
        卖家发货凭证
     **/
    public $seller_ship_image;

    /**
        买家签收凭证
     **/
    public $user_sign_image;

    /**
        买家归还凭证
     **/
    public $user_return_image;

    /**
        卖家签收凭证
     **/
    public $seller_sign_image;


    public function getSellerShipImage() : array{
        return $this->seller_ship_image;
    }

    public function setSellerShipImage(array $sellerShipImage){
        $this->seller_ship_image = $sellerShipImage;
    }

    public function getUserSignImage() : array{
        return $this->user_sign_image;
    }

    public function setUserSignImage(array $userSignImage){
        $this->user_sign_image = $userSignImage;
    }

    public function getUserReturnImage() : array{
        return $this->user_return_image;
    }

    public function setUserReturnImage(array $userReturnImage){
        $this->user_return_image = $userReturnImage;
    }

    public function getSellerSignImage() : array{
        return $this->seller_sign_image;
    }

    public function setSellerSignImage(array $sellerSignImage){
        $this->seller_sign_image = $sellerSignImage;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistJumpInfo {

    /**
        h5地址
     **/
    public $jump_h5_url;

    /**
        是否跳转native
     **/
    public $jump_native;

    /**
        native地址
     **/
    public $jump_native_url;

    /**
        要往native跳转的客户端版本,当该字段存在时，只有大于该版本才会走native跳转
     **/
    public $native_version;

    /**
        native页面信息
     **/
    public $page_name;


    public function getJumpH5Url() : string{
        return $this->jump_h5_url;
    }

    public function setJumpH5Url(string $jumpH5Url){
        $this->jump_h5_url = $jumpH5Url;
    }

    public function getJumpNative() : bool{
        return $this->jump_native;
    }

    public function setJumpNative(bool $jumpNative){
        $this->jump_native = $jumpNative;
    }

    public function getJumpNativeUrl() : string{
        return $this->jump_native_url;
    }

    public function setJumpNativeUrl(string $jumpNativeUrl){
        $this->jump_native_url = $jumpNativeUrl;
    }

    public function getNativeVersion() : string{
        return $this->native_version;
    }

    public function setNativeVersion(string $nativeVersion){
        $this->native_version = $nativeVersion;
    }

    public function getPageName() : string{
        return $this->page_name;
    }

    public function setPageName(string $pageName){
        $this->page_name = $pageName;
    }


}


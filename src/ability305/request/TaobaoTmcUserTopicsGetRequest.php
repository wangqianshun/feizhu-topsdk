<?php
namespace FeiZhu\TopSdk\Ability305\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoTmcUserTopicsGetRequest {

    /**
        卖家nick
     **/
    private $nick;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }


    public function getApiName() : string {
        return "taobao.tmc.user.topics.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


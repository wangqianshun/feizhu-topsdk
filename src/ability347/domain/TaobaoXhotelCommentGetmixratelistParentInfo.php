<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelCommentGetmixratelistParentInfo {

    /**
        用户昵称,已脱敏
     **/
    public $user_nick;


    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }


}


<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbhotelMatchRequest {

    /**
        竞品酒店id
     **/
    private $competitionHotelId;


    public function getCompetitionHotelId() : string{
        return $this->competitionHotelId;
    }

    public function setCompetitionHotelId(string $competitionHotelId){
        $this->competitionHotelId = $competitionHotelId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbhotel.match";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->competitionHotelId)) {
            $requestParam["competition_hotel_id"] = TopUtil::convertBasic($this->competitionHotelId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


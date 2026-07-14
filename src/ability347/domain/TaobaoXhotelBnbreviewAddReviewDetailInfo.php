<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelBnbreviewAddReviewDetailInfo {

    /**
        评分，10分制，Double类型得，2-非常差 4-差 6-一般 8-好 10-非常好
     **/
    public $score;

    /**
        纬度id，1-地理位置 2-清洁程度 3-服务比较 4-性价比
     **/
    public $dimension_id;


    public function getScore() : string{
        return $this->score;
    }

    public function setScore(string $score){
        $this->score = $score;
    }

    public function getDimensionId() : int{
        return $this->dimension_id;
    }

    public function setDimensionId(int $dimensionId){
        $this->dimension_id = $dimensionId;
    }


}


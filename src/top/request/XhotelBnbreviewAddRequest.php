<?php
/**
 * TOP API: taobao.xhotel.bnbreview.add request
 * 
 * @author auto create
 * @since 1.0, 2022.10.28
 */
class XhotelBnbreviewAddRequest
{
	/** 
	 * 入住时间
	 **/
	private $checkInTime;
	
	/** 
	 * 评论内容
	 **/
	private $content;
	
	/** 
	 * 创建时间
	 **/
	private $gmtCreate;
	
	/** 
	 * 外部评论id
	 **/
	private $outerId;
	
	/** 
	 * 图片地址
	 **/
	private $picInfoList;
	
	/** 
	 * 飞猪侧房源ID
	 **/
	private $rid;
	
	/** 
	 * 评分细分
	 **/
	private $scoreDetail;
	
	/** 
	 * 评论来源ID，38-小猪 39-爱彼迎
	 **/
	private $source;
	
	/** 
	 * 总评分,Double类型得
	 **/
	private $totalScore;
	
	/** 
	 * 用户名称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setCheckInTime($checkInTime)
	{
		$this->checkInTime = $checkInTime;
		$this->apiParas["check_in_time"] = $checkInTime;
	}

	public function getCheckInTime()
	{
		return $this->checkInTime;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setGmtCreate($gmtCreate)
	{
		$this->gmtCreate = $gmtCreate;
		$this->apiParas["gmt_create"] = $gmtCreate;
	}

	public function getGmtCreate()
	{
		return $this->gmtCreate;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPicInfoList($picInfoList)
	{
		$this->picInfoList = $picInfoList;
		$this->apiParas["pic_info_list"] = $picInfoList;
	}

	public function getPicInfoList()
	{
		return $this->picInfoList;
	}

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function setScoreDetail($scoreDetail)
	{
		$this->scoreDetail = $scoreDetail;
		$this->apiParas["score_detail"] = $scoreDetail;
	}

	public function getScoreDetail()
	{
		return $this->scoreDetail;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setTotalScore($totalScore)
	{
		$this->totalScore = $totalScore;
		$this->apiParas["total_score"] = $totalScore;
	}

	public function getTotalScore()
	{
		return $this->totalScore;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbreview.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkInTime,"checkInTime");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->gmtCreate,"gmtCreate");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->rid,"rid");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->totalScore,"totalScore");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

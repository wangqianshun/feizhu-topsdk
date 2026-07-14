<?php
/**
 * TOP API: taobao.xhotel.bnbreview.reply request
 * 
 * @author auto create
 * @since 1.0, 2024.05.08
 */
class XhotelBnbreviewReplyRequest
{
	/** 
	 * 评价内容
	 **/
	private $content;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 主评ID
	 **/
	private $itemWrateId;
	
	/** 
	 * 媒体信息
	 **/
	private $mediaInfo;
	
	/** 
	 * 外部评价ID
	 **/
	private $outerId;
	
	/** 
	 * 评价ID
	 **/
	private $wrateId;
	
	/** 
	 * 评价类型，1-主评，2-追评
	 **/
	private $wrateType;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemWrateId($itemWrateId)
	{
		$this->itemWrateId = $itemWrateId;
		$this->apiParas["item_wrate_id"] = $itemWrateId;
	}

	public function getItemWrateId()
	{
		return $this->itemWrateId;
	}

	public function setMediaInfo($mediaInfo)
	{
		$this->mediaInfo = $mediaInfo;
		$this->apiParas["media_info"] = $mediaInfo;
	}

	public function getMediaInfo()
	{
		return $this->mediaInfo;
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

	public function setWrateId($wrateId)
	{
		$this->wrateId = $wrateId;
		$this->apiParas["wrate_id"] = $wrateId;
	}

	public function getWrateId()
	{
		return $this->wrateId;
	}

	public function setWrateType($wrateType)
	{
		$this->wrateType = $wrateType;
		$this->apiParas["wrate_type"] = $wrateType;
	}

	public function getWrateType()
	{
		return $this->wrateType;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbreview.reply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemWrateId,"itemWrateId");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->wrateId,"wrateId");
		RequestCheckUtil::checkNotNull($this->wrateType,"wrateType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

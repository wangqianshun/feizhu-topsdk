<?php
/**
 * TOP API: taobao.xhotel.bnbpoi.surrounding request
 * 
 * @author auto create
 * @since 1.0, 2026.01.29
 */
class XhotelBnbpoiSurroundingRequest
{
	/** 
	 * 城市code
	 **/
	private $cityCode;
	
	/** 
	 * 经纬度
	 **/
	private $latitude;
	
	/** 
	 * 经纬度
	 **/
	private $longitude;
	
	/** 
	 * poi分类直线过滤大小
	 **/
	private $poiFilterDistance;
	
	private $apiParas = array();
	
	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
	}

	public function setPoiFilterDistance($poiFilterDistance)
	{
		$this->poiFilterDistance = $poiFilterDistance;
		$this->apiParas["poi_filter_distance"] = $poiFilterDistance;
	}

	public function getPoiFilterDistance()
	{
		return $this->poiFilterDistance;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbpoi.surrounding";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cityCode,"cityCode");
		RequestCheckUtil::checkNotNull($this->latitude,"latitude");
		RequestCheckUtil::checkNotNull($this->longitude,"longitude");
		RequestCheckUtil::checkNotNull($this->poiFilterDistance,"poiFilterDistance");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

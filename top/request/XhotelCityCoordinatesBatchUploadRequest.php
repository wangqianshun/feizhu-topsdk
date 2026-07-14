<?php
/**
 * TOP API: taobao.xhotel.city.coordinates.batch.upload request
 * 
 * @author auto create
 * @since 1.0, 2025.07.30
 */
class XhotelCityCoordinatesBatchUploadRequest
{
	/** 
	 * 经纬度列表
	 **/
	private $coordinateList;
	
	private $apiParas = array();
	
	public function setCoordinateList($coordinateList)
	{
		$this->coordinateList = $coordinateList;
		$this->apiParas["coordinate_list"] = $coordinateList;
	}

	public function getCoordinateList()
	{
		return $this->coordinateList;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.city.coordinates.batch.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

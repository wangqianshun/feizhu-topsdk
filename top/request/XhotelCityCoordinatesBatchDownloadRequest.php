<?php
/**
 * TOP API: taobao.xhotel.city.coordinates.batch.download request
 * 
 * @author auto create
 * @since 1.0, 2025.07.30
 */
class XhotelCityCoordinatesBatchDownloadRequest
{
	/** 
	 * 上传的经纬度批次号
	 **/
	private $batchId;
	
	private $apiParas = array();
	
	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
		$this->apiParas["batch_id"] = $batchId;
	}

	public function getBatchId()
	{
		return $this->batchId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.city.coordinates.batch.download";
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

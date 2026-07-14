<?php
/**
 * TOP API: taobao.xhotel.entity.config request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelEntityConfigRequest
{
	/** 
	 * 格式为：[{"invoice_provider":"2"}] key-value形式的配置信息其中invoice_provider发票提供方1(酒店提供),2(卖家邮寄)。其余开票信息统一在卖家或酒店后台手动配置，此接口不做参数传输。
	 **/
	private $configData;
	
	/** 
	 * 实体编码，例如酒店编码，房价编码
	 **/
	private $entityCode;
	
	/** 
	 * 实体id：飞猪平台的id，目前仅支持hid，rpid
	 **/
	private $entityId;
	
	/** 
	 * 目前仅支持 5：rp维度
	 **/
	private $type;
	
	/** 
	 * 默认是taobao。和酒店，房型等实体上的vendor保持一致。
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setConfigData($configData)
	{
		$this->configData = $configData;
		$this->apiParas["config_data"] = $configData;
	}

	public function getConfigData()
	{
		return $this->configData;
	}

	public function setEntityCode($entityCode)
	{
		$this->entityCode = $entityCode;
		$this->apiParas["entity_code"] = $entityCode;
	}

	public function getEntityCode()
	{
		return $this->entityCode;
	}

	public function setEntityId($entityId)
	{
		$this->entityId = $entityId;
		$this->apiParas["entity_id"] = $entityId;
	}

	public function getEntityId()
	{
		return $this->entityId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setVendor($vendor)
	{
		$this->vendor = $vendor;
		$this->apiParas["vendor"] = $vendor;
	}

	public function getVendor()
	{
		return $this->vendor;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.entity.config";
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

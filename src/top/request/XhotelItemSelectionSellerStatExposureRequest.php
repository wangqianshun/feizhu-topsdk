<?php
/**
 * TOP API: taobao.xhotel.item.selection.seller.stat.exposure request
 * 
 * @author auto create
 * @since 1.0, 2024.01.29
 */
class XhotelItemSelectionSellerStatExposureRequest
{
	/** 
	 * 日期 默认为昨天
	 **/
	private $date;
	
	/** 
	 * hid  默认为all
	 **/
	private $hid;
	
	/** 
	 * 酒店编码
	 **/
	private $outHid;
	
	/** 
	 * 默认为all
	 **/
	private $supplier;
	
	/** 
	 * 默认为all
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setOutHid($outHid)
	{
		$this->outHid = $outHid;
		$this->apiParas["out_hid"] = $outHid;
	}

	public function getOutHid()
	{
		return $this->outHid;
	}

	public function setSupplier($supplier)
	{
		$this->supplier = $supplier;
		$this->apiParas["supplier"] = $supplier;
	}

	public function getSupplier()
	{
		return $this->supplier;
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
		return "taobao.xhotel.item.selection.seller.stat.exposure";
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

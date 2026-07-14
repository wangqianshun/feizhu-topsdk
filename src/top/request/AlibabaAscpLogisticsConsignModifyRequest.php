<?php
/**
 * TOP API: alibaba.ascp.logistics.consign.modify request
 * 
 * @author auto create
 * @since 1.0, 2026.03.31
 */
class AlibabaAscpLogisticsConsignModifyRequest
{
	/** 
	 * feature参数格式，KV之间用“=”分隔，多个key之间用”;”分隔 ，范例: instantMobilePhoneNumber=12345678910表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"。
	 **/
	private $feature;
	
	/** 
	 * 原包裹中的商品信息
	 **/
	private $goods;
	
	/** 
	 * 新物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
	 **/
	private $newCompanyCode;
	
	/** 
	 * 新运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
	 **/
	private $newOutSid;
	
	/** 
	 * 原物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
	 **/
	private $oldCompanyCode;
	
	/** 
	 * 原运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
	 **/
	private $oldOutSid;
	
	/** 
	 * 订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setGoods($goods)
	{
		$this->goods = $goods;
		$this->apiParas["goods"] = $goods;
	}

	public function getGoods()
	{
		return $this->goods;
	}

	public function setNewCompanyCode($newCompanyCode)
	{
		$this->newCompanyCode = $newCompanyCode;
		$this->apiParas["new_company_code"] = $newCompanyCode;
	}

	public function getNewCompanyCode()
	{
		return $this->newCompanyCode;
	}

	public function setNewOutSid($newOutSid)
	{
		$this->newOutSid = $newOutSid;
		$this->apiParas["new_out_sid"] = $newOutSid;
	}

	public function getNewOutSid()
	{
		return $this->newOutSid;
	}

	public function setOldCompanyCode($oldCompanyCode)
	{
		$this->oldCompanyCode = $oldCompanyCode;
		$this->apiParas["old_company_code"] = $oldCompanyCode;
	}

	public function getOldCompanyCode()
	{
		return $this->oldCompanyCode;
	}

	public function setOldOutSid($oldOutSid)
	{
		$this->oldOutSid = $oldOutSid;
		$this->apiParas["old_out_sid"] = $oldOutSid;
	}

	public function getOldOutSid()
	{
		return $this->oldOutSid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.logistics.consign.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->newOutSid,"newOutSid");
		RequestCheckUtil::checkNotNull($this->oldOutSid,"oldOutSid");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

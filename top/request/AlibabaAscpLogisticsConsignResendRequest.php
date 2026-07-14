<?php
/**
 * TOP API: alibaba.ascp.logistics.consign.resend request
 * 
 * @author auto create
 * @since 1.0, 2026.07.14
 */
class AlibabaAscpLogisticsConsignResendRequest
{
	/** 
	 * 包裹包含的运单号及快递公司编号,多包裹时，需要包含所有包裹的运单号等信息
	 **/
	private $consignPkgs;
	
	/** 
	 * feature参数格式，KV之间用“=”分隔，多个key之间用”;”分隔 ，范例: instantMobilePhoneNumber=12345678910表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"
	 **/
	private $feature;
	
	/** 
	 * 拆单子订单列表，对应的数据是：子订单号列表。可以不传，但是如果传了则必须符合传递的规则。子订单必须是操作的物流订单的子订单的真子集
	 **/
	private $subTids;
	
	/** 
	 * 订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setConsignPkgs($consignPkgs)
	{
		$this->consignPkgs = $consignPkgs;
		$this->apiParas["consign_pkgs"] = $consignPkgs;
	}

	public function getConsignPkgs()
	{
		return $this->consignPkgs;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setSubTids($subTids)
	{
		$this->subTids = $subTids;
		$this->apiParas["sub_tids"] = $subTids;
	}

	public function getSubTids()
	{
		return $this->subTids;
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
		return "alibaba.ascp.logistics.consign.resend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

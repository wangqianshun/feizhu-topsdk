<?php
/**
 * TOP API: taobao.xhotel.roomtype.conflict.data request
 * 
 * @author auto create
 * @since 1.0, 2025.07.02
 */
class XhotelRoomtypeConflictDataRequest
{
	/** 
	 * 查询第几页数据
	 **/
	private $currentPage;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.roomtype.conflict.data";
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

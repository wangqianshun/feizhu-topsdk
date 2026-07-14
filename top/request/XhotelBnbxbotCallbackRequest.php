<?php
/**
 * TOP API: taobao.xhotel.bnbxbot.callback request
 * 
 * @author auto create
 * @since 1.0, 2025.12.22
 */
class XhotelBnbxbotCallbackRequest
{
	/** 
	 * 更新taskid的主键
	 **/
	private $code;
	
	/** 
	 * 调用外呼异常信息
	 **/
	private $errorMsg;
	
	/** 
	 * 外呼的任务ID
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setErrorMsg($errorMsg)
	{
		$this->errorMsg = $errorMsg;
		$this->apiParas["error_msg"] = $errorMsg;
	}

	public function getErrorMsg()
	{
		return $this->errorMsg;
	}

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.bnbxbot.callback";
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

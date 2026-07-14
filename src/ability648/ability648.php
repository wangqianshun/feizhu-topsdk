<?php
namespace FeiZhu\TopSdk\Ability648;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Ability648\Request\TaobaoLogisticsPartnersGetRequest;
use FeiZhu\TopSdk\Ability648\Request\TaobaoAreasGetRequest;
use FeiZhu\TopSdk\Ability648\Request\TaobaoLogisticsOnlineCancelRequest;
use FeiZhu\TopSdk\Ability648\Request\TaobaoLogisticsDummySendRequest;
use FeiZhu\TopSdk\Ability648\Request\TaobaoLogisticsCompaniesGetRequest;

class Ability648 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询支持起始地到目的地范围的物流公司
    **/
    public function taobaoLogisticsPartnersGet(TaobaoLogisticsPartnersGetRequest $request) {
        return $this->client->execute("taobao.logistics.partners.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询地址区域
    **/
    public function taobaoAreasGet(TaobaoAreasGetRequest $request) {
        return $this->client->execute("taobao.areas.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        取消物流订单接口
    **/
    public function taobaoLogisticsOnlineCancel(TaobaoLogisticsOnlineCancelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.online.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        无需物流（虚拟）发货处理
    **/
    public function taobaoLogisticsDummySend(TaobaoLogisticsDummySendRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.dummy.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询物流公司信息
    **/
    public function taobaoLogisticsCompaniesGet(TaobaoLogisticsCompaniesGetRequest $request) {
        return $this->client->execute("taobao.logistics.companies.get", $request->toMap(), $request->toFileParamMap());
    }
}
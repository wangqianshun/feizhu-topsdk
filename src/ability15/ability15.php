<?php
namespace FeiZhu\TopSdk\Ability15;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Ability15\Request\TaobaoWlbStoresBaseinfoGetRequest;
use FeiZhu\TopSdk\Ability15\Request\TaobaoLogisticsConsignOrderCreateandsendRequest;

class Ability15 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        商家按照仓的类型获取仓库接口
    **/
    public function taobaoWlbStoresBaseinfoGet(TaobaoWlbStoresBaseinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.stores.baseinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建订单并发货
    **/
    public function taobaoLogisticsConsignOrderCreateandsend(TaobaoLogisticsConsignOrderCreateandsendRequest $request) {
        return $this->client->execute("taobao.logistics.consign.order.createandsend", $request->toMap(), $request->toFileParamMap());
    }
}
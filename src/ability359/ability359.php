<?php
namespace FeiZhu\TopSdk\Ability359;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Ability359\Request\TaobaoXhotelOrderSearchRequest;
use FeiZhu\TopSdk\Ability359\Request\TaobaoXhotelOrderUpdateConfirmcodeRequest;
use FeiZhu\TopSdk\Ability359\Request\TaobaoXhotelOrderUpdateRequest;
use FeiZhu\TopSdk\Ability359\Request\TaobaoXhotelOrderSecretphonenumBindRequest;

class Ability359 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        酒店产品库订单查询
    **/
    public function taobaoXhotelOrderSearch(TaobaoXhotelOrderSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.order.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        推送及更新订单确认号
    **/
    public function taobaoXhotelOrderUpdateConfirmcode(TaobaoXhotelOrderUpdateConfirmcodeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.order.update.confirmcode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店订单发货接口
    **/
    public function taobaoXhotelOrderUpdate(TaobaoXhotelOrderUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.order.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪订单隐私号绑定
    **/
    public function taobaoXhotelOrderSecretphonenumBind(TaobaoXhotelOrderSecretphonenumBindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.order.secretphonenum.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
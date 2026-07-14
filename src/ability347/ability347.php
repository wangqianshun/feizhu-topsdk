<?php
namespace FeiZhu\TopSdk\Ability347;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhotelDataSyncRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpoiGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelServicetimeUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelServicetimeGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbxbotCallbackRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhotelMatchRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbllmQueryRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbllmPollQueryRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbaicheckNoticeRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelMultipleratesUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelMultiplerateUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbRadarCallbackRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelMultipleratesIncrementRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhotelpriceMsgRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelMultiplerateDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelCityCoordinatesBatchUploadRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelIntlRateUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoBindRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelAggIncrementRpSyncRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoUnbindRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBaseinfoRoomGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelItemSelectionSellerStatSummaryRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelItemSelectionSellerStatExposureRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelItemSelectionSellerStatHotshidRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRatesLiteIncrUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbtagOperationRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpromoGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelPromotionResourceUnbindRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelPromotionCreateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelPromotionResourceBindRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelPromotionQueryRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbownerDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbreviewReplyRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBaseinfoGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomtypeGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomtypeUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbroomtypeAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomtypeAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhouseAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbroomtypeDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbownerAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateplanGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomsUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRatesUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateplanUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelXitemDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateplanAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpriceAppealRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelXitemQueryRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelEntityConfigRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbAiCustomerMessageRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelGetEntityByTagRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelQuotaUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbreviewAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbstatusxbotSendRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelCommentGetmixratelistRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelPromotionListRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpoiSurroundingRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomtypeDeletePublicRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbCombohotelRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbCombohotelCallbackRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhouseDeleteRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomtypeConflictDataRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbAggSyncRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbcommonAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRatesIncrementRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRoomsIncrementRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelStatusUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoRoomtypeStatusUpdateRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelHouseAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelHouseRoomtypeAddRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbhotelpriceTrackRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbxbotRecordRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateRelationshipwithrpGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelCityCoordinatesBatchDownloadRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelRateRelationshipwithroomGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpriceGetRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbpriceRelationRequest;
use FeiZhu\TopSdk\Ability347\Request\TaobaoXhotelBnbPromoGetRequest;

class Ability347 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        进酒自动化同步房源打标
    **/
    public function taobaoXhotelBnbhotelDataSync(TaobaoXhotelBnbhotelDataSyncRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhotel.data.sync", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿POI查询接口
    **/
    public function taobaoXhotelBnbpoiGet(TaobaoXhotelBnbpoiGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpoi.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自促活动申请接口
    **/
    public function taobaoXhotelBnbpromoAdd(TaobaoXhotelBnbpromoAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪酒店多维度服务时间维护接口
    **/
    public function taobaoXhotelServicetimeUpdate(TaobaoXhotelServicetimeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.servicetime.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询实体对应的服务时间数据
    **/
    public function taobaoXhotelServicetimeGet(TaobaoXhotelServicetimeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.servicetime.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ai智能房东外呼回调
    **/
    public function taobaoXhotelBnbxbotCallback(TaobaoXhotelBnbxbotCallbackRequest $request) {
        return $this->client->execute("taobao.xhotel.bnbxbot.callback", $request->toMap(), $request->toFileParamMap());
    }
    /**
        民宿type1竞品匹配
    **/
    public function taobaoXhotelBnbhotelMatch(TaobaoXhotelBnbhotelMatchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhotel.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿大模型通用调用
    **/
    public function taobaoXhotelBnbllmQuery(TaobaoXhotelBnbllmQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbllm.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿大模型轮询结果
    **/
    public function taobaoXhotelBnbllmPollQuery(TaobaoXhotelBnbllmPollQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbllm.poll.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房东客服质检通知
    **/
    public function taobaoXhotelBnbaicheckNotice(TaobaoXhotelBnbaicheckNoticeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbaicheck.notice", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格推送接口（批量全量）
    **/
    public function taobaoXhotelMultipleratesUpdate(TaobaoXhotelMultipleratesUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerates.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格推送接口（全量更新）
    **/
    public function taobaoXhotelMultiplerateUpdate(TaobaoXhotelMultiplerateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿雷达数据回调接口
    **/
    public function taobaoXhotelBnbRadarCallback(TaobaoXhotelBnbRadarCallbackRequest $request) {
        return $this->client->execute("taobao.xhotel.bnb.radar.callback", $request->toMap(), $request->toFileParamMap());
    }
    /**
        复杂房价推送接口（批量增量）
    **/
    public function taobaoXhotelMultipleratesIncrement(TaobaoXhotelMultipleratesIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerates.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿t1比价消息回调接口
    **/
    public function taobaoXhotelBnbhotelpriceMsg(TaobaoXhotelBnbhotelpriceMsgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhotelprice.msg", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格删除
    **/
    public function taobaoXhotelMultiplerateDelete(TaobaoXhotelMultiplerateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传信息计算飞猪国际城市
    **/
    public function taobaoXhotelCityCoordinatesBatchUpload(TaobaoXhotelCityCoordinatesBatchUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.city.coordinates.batch.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿营销活动更新
    **/
    public function taobaoXhotelBnbpromoUpdate(TaobaoXhotelBnbpromoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        不落库商家推送更新酒店rate
    **/
    public function taobaoXhotelIntlRateUpdate(TaobaoXhotelIntlRateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.intl.rate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自促活动绑定接口
    **/
    public function taobaoXhotelBnbpromoBind(TaobaoXhotelBnbpromoBindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿聚合房源增量rp同步
    **/
    public function taobaoXhotelAggIncrementRpSync(TaobaoXhotelAggIncrementRpSyncRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.agg.increment.rp.sync", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自促活动解绑接口
    **/
    public function taobaoXhotelBnbpromoUnbind(TaobaoXhotelBnbpromoUnbindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.unbind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店房型与房价查询
    **/
    public function taobaoXhotelBaseinfoRoomGet(TaobaoXhotelBaseinfoRoomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.baseinfo.room.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家数据-选品整体概况
    **/
    public function taobaoXhotelItemSelectionSellerStatSummary(TaobaoXhotelItemSelectionSellerStatSummaryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.summary", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        选品曝光趋势
    **/
    public function taobaoXhotelItemSelectionSellerStatExposure(TaobaoXhotelItemSelectionSellerStatExposureRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.exposure", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        供应链选品热销标准酒店覆盖情况
    **/
    public function taobaoXhotelItemSelectionSellerStatHotshid(TaobaoXhotelItemSelectionSellerStatHotshidRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.hotshid", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店价格库存轻量级增量接口
    **/
    public function taobaoXhotelRatesLiteIncrUpdate(TaobaoXhotelRatesLiteIncrUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.lite.incr.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿卖家活动删除
    **/
    public function taobaoXhotelBnbpromoDelete(TaobaoXhotelBnbpromoDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿标签操作
    **/
    public function taobaoXhotelBnbtagOperation(TaobaoXhotelBnbtagOperationRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbtag.operation", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿查询营销活动
    **/
    public function taobaoXhotelBnbpromoGet(TaobaoXhotelBnbpromoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        直连营销活动解绑资源
    **/
    public function taobaoXhotelPromotionResourceUnbind(TaobaoXhotelPromotionResourceUnbindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.promotion.resource.unbind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增/更新营销活动
    **/
    public function taobaoXhotelPromotionCreate(TaobaoXhotelPromotionCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.promotion.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        直连营销活动绑定资源
    **/
    public function taobaoXhotelPromotionResourceBind(TaobaoXhotelPromotionResourceBindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.promotion.resource.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        直连营销活动和绑定资源查询
    **/
    public function taobaoXhotelPromotionQuery(TaobaoXhotelPromotionQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.promotion.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        rate删除接口
    **/
    public function taobaoXhotelRateDelete(TaobaoXhotelRateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房东删除接口
    **/
    public function taobaoXhotelBnbownerDelete(TaobaoXhotelBnbownerDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbowner.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        对外开放评论接口
    **/
    public function taobaoXhotelBnbreviewReply(TaobaoXhotelBnbreviewReplyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbreview.reply", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店基础信息查询接口
    **/
    public function taobaoXhotelBaseinfoGet(TaobaoXhotelBaseinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.baseinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型查询接口
    **/
    public function taobaoXhotelRoomtypeGet(TaobaoXhotelRoomtypeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型更新接口（ID不存在自动新增）
    **/
    public function taobaoXhotelRoomtypeUpdate(TaobaoXhotelRoomtypeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿新增房源
    **/
    public function taobaoXhotelBnbroomtypeAdd(TaobaoXhotelBnbroomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbroomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型新增接口（ID重复变更新）
    **/
    public function taobaoXhotelRoomtypeAdd(TaobaoXhotelRoomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿门店信息添加
    **/
    public function taobaoXhotelBnbhouseAdd(TaobaoXhotelBnbhouseAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhouse.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店查询接口
    **/
    public function taobaoXhotelGet(TaobaoXhotelGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房源删除接口
    **/
    public function taobaoXhotelBnbroomtypeDelete(TaobaoXhotelBnbroomtypeDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbroomtype.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店更新接口（ID不存在自动新增）
    **/
    public function taobaoXhotelUpdate(TaobaoXhotelUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房东信息添加
    **/
    public function taobaoXhotelBnbownerAdd(TaobaoXhotelBnbownerAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbowner.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店新增接口（ID重复自动更新）
    **/
    public function taobaoXhotelAdd(TaobaoXhotelAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        room实体查询
    **/
    public function taobaoXhotelRoomGet(TaobaoXhotelRoomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.room.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格计划rateplan查询
    **/
    public function taobaoXhotelRateplanGet(TaobaoXhotelRateplanGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型共享库存推送接口（批量全量）
    **/
    public function taobaoXhotelRoomsUpdate(TaobaoXhotelRoomsUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rooms.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型库存推送接口（全量推送）
    **/
    public function taobaoXhotelRoomUpdate(TaobaoXhotelRoomUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.room.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（批量全量）
    **/
    public function taobaoXhotelRatesUpdate(TaobaoXhotelRatesUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（全量更新）
    **/
    public function taobaoXhotelRateUpdate(TaobaoXhotelRateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店产品库rate查询
    **/
    public function taobaoXhotelRateGet(TaobaoXhotelRateGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增专享房价
    **/
    public function taobaoXhotelRateAdd(TaobaoXhotelRateAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格计划rateplan更新或添加
    **/
    public function taobaoXhotelRateplanUpdate(TaobaoXhotelRateplanUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除 x 元素
    **/
    public function taobaoXhotelXitemDelete(TaobaoXhotelXitemDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.xitem.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店产品库rateplan添加
    **/
    public function taobaoXhotelRateplanAdd(TaobaoXhotelRateplanAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿价格申诉
    **/
    public function taobaoXhotelBnbpriceAppeal(TaobaoXhotelBnbpriceAppealRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbprice.appeal", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询 x 元素
    **/
    public function taobaoXhotelXitemQuery(TaobaoXhotelXitemQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.xitem.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪商品各实体通用配置
    **/
    public function taobaoXhotelEntityConfig(TaobaoXhotelEntityConfigRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.entity.config", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        智能客服接收消息接口
    **/
    public function taobaoXhotelBnbAiCustomerMessage(TaobaoXhotelBnbAiCustomerMessageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnb.ai.customer.message", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据标签查询实体
    **/
    public function taobaoXhotelGetEntityByTag(TaobaoXhotelGetEntityByTagRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.get.entity.by.tag", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        库存更新接口
    **/
    public function taobaoXhotelQuotaUpdate(TaobaoXhotelQuotaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.quota.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        对外开放评论接口
    **/
    public function taobaoXhotelBnbreviewAdd(TaobaoXhotelBnbreviewAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbreview.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿状态外呼确认接口
    **/
    public function taobaoXhotelBnbstatusxbotSend(TaobaoXhotelBnbstatusxbotSendRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbstatusxbot.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通用评价接口
    **/
    public function taobaoXhotelCommentGetmixratelist(TaobaoXhotelCommentGetmixratelistRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.comment.getmixratelist", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        营销活动列表
    **/
    public function taobaoXhotelPromotionList(TaobaoXhotelPromotionListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.promotion.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿周边poi查询
    **/
    public function taobaoXhotelBnbpoiSurrounding(TaobaoXhotelBnbpoiSurroundingRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpoi.surrounding", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除酒店接口
    **/
    public function taobaoXhotelDelete(TaobaoXhotelDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家删除房型数据接口
    **/
    public function taobaoXhotelRoomtypeDeletePublic(TaobaoXhotelRoomtypeDeletePublicRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.delete.public", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿套餐酒店创建
    **/
    public function taobaoXhotelBnbCombohotel(TaobaoXhotelBnbCombohotelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnb.combohotel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿套餐酒店创建回调接口
    **/
    public function taobaoXhotelBnbCombohotelCallback(TaobaoXhotelBnbCombohotelCallbackRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnb.combohotel.callback", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿门店删除接口
    **/
    public function taobaoXhotelBnbhouseDelete(TaobaoXhotelBnbhouseDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhouse.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家床型冲突数据接口
    **/
    public function taobaoXhotelRoomtypeConflictData(TaobaoXhotelRoomtypeConflictDataRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.conflict.data", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        进酒聚合房源同步多房源关联关系
    **/
    public function taobaoXhotelBnbAggSync(TaobaoXhotelBnbAggSyncRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnb.agg.sync", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通用调用top接口
    **/
    public function taobaoXhotelBnbcommonAdd(TaobaoXhotelBnbcommonAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbcommon.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（批量增量）
    **/
    public function taobaoXhotelRatesIncrement(TaobaoXhotelRatesIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型库存推送接口（批量增量）
    **/
    public function taobaoXhotelRoomsIncrement(TaobaoXhotelRoomsIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rooms.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店状态更新
    **/
    public function taobaoXhotelStatusUpdate(TaobaoXhotelStatusUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.status.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        top房型状态修改
    **/
    public function taobaoRoomtypeStatusUpdate(TaobaoRoomtypeStatusUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.roomtype.status.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        非标准民宿房源添加
    **/
    public function taobaoXhotelHouseAdd(TaobaoXhotelHouseAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.house.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房型信息添加
    **/
    public function taobaoXhotelHouseRoomtypeAdd(TaobaoXhotelHouseRoomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.house.roomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿type1追价接口
    **/
    public function taobaoXhotelBnbhotelpriceTrack(TaobaoXhotelBnbhotelpriceTrackRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhotelprice.track", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿xbot录音链接获取接口
    **/
    public function taobaoXhotelBnbxbotRecord(TaobaoXhotelBnbxbotRecordRequest $request) {
        return $this->client->execute("taobao.xhotel.bnbxbot.record", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据gid查询卖家下所有的rpId
    **/
    public function taobaoXhotelRateRelationshipwithrpGet(TaobaoXhotelRateRelationshipwithrpGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.relationshipwithrp.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        下载飞猪国际城市结果
    **/
    public function taobaoXhotelCityCoordinatesBatchDownload(TaobaoXhotelCityCoordinatesBatchDownloadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.city.coordinates.batch.download", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询rpId
    **/
    public function taobaoXhotelRateRelationshipwithroomGet(TaobaoXhotelRateRelationshipwithroomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.relationshipwithroom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿价格查询接口
    **/
    public function taobaoXhotelBnbpriceGet(TaobaoXhotelBnbpriceGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbprice.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿价态关系同步
    **/
    public function taobaoXhotelBnbpriceRelation(TaobaoXhotelBnbpriceRelationRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbprice.relation", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房源报名营销活动查询
    **/
    public function taobaoXhotelBnbPromoGet(TaobaoXhotelBnbPromoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnb.promo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
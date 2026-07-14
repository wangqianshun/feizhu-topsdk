<?php
namespace FeiZhu\TopSdk\Ability198;

use FeiZhu\TopSdk\TopApiClient;
use FeiZhu\TopSdk\Ability198\Request\AlibabaAscpLogisticsIdentcodeUploadRequest;
use FeiZhu\TopSdk\Ability198\Request\AlibabaAscpLogisticsCpGetRequest;
use FeiZhu\TopSdk\Ability198\Request\AlibabaAscpLogisticsSellerWritelogisticsnodeRequest;
use FeiZhu\TopSdk\Ability198\Request\AlibabaAscpLogisticsIdentcodeQueryRequest;

class Ability198 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        sn码上传接口
    **/
    public function alibabaAscpLogisticsIdentcodeUpload(AlibabaAscpLogisticsIdentcodeUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.identcode.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        快递公司资源列表查询接口
    **/
    public function alibabaAscpLogisticsCpGet(AlibabaAscpLogisticsCpGetRequest $request) {
        return $this->client->execute("alibaba.ascp.logistics.cp.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        商家配送写入物流节点
    **/
    public function alibabaAscpLogisticsSellerWritelogisticsnode(AlibabaAscpLogisticsSellerWritelogisticsnodeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.seller.writelogisticsnode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        SN查询接口
    **/
    public function alibabaAscpLogisticsIdentcodeQuery(AlibabaAscpLogisticsIdentcodeQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.identcode.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
<?php

namespace Amz\FulfillmentOutbound\Api;

use Amz\FulfillmentOutbound\Model\CancelFulfillmentOrderResponse as CancelFulfillmentOrderResponse;
use Amz\FulfillmentOutbound\Model\CreateFulfillmentOrderRequest as CreateFulfillmentOrderRequest;
use Amz\FulfillmentOutbound\Model\CreateFulfillmentOrderResponse as CreateFulfillmentOrderResponse;
use Amz\FulfillmentOutbound\Model\CreateFulfillmentReturnRequest as CreateFulfillmentReturnRequest;
use Amz\FulfillmentOutbound\Model\CreateFulfillmentReturnResponse as CreateFulfillmentReturnResponse;
use Amz\FulfillmentOutbound\Model\GetFeatureInventoryResponse as GetFeatureInventoryResponse;
use Amz\FulfillmentOutbound\Model\GetFeatureSkuResponse as GetFeatureSkuResponse;
use Amz\FulfillmentOutbound\Model\GetFeaturesResponse as GetFeaturesResponse;
use Amz\FulfillmentOutbound\Model\GetFulfillmentOrderResponse as GetFulfillmentOrderResponse;
use Amz\FulfillmentOutbound\Model\GetFulfillmentPreviewRequest as GetFulfillmentPreviewRequest;
use Amz\FulfillmentOutbound\Model\GetFulfillmentPreviewResponse as GetFulfillmentPreviewResponse;
use Amz\FulfillmentOutbound\Model\GetPackageTrackingDetailsResponse as GetPackageTrackingDetailsResponse;
use Amz\FulfillmentOutbound\Model\ListAllFulfillmentOrdersResponse as ListAllFulfillmentOrdersResponse;
use Amz\FulfillmentOutbound\Model\ListReturnReasonCodesResponse as ListReturnReasonCodesResponse;
use Amz\FulfillmentOutbound\Model\UpdateFulfillmentOrderRequest as UpdateFulfillmentOrderRequest;
use Amz\FulfillmentOutbound\Model\UpdateFulfillmentOrderResponse as UpdateFulfillmentOrderResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FbaOutbound extends AbstractAPI
{
    /**
     * Returns a list of fulfillment order previews based on shipping criteria that you
     * specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetFulfillmentPreviewRequest $Model Returns a list of fulfillment order
     *                                            previews based on shipping criteria that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetFulfillmentPreviewResponse
     */
    public function getFulfillmentPreview(GetFulfillmentPreviewRequest $Model): GetFulfillmentPreviewResponse
    {
        return $this->client->request('getFulfillmentPreview', 'POST', 'fba/outbound/2020-07-01/fulfillmentOrders/preview',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns a list of fulfillment orders fulfilled after (or at) a specified
     * date-time, or indicated by the next token parameter.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'queryStartDate'		A date used to select fulfillment orders that were last
     *                       updated after (or at) a specified time. An update is defined as any change in
     *                       fulfillment order status, including the creation of a new fulfillment order.
     *                       'nextToken'		A string token returned in the response to your previous request.
     *
     * @return ListAllFulfillmentOrdersResponse
     */
    public function listAllFulfillmentOrders(array $queries = []): ListAllFulfillmentOrdersResponse
    {
        return $this->client->request('listAllFulfillmentOrders', 'GET', 'fba/outbound/2020-07-01/fulfillmentOrders',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Requests that Amazon ship items from the seller's inventory in Amazon's
     * fulfillment network to a destination address.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateFulfillmentOrderRequest $Model Requests that Amazon ship items
     *                                             from the seller's inventory in Amazon's fulfillment network to a destination
     *                                             address.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateFulfillmentOrderResponse
     */
    public function createFulfillmentOrder(CreateFulfillmentOrderRequest $Model): CreateFulfillmentOrderResponse
    {
        return $this->client->request('createFulfillmentOrder', 'POST', 'fba/outbound/2020-07-01/fulfillmentOrders',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns delivery tracking information for a package in an outbound shipment for
     * a Multi-Channel Fulfillment order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'packageNumber'		The unencrypted package identifier returned by the
     *                       getFulfillmentOrder operation
     *
     * @return GetPackageTrackingDetailsResponse
     */
    public function getPackageTrackingDetails(array $queries = []): GetPackageTrackingDetailsResponse
    {
        return $this->client->request('getPackageTrackingDetails', 'GET', 'fba/outbound/2020-07-01/tracking',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a list of return reason codes for a seller SKU in a given marketplace.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'sellerSku'		The seller SKU for which return reason codes are required.
     *                       'marketplaceId'		The marketplace for which the seller wants return reason codes.
     *                       'sellerFulfillmentOrderId'		The identifier assigned to the item by the seller
     *                       when the fulfillment order was created. The service uses this value to determine
     *                       the marketplace for which the seller wants return reason codes.
     *                       'language'		The language that the TranslatedDescription property of the
     *                       ReasonCodeDetails response object should be translated into.
     *
     * @return ListReturnReasonCodesResponse
     */
    public function listReturnReasonCodes(array $queries = []): ListReturnReasonCodesResponse
    {
        return $this->client->request('listReturnReasonCodes', 'GET', 'fba/outbound/2020-07-01/returnReasonCodes',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Creates a fulfillment return.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerFulfillmentOrderId An identifier assigned by the seller to the
     * fulfillment order at the time it was created. The seller uses their own records
     * to find the correct SellerFulfillmentOrderId value based on the buyer's request
     * to return items.
     * @param CreateFulfillmentReturnRequest $Model Creates a fulfillment return.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateFulfillmentReturnResponse
     */
    public function createFulfillmentReturn($sellerFulfillmentOrderId, CreateFulfillmentReturnRequest $Model): CreateFulfillmentReturnResponse
    {
        return $this->client->request('createFulfillmentReturn', 'PUT', "fba/outbound/2020-07-01/fulfillmentOrders/{$sellerFulfillmentOrderId}/return",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns the fulfillment order indicated by the specified order identifier.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerFulfillmentOrderId The identifier assigned to the item by the
     * seller when the fulfillment order was created
     *
     * @return GetFulfillmentOrderResponse
     */
    public function getFulfillmentOrder($sellerFulfillmentOrderId): GetFulfillmentOrderResponse
    {
        return $this->client->request('getFulfillmentOrder', 'GET', "fba/outbound/2020-07-01/fulfillmentOrders/{$sellerFulfillmentOrderId}",
            [
            ]
        );
    }

    /**
     * Updates and/or requests shipment for a fulfillment order with an order hold on
     * it.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerFulfillmentOrderId The identifier assigned to the item by the
     * seller when the fulfillment order was created
     * @param UpdateFulfillmentOrderRequest $Model Updates and/or requests shipment
     *                                             for a fulfillment order with an order hold on it.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return UpdateFulfillmentOrderResponse
     */
    public function updateFulfillmentOrder($sellerFulfillmentOrderId, UpdateFulfillmentOrderRequest $Model): UpdateFulfillmentOrderResponse
    {
        return $this->client->request('updateFulfillmentOrder', 'PUT', "fba/outbound/2020-07-01/fulfillmentOrders/{$sellerFulfillmentOrderId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Requests that Amazon stop attempting to fulfill the fulfillment order indicated
     * by the specified order identifier.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerFulfillmentOrderId The identifier assigned to the item by the
     * seller when the fulfillment order was created
     *
     * @return CancelFulfillmentOrderResponse
     */
    public function cancelFulfillmentOrder($sellerFulfillmentOrderId): CancelFulfillmentOrderResponse
    {
        return $this->client->request('cancelFulfillmentOrder', 'PUT', "fba/outbound/2020-07-01/fulfillmentOrders/{$sellerFulfillmentOrderId}/cancel",
            [
            ]
        );
    }

    /**
     * Returns a list of features available for Multi-Channel Fulfillment orders in the
     * marketplace you specify, and whether the seller for which you made the call is
     * enrolled for each feature.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'marketplaceId'		The marketplace for which to return the list of features
     *
     * @return GetFeaturesResponse
     */
    public function getFeatures(array $queries = []): GetFeaturesResponse
    {
        return $this->client->request('getFeatures', 'GET', 'fba/outbound/2020-07-01/features',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a list of inventory items that are eligible for the fulfillment feature
     * you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $featureName The name of the feature for which to return a list of
     * eligible inventory
     * @param array $queries options:
     *                       'marketplaceId'		The marketplace for which to return a list of the inventory
     *                       that is eligible for the specified feature.
     *                       'nextToken'		A string token returned in the response to your previous request
     *                       that is used to return the next response page. A value of null will return the
     *                       first page.
     *
     * @return GetFeatureInventoryResponse
     */
    public function getFeatureInventory($featureName, array $queries = []): GetFeatureInventoryResponse
    {
        return $this->client->request('getFeatureInventory', 'GET', "fba/outbound/2020-07-01/features/inventory/{$featureName}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the number of items with the sellerSKU you specify that can have orders
     * fulfilled using the specified feature. Note that if the sellerSKU isn't
     * eligible, the response will contain an empty skuInfo object.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $featureName The name of the feature
     * @param $sellerSku Used to identify an item in the given marketplace. SellerSKU
     * is qualified by the seller's SellerId, which is included with every operation
     * that you submit.
     * @param array $queries options:
     *                       'marketplaceId'		The marketplace for which to return the count
     *
     * @return GetFeatureSkuResponse
     */
    public function getFeatureSKU($featureName, $sellerSku, array $queries = []): GetFeatureSkuResponse
    {
        return $this->client->request('getFeatureSKU', 'GET', "fba/outbound/2020-07-01/features/inventory/{$featureName}/{$sellerSku}",
            [
                'query' => $queries,
            ]
        );
    }
}

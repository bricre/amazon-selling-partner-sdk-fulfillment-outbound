<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about a fulfillment order preview, including delivery and fee
 * information based on shipping method.
 */
class FulfillmentPreview extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\ShippingSpeedCategory
     */
    public $shippingSpeedCategory = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ScheduledDeliveryInfo
     */
    public $scheduledDeliveryInfo = null;

    /**
     * When true, this fulfillment order preview is fulfillable.
     *
     * @var bool
     */
    public $isFulfillable = null;

    /**
     * When true, this fulfillment order preview is for COD (Cash On Delivery).
     *
     * @var bool
     */
    public $isCODCapable = null;

    /**
     * Estimated shipping weight for this fulfillment order preview.
     *
     * @var \Amz\FulfillmentOutbound\Model\Weight
     */
    public $estimatedShippingWeight = null;

    /**
     * The estimated fulfillment fees for this fulfillment order preview, if
     * applicable.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeeList
     */
    public $estimatedFees = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentPreviewShipmentList
     */
    public $fulfillmentPreviewShipments = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\UnfulfillablePreviewItemList
     */
    public $unfulfillablePreviewItems = null;

    /**
     * Error codes associated with the fulfillment order preview that indicate why the
     * order is not fulfillable.
     *
     * Error code examples:
     *
     * DeliverySLAUnavailable
     * InvalidDestinationAddress
     *
     * @var \Amz\FulfillmentOutbound\Model\StringList
     */
    public $orderUnfulfillableReasons = null;

    /**
     * The marketplace the fulfillment order is placed against.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A list of features and their fulfillment policies to apply to the order.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeatureSettings[]
     */
    public $featureConstraints = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request body schema for the getFulfillmentPreview operation.
 */
class GetFulfillmentPreviewRequest extends AbstractModel
{
    /**
     * The marketplace the fulfillment order is placed against.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The destination address for the fulfillment order preview.
     *
     * @var \Amz\FulfillmentOutbound\Model\Address
     */
    public $address = null;

    /**
     * Identifying information and quantity information for the items in the
     * fulfillment order preview.
     *
     * @var \Amz\FulfillmentOutbound\Model\GetFulfillmentPreviewItemList
     */
    public $items = null;

    /**
     * A list of shipping methods used for creating fulfillment order previews.
     *
     * Possible values:
     *
     * * Standard - Standard shipping method.
     * * Expedited - Expedited shipping method.
     * * Priority - Priority shipping method.
     * * ScheduledDelivery - Scheduled Delivery shipping method.
     * Note: Shipping method service level agreements vary by marketplace. Sellers
     * should see the Seller Central website in their marketplace for shipping method
     * service level agreements and fulfillment fees.
     *
     * @var \Amz\FulfillmentOutbound\Model\ShippingSpeedCategoryList
     */
    public $shippingSpeedCategories = null;

    /**
     * Specifies whether to return fulfillment order previews that are for COD (Cash On
     * Delivery).
     *
     * Possible values:
     *
     * * true - Returns all fulfillment order previews (both for COD and not for COD).
     * * false - Returns only fulfillment order previews that are not for COD.
     *
     * @var bool
     */
    public $includeCODFulfillmentPreview = null;

    /**
     * Specifies whether to return the ScheduledDeliveryInfo response object, which
     * contains the available delivery windows for a Scheduled Delivery. The
     * ScheduledDeliveryInfo response object can only be returned for fulfillment order
     * previews with ShippingSpeedCategories = ScheduledDelivery.
     *
     * @var bool
     */
    public $includeDeliveryWindows = null;

    /**
     * A list of features and their fulfillment policies to apply to the order.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeatureSettings[]
     */
    public $featureConstraints = null;
}

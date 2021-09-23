<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * General information about a fulfillment order, including its status.
 */
class FulfillmentOrder extends AbstractModel
{
    /**
     * The fulfillment order identifier submitted with the createFulfillmentOrder
     * operation.
     *
     * @var string
     */
    public $sellerFulfillmentOrderId = null;

    /**
     * The identifier for the marketplace the fulfillment order is placed against.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A fulfillment order identifier submitted with the createFulfillmentOrder
     * operation. Displays as the order identifier in recipient-facing materials such
     * as the packing slip.
     *
     * @var string
     */
    public $displayableOrderId = null;

    /**
     * A date and time submitted with the createFulfillmentOrder operation. Displays as
     * the order date in recipient-facing materials such as the packing slip.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $displayableOrderDate = null;

    /**
     * A text block submitted with the createFulfillmentOrder operation. Displays in
     * recipient-facing materials such as the packing slip.
     *
     * @var string
     */
    public $displayableOrderComment = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ShippingSpeedCategory
     */
    public $shippingSpeedCategory = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\DeliveryWindow
     */
    public $deliveryWindow = null;

    /**
     * The destination address submitted with the createFulfillmentOrder operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\Address
     */
    public $destinationAddress = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentAction
     */
    public $fulfillmentAction = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentPolicy
     */
    public $fulfillmentPolicy = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\CODSettings
     */
    public $codSettings = null;

    /**
     * The date and time that the fulfillment order was received by an Amazon
     * fulfillment center.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $receivedDate = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentOrderStatus
     */
    public $fulfillmentOrderStatus = null;

    /**
     * The date and time that the status of the fulfillment order last changed, in ISO
     * 8601 date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $statusUpdatedDate = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\NotificationEmailList
     */
    public $notificationEmails = null;

    /**
     * A list of features and their fulfillment policies to apply to the order.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeatureSettings[]
     */
    public $featureConstraints = null;
}

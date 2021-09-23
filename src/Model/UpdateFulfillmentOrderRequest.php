<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class UpdateFulfillmentOrderRequest extends AbstractModel
{
    /**
     * The marketplace the fulfillment order is placed against.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A fulfillment order identifier that the seller creates. This value displays as
     * the order identifier in recipient-facing materials such as the outbound shipment
     * packing slip. The value of DisplayableOrderId should match the order identifier
     * that the seller provides to the recipient. The seller can use the
     * SellerFulfillmentOrderId for this value or they can specify an alternate value
     * if they want the recipient to reference an alternate order identifier.
     *
     * @var string
     */
    public $displayableOrderId = null;

    /**
     * The date and time of the fulfillment order. Displays as the order date in
     * recipient-facing materials such as the outbound shipment packing slip.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $displayableOrderDate = null;

    /**
     * Order-specific text that appears in recipient-facing materials such as the
     * outbound shipment packing slip.
     *
     * @var string
     */
    public $displayableOrderComment = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ShippingSpeedCategory
     */
    public $shippingSpeedCategory = null;

    /**
     * The destination address for the fulfillment order.
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
     * The two-character country code for the country from which the fulfillment order
     * ships. Must be in ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $shipFromCountryCode = null;

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

    /**
     * A list of items to include in the fulfillment order preview, including quantity.
     *
     * @var \Amz\FulfillmentOutbound\Model\UpdateFulfillmentOrderItemList
     */
    public $items = null;
}

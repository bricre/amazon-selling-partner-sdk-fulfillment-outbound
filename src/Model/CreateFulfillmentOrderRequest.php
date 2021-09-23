<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request body schema for the createFulfillmentOrder operation.
 */
class CreateFulfillmentOrderRequest extends AbstractModel
{
    /**
     * The marketplace the fulfillment order is placed against.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A fulfillment order identifier that the seller creates to track their
     * fulfillment order. The SellerFulfillmentOrderId must be unique for each
     * fulfillment order that a seller creates. If the seller's system already creates
     * unique order identifiers, then these might be good values for them to use.
     *
     * @var string
     */
    public $sellerFulfillmentOrderId = null;

    /**
     * A fulfillment order identifier that the seller creates. This value displays as
     * the order identifier in recipient-facing materials such as the outbound shipment
     * packing slip. The value of DisplayableOrderId should match the order identifier
     * that the seller provides to the recipient. The seller can use the
     * SellerFulfillmentOrderId for this value or they can specify an alternate value
     * if they want the recipient to reference an alternate order identifier.
     *
     * The value must be an alpha-numeric or ISO 8859-1 compliant string from one to 40
     * characters in length. Cannot contain two spaces in a row. Leading and trailing
     * white space is removed.
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
     * The shipping method for the fulfillment order.
     *
     * @var \Amz\FulfillmentOutbound\Model\ShippingSpeedCategory
     */
    public $shippingSpeedCategory = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\DeliveryWindow
     */
    public $deliveryWindow = null;

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
     * @var \Amz\FulfillmentOutbound\Model\CODSettings
     */
    public $codSettings = null;

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
     * @var \Amz\FulfillmentOutbound\Model\CreateFulfillmentOrderItemList
     */
    public $items = null;
}

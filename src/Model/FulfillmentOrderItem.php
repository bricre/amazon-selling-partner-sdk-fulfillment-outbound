<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for a fulfillment order.
 */
class FulfillmentOrderItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * A fulfillment order item identifier submitted with a call to the
     * createFulfillmentOrder operation.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $quantity = null;

    /**
     * A message to the gift recipient, if applicable.
     *
     * @var string
     */
    public $giftMessage = null;

    /**
     * Item-specific text that displays in recipient-facing materials such as the
     * outbound shipment packing slip.
     *
     * @var string
     */
    public $displayableComment = null;

    /**
     * Amazon's fulfillment network SKU of the item.
     *
     * @var string
     */
    public $fulfillmentNetworkSku = null;

    /**
     * Indicates whether the item is sellable or unsellable.
     *
     * @var string
     */
    public $orderItemDisposition = null;

    /**
     * The item quantity that was cancelled by the seller.
     *
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $cancelledQuantity = null;

    /**
     * The item quantity that is unfulfillable.
     *
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $unfulfillableQuantity = null;

    /**
     * The estimated date and time that the item quantity is scheduled to ship from the
     * fulfillment center. Note that this value can change over time. If the shipment
     * that contains the item quantity has been cancelled, estimatedShipDate is not
     * returned.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $estimatedShipDate = null;

    /**
     * The estimated arrival date and time of the item quantity. Note that this value
     * can change over time. If the shipment that contains the item quantity has been
     * cancelled, estimatedArrivalDate is not returned.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $estimatedArrivalDate = null;

    /**
     * The amount to be collected from the recipient for this item in a COD (Cash On
     * Delivery) order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $perUnitPrice = null;

    /**
     * The tax on the amount to be collected from the recipient for this item in a COD
     * (Cash On Delivery) order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $perUnitTax = null;

    /**
     * The monetary value assigned by the seller to this item.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $perUnitDeclaredValue = null;
}

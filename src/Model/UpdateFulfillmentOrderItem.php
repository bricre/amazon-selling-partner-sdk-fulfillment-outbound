<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for updating a fulfillment order.
 */
class UpdateFulfillmentOrderItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * Identifies the fulfillment order item to update. Created with a previous call to
     * the createFulfillmentOrder operation.
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
     * The monetary value assigned by the seller to this item.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $perUnitDeclaredValue = null;

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
}

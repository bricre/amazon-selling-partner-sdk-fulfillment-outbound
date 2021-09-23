<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for a fulfillment order preview.
 */
class GetFulfillmentPreviewItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $quantity = null;

    /**
     * The monetary value assigned by the seller to this item. This is a required field
     * if this order is an export order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $perUnitDeclaredValue = null;

    /**
     * A fulfillment order item identifier that the seller creates to track items in
     * the fulfillment preview.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for a shipment in a fulfillment order preview.
 */
class FulfillmentPreviewItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * The item quantity.
     *
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $quantity = null;

    /**
     * A fulfillment order item identifier that the seller created with a call to the
     * createFulfillmentOrder operation.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * The estimated shipping weight of the item quantity for a single item, as
     * identified by sellerSku, in a shipment.
     *
     * @var \Amz\FulfillmentOutbound\Model\Weight
     */
    public $estimatedShippingWeight = null;

    /**
     * The method used to calculate the estimated shipping weight.
     *
     * @var string
     */
    public $shippingWeightCalculationMethod = null;
}

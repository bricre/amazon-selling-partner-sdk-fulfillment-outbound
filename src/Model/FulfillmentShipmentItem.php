<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for a shipment in a fulfillment order.
 */
class FulfillmentShipmentItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * The fulfillment order item identifier that the seller created and submitted with
     * a call to the createFulfillmentOrder operation.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\Quantity
     */
    public $quantity = null;

    /**
     * An identifier for the package that contains the item quantity.
     *
     * @var int
     */
    public $packageNumber = null;

    /**
     * The serial number of the shipped item.
     *
     * @var string
     */
    public $serialNumber = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item that Amazon accepted for return.
 */
class CreateReturnItem extends AbstractModel
{
    /**
     * An identifier assigned by the seller to the return item.
     *
     * @var string
     */
    public $sellerReturnItemId = null;

    /**
     * The identifier assigned to the item by the seller when the fulfillment order was
     * created.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * The identifier for the shipment that is associated with the return item.
     *
     * @var string
     */
    public $amazonShipmentId = null;

    /**
     * The return reason code assigned to the return item by the seller.
     *
     * @var string
     */
    public $returnReasonCode = null;

    /**
     * An optional comment about the return item.
     *
     * @var string
     */
    public $returnComment = null;
}

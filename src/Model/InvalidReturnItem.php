<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item that is invalid for return.
 */
class InvalidReturnItem extends AbstractModel
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
     * @var \Amz\FulfillmentOutbound\Model\InvalidItemReason
     */
    public $invalidItemReason = null;
}

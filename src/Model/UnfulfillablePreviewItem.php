<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about unfulfillable items in a fulfillment order preview.
 */
class UnfulfillablePreviewItem extends AbstractModel
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
     * A fulfillment order item identifier created with a call to the
     * getFulfillmentPreview operation.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * Error codes associated with the fulfillment order preview that indicate why the
     * item is unfulfillable.
     *
     * @var \Amz\FulfillmentOutbound\Model\StringList
     */
    public $itemUnfulfillableReasons = null;
}

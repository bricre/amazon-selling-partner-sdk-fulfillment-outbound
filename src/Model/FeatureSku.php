<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about an SKU, including the count available, identifiers, and a list
 * of overlapping SKUs that share the same inventory pool.
 */
class FeatureSku extends AbstractModel
{
    /**
     * Used to identify an item in the given marketplace. SellerSKU is qualified by the
     * seller's SellerId, which is included with every operation that you submit.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * The unique SKU used by Amazon's fulfillment network.
     *
     * @var string
     */
    public $fnSku = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $asin = null;

    /**
     * The number of SKUs available for this service.
     *
     * @var float
     */
    public $skuCount = null;

    /**
     * Other seller SKUs that are shared across the same inventory.
     *
     * @var string[]
     */
    public $overlappingSkus = null;
}

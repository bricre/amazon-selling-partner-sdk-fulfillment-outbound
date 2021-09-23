<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getFeatureSKU operation.
 */
class GetFeatureSkuResult extends AbstractModel
{
    /**
     * The requested marketplace.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The name of the feature.
     *
     * @var string
     */
    public $featureName = null;

    /**
     * When true, the seller SKU is eligible for the requested feature.
     *
     * @var bool
     */
    public $isEligible = null;

    /**
     * A list of one or more reasons that the seller SKU is ineligibile for the
     * feature.
     *
     * Possible values:
     * * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature.
     * * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the
     * feature.
     * * INVALID_SKU - There is an issue with the SKU provided.
     *
     * @var string[]
     */
    public $ineligibleReasons = null;

    /**
     * Information about the SKU, including the count available, identifiers, and a
     * list of overlapping SKUs that share the same inventory pool.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeatureSku
     */
    public $skuInfo = null;
}

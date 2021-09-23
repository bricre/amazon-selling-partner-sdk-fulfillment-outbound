<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getEligibileInventory operation.
 */
class GetFeatureInventoryResult extends AbstractModel
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
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $nextToken = null;

    /**
     * An array of SKUs eligible for this feature and the quantity available.
     *
     * @var \Amz\FulfillmentOutbound\Model\FeatureSku[]
     */
    public $featureSkus = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A Multi-Channel Fulfillment feature.
 */
class Feature extends AbstractModel
{
    /**
     * The feature name.
     *
     * @var string
     */
    public $featureName = null;

    /**
     * The feature description.
     *
     * @var string
     */
    public $featureDescription = null;

    /**
     * When true, indicates that the seller is eligible to use the feature.
     *
     * @var bool
     */
    public $sellerEligible = null;
}

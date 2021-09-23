<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * FeatureSettings allows users to apply fulfillment features to an order. To block
 * an order from being shipped using Amazon Logistics (AMZL) and an AMZL tracking
 * number, use featureName as BLOCK_AMZL and featureFulfillmentPolicy as Required.
 * Blocking AMZL will incur an additional fee surcharge on your MCF orders and
 * increase the risk of some of your orders being unfulfilled or delivered late if
 * there are no alternative carriers available. Using BLOCK_AMZL in an order
 * request will take precedence over your Seller Central account setting.
 */
class FeatureSettings extends AbstractModel
{
    /**
     * The name of the feature.
     *
     * @var string
     */
    public $featureName = null;

    /**
     * Specifies the policy to use when fulfilling an order.
     *
     * @var string
     */
    public $featureFulfillmentPolicy = null;
}

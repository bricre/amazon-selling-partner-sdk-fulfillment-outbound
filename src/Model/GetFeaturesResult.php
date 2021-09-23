<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getFeatures operation.
 */
class GetFeaturesResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\Features
     */
    public $features = null;
}

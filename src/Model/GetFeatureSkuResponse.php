<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getFeatureSKU operation.
 */
class GetFeatureSkuResponse extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\GetFeatureSkuResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

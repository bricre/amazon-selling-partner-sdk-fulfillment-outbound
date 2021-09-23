<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getFeatures operation.
 */
class GetFeaturesResponse extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\GetFeaturesResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

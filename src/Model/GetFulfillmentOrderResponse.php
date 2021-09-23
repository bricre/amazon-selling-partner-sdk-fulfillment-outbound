<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getFulfillmentOrder operation.
 */
class GetFulfillmentOrderResponse extends AbstractModel
{
    /**
     * The payload for the getFulfillmentOrder operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\GetFulfillmentOrderResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getFulfillmentOrder operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

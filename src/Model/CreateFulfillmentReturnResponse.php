<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createFulfillmentReturn operation.
 */
class CreateFulfillmentReturnResponse extends AbstractModel
{
    /**
     * The payload for the createFulfillmentReturn operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\CreateFulfillmentReturnResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the createFulfillmentReturn
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

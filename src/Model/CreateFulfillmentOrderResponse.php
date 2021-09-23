<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createFulfillmentOrder operation.
 */
class CreateFulfillmentOrderResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the createFulfillmentOrder
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

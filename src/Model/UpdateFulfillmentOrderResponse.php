<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the updateFulfillmentOrder operation.
 */
class UpdateFulfillmentOrderResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the updateFulfillmentOrder
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

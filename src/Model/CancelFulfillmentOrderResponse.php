<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the cancelFulfillmentOrder operation.
 */
class CancelFulfillmentOrderResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the cancelFulfillmentOrder
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the listAllFulfillmentOrders operation.
 */
class ListAllFulfillmentOrdersResponse extends AbstractModel
{
    /**
     * The payload for the listAllFulfillmentOrders operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ListAllFulfillmentOrdersResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listAllFulfillmentOrders
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

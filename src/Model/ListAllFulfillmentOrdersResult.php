<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ListAllFulfillmentOrdersResult extends AbstractModel
{
    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $nextToken = null;

    /**
     * An array of fulfillment order information.
     *
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentOrder[]
     */
    public $fulfillmentOrders = null;
}

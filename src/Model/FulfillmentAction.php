<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Specifies whether the fulfillment order should ship now or have an order hold
 * put on it.
 */
class FulfillmentAction extends AbstractModel
{
    protected $isRawObject = true;
}

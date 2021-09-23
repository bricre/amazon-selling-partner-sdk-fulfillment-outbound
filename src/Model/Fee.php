<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Fee type and cost.
 */
class Fee extends AbstractModel
{
    /**
     * The type of fee.
     *
     * @var string
     */
    public $name = null;

    /**
     * The amount of the fee.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $amount = null;
}

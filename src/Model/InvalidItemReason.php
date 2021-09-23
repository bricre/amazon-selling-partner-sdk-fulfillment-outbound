<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The reason that the item is invalid for return.
 */
class InvalidItemReason extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\InvalidItemReasonCode
     */
    public $invalidItemReasonCode = null;

    /**
     * A human readable description of the invalid item reason code.
     *
     * @var string
     */
    public $description = null;
}

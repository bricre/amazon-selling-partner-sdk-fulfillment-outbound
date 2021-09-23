<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An array of items that Amazon accepted for return. Returns empty if no items
 * were accepted for return.
 */
class ReturnItemList extends AbstractModel
{
    protected $isRawObject = true;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The createFulfillmentReturn operation creates a fulfillment return for items
 * that were fulfilled using the createFulfillmentOrder operation. For calls to
 * createFulfillmentReturn, you must include ReturnReasonCode values returned by a
 * previous call to the listReturnReasonCodes operation.
 */
class CreateFulfillmentReturnRequest extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\CreateReturnItemList
     */
    public $items = null;
}

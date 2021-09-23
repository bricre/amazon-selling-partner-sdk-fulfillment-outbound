<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the listReturnReasonCodes operation.
 */
class ListReturnReasonCodesResponse extends AbstractModel
{
    /**
     * The payload for the listReturnReasonCodes operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ListReturnReasonCodesResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listReturnReasonCodes
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

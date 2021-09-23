<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getFulfillmentPreview operation.
 */
class GetFulfillmentPreviewResponse extends AbstractModel
{
    /**
     * The response payload for the getFulfillmentPreview operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\GetFulfillmentPreviewResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getFulfillmentPreview
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

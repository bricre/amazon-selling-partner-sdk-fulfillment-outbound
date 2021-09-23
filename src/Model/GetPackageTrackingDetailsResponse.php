<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPackageTrackingDetails operation.
 */
class GetPackageTrackingDetailsResponse extends AbstractModel
{
    /**
     * The payload for the getPackageTrackingDetails operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\PackageTrackingDetails
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getPackageTrackingDetails
     * operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The breakdown of eligibility inventory by feature.
 */
class GetFeatureInventoryResponse extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\GetFeatureInventoryResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getFeatureInventory operation.
     *
     * @var \Amz\FulfillmentOutbound\Model\ErrorList
     */
    public $errors = null;
}

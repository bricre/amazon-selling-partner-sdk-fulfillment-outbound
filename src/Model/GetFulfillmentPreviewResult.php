<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of fulfillment order previews, including estimated shipping weights,
 * estimated shipping fees, and estimated ship dates and arrival dates.
 */
class GetFulfillmentPreviewResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentPreviewList
     */
    public $fulfillmentPreviews = null;
}

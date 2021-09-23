<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The time range within which a Scheduled Delivery fulfillment order should be
 * delivered.
 */
class DeliveryWindow extends AbstractModel
{
    /**
     * The date and time of the start of the Scheduled Delivery window, in ISO 8601
     * date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $startDate = null;

    /**
     * The date and time of the end of the Scheduled Delivery window, in ISO 8601 date
     * time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $endDate = null;
}

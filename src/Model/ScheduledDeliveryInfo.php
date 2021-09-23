<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Delivery information for a scheduled delivery.
 */
class ScheduledDeliveryInfo extends AbstractModel
{
    /**
     * The time zone of the destination address for the fulfillment order preview. Must
     * be an IANA time zone name. Example: Asia/Tokyo.
     *
     * @var string
     */
    public $deliveryTimeZone = null;

    /**
     * An array of time ranges that are available for scheduled delivery.
     *
     * @var \Amz\FulfillmentOutbound\Model\DeliveryWindowList
     */
    public $deliveryWindows = null;
}

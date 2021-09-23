<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information for tracking package deliveries.
 */
class TrackingEvent extends AbstractModel
{
    /**
     * The date and time that the delivery event took place, in ISO 8601 date time
     * format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $eventDate = null;

    /**
     * The city where the delivery event took place.
     *
     * @var \Amz\FulfillmentOutbound\Model\TrackingAddress
     */
    public $eventAddress = null;

    /**
     * The event code for the delivery event.
     *
     * @var \Amz\FulfillmentOutbound\Model\EventCode
     */
    public $eventCode = null;

    /**
     * A description for the corresponding event code.
     *
     * @var string
     */
    public $eventDescription = null;
}

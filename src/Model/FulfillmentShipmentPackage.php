<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Package information for a shipment in a fulfillment order.
 */
class FulfillmentShipmentPackage extends AbstractModel
{
    /**
     * Identifies a package in a shipment.
     *
     * @var int
     */
    public $packageNumber = null;

    /**
     * Identifies the carrier who will deliver the shipment to the recipient.
     *
     * @var string
     */
    public $carrierCode = null;

    /**
     * The tracking number, if provided, can be used to obtain tracking and delivery
     * information.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * The estimated arrival date and time of the package, in ISO 8601 date time
     * format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $estimatedArrivalDate = null;
}

<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Delivery and item information for a shipment in a fulfillment order preview.
 */
class FulfillmentPreviewShipment extends AbstractModel
{
    /**
     * The earliest date that the shipment is expected to be sent from the fulfillment
     * center, in ISO 8601 date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $earliestShipDate = null;

    /**
     * The latest date that the shipment is expected to be sent from the fulfillment
     * center, in ISO 8601 date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $latestShipDate = null;

    /**
     * The earliest date that the shipment is expected to arrive at its destination.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $earliestArrivalDate = null;

    /**
     * The latest date that the shipment is expected to arrive at its destination, in
     * ISO 8601 date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $latestArrivalDate = null;

    /**
     * Provides additional insight into the shipment timeline when exact delivery dates
     * are not able to be precomputed.
     *
     * @var string[]
     */
    public $shippingNotes = null;

    /**
     * Information about the items in the shipment.
     *
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentPreviewItemList
     */
    public $fulfillmentPreviewItems = null;
}

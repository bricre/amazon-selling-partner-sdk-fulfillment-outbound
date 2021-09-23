<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Delivery and item information for a shipment in a fulfillment order.
 */
class FulfillmentShipment extends AbstractModel
{
    /**
     * A shipment identifier assigned by Amazon.
     *
     * @var string
     */
    public $amazonShipmentId = null;

    /**
     * An identifier for the fulfillment center that the shipment will be sent from.
     *
     * @var string
     */
    public $fulfillmentCenterId = null;

    /**
     * The current status of the shipment.
     *
     * @var string
     */
    public $fulfillmentShipmentStatus = null;

    /**
     * The meaning of the shippingDate value depends on the current status of the
     * shipment. If the current value of FulfillmentShipmentStatus is:.
     *
     * * Pending - shippingDate represents the estimated time that the shipment will
     * leave the Amazon fulfillment center.
     *
     * * Shipped - shippingDate represents the date that the shipment left the Amazon
     * fulfillment center.
     * If a shipment includes more than one package, shippingDate applies to all of the
     * packages in the shipment. If the value of FulfillmentShipmentStatus is
     * CancelledByFulfiller or CancelledBySeller, shippingDate is not returned. The
     * value must be in ISO 8601 date time format.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $shippingDate = null;

    /**
     * The estimated arrival date and time of the shipment, in ISO 8601 date time
     * format. Note that this value can change over time. If a shipment includes more
     * than one package, estimatedArrivalDate applies to all of the packages in the
     * shipment. If the shipment has been cancelled, estimatedArrivalDate is not
     * returned.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $estimatedArrivalDate = null;

    /**
     * Provides additional insight into shipment timeline. Primairly used to
     * communicate that actual delivery dates aren't available.
     *
     * @var string[]
     */
    public $shippingNotes = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentShipmentItemList
     */
    public $fulfillmentShipmentItem = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentShipmentPackageList
     */
    public $fulfillmentShipmentPackage = null;
}

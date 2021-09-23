<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PackageTrackingDetails extends AbstractModel
{
    /**
     * The package identifier.
     *
     * @var int
     */
    public $packageNumber = null;

    /**
     * The tracking number for the package.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * Link on swiship.com that allows customers to track the package.
     *
     * @var string
     */
    public $customerTrackingLink = null;

    /**
     * The name of the carrier.
     *
     * @var string
     */
    public $carrierCode = null;

    /**
     * The phone number of the carrier.
     *
     * @var string
     */
    public $carrierPhoneNumber = null;

    /**
     * The URL of the carrier’s website.
     *
     * @var string
     */
    public $carrierURL = null;

    /**
     * The shipping date for the package.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $shipDate = null;

    /**
     * The estimated arrival date.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $estimatedArrivalDate = null;

    /**
     * The destination city for the package.
     *
     * @var \Amz\FulfillmentOutbound\Model\TrackingAddress
     */
    public $shipToAddress = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\CurrentStatus
     */
    public $currentStatus = null;

    /**
     * Description corresponding to the CurrentStatus value.
     *
     * @var string
     */
    public $currentStatusDescription = null;

    /**
     * The name of the person who signed for the package.
     *
     * @var string
     */
    public $signedForBy = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\AdditionalLocationInfo
     */
    public $additionalLocationInfo = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\TrackingEventList
     */
    public $trackingEvents = null;
}

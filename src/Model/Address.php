<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A physical address.
 */
class Address extends AbstractModel
{
    /**
     * The name of the person, business or institution at the address.
     *
     * @var string
     */
    public $name = null;

    /**
     * The first line of the address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine3 = null;

    /**
     * The city where the person, business, or institution is located.
     *
     * @var string
     */
    public $city = null;

    /**
     * The district or county where the person, business, or institution is located.
     *
     * @var string
     */
    public $districtOrCounty = null;

    /**
     * The state or region where the person, business or institution is located.
     *
     * @var string
     */
    public $stateOrRegion = null;

    /**
     * The postal code of the address.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The two digit country code. In ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The phone number of the person, business, or institution located at the address.
     *
     * @var string
     */
    public $phone = null;
}

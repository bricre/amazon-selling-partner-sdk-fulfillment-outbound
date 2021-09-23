<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Address information for tracking the package.
 */
class TrackingAddress extends AbstractModel
{
    /**
     * The city.
     *
     * @var string
     */
    public $city = null;

    /**
     * The state.
     *
     * @var string
     */
    public $state = null;

    /**
     * The country.
     *
     * @var string
     */
    public $country = null;
}
